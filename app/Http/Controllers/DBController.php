<?php

namespace App\Http\Controllers;

use App\BusinessTemp;
use App\Product;
use App\Shelf;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Request;

use Validator;


use App\Business;
use App\Admin;

class DBController extends Controller
{
    public function results(Request $request){
        return view('/');
    }

    public function viewProduct(Request $request){
        return view('product-view');
    }

    public function viewSME(Request $request){
        $username = "hudson.lekunze@ashesi.edu.gh";
        $business = DB::table('businesses')->where('email','=',$username)->get();
        $products = DB::table('products')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('products')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        return view('sme-view',compact('products','shelves','business'));
    }

    public function smeguest($id){
        $business = DB::table('businesses')->where('id','=',$id)->get();
        $business = json_decode($business);
        $username = ((array) $business[0])['email'];

        $products = DB::table('products')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('products')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        return view('pages.sme-guest',compact('products','shelves','business'));
    }

    //------------------------VERIFIED BUSINESSESS FUNCTIONS----------------------------



    public function sme(Request $request, $sme){

        if(!Auth::check()){
            //return $sme;
            //return redirect('/login');
            $business= Business::where('business_slug','=',$sme)->get();
            $products = Product::where('bid','=',$business[0]->id)->orderBy('product_shelf', 'asc')->get();
            $shelves = Shelf::distinct()->select('shelf_name')->where('sid','=',$business[0]->id)->get();
            return view('pages.new-ui.app-store',compact('products','shelves','business'));

        }

        /*$products = DB::table('products')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('products')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();*/

        $shelves = Shelf::where('sid','=',Auth::id())->get();
        $products = Product::where('bid','=',Auth::id())->get();
        $business = Business::find(Auth::id());

        return view('pages.new-ui.app-store-x',compact('products','shelves','business'));
    }

    public function newProduct(){

        if(!Auth::check()){
            return redirect('/login');
        }

        $business = Business::find(Auth::id());
        //$shelves = DB::table('products')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();
        $shelves = Shelf::where('sid','=',Auth::id())->get();

        //return $shelves;
        return view('pages.new-ui.app-store-product',compact('business','shelves'));
    }

    //Open Page with Shelves
    public function shelves(){
        if(!Auth::check()){
            return redirect('/login');
        }

        $business = Business::find(Auth::id());
        $count_shelves = Shelf::where('sid','=',Auth::id())->count();
        $shelves = Shelf::where('sid','=',Auth::id())->get();
        //return $shelves;
        return view('pages.new-ui.app-store-shelf',compact('business','shelves','count_shelves'));
    }

    //Add new Shelf
    public function shelf(Request $request){

        $no_of_shelves = Shelf::where('sid','=',Auth::id())->count();

        if($no_of_shelves > 4){
            return "{'Response':'Maximum number of shelves reached already'}";
        }
        $shelf = new Shelf();
        $shelf->sid = Auth::id();
        $shelf->shelf_name = Input::get('shelf');
        $shelf->save();

        $addedShelf = Shelf::find($shelf->id);
        return \Response::json($addedShelf);

    }

    //Delete Shelf
    public function deleteshelf(Request $request){
        $id = Input::get('id');
        $shelf = Shelf::destroy($id);
        return \Response::json($id);
    }

    public function manageProducts(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $business = Business::find(Auth::id());
        return view('pages.sme.manage-products',compact('business'));
    }

    public function change(){
        /*if(!Auth::check()){
            return redirect('/login');
        }*/

        //$business = Business::find(Auth::id());
        return view('pages.new-ui.app-store-change');
    }

    public function changePassword(Request $request){
        if(!Auth::check()){
            return redirect('/login');
        }

        $message = "";
        $oldPassword = Input::get('old_password');
        $newPassword = Input::get('password');

        $current_password = Auth::user()->getAuthPassword();

        $business = Business::find(Auth::id());

        if(Hash::check($oldPassword,$current_password)){
            $id = Auth::id();
            $user = User::find($id);
            $user->password = Hash::make($newPassword);
            $user->save();

            $message = "Password successfully changed";
            return view('pages.sme.change-password',compact('business','message'));

        }else{
            $message = "Failed to change password";
            return view('pages.sme.change-password',compact('business','message'));
        }


    }


    //--------------------------------- END OF VERIFIED BUSINESS FUNCTIONS ----------------------------------------


    /*--------------------------------- GUEST VIEW ----------------------------------------------------------------*/

    public function shop(Request $request, $sme){

        //$username = DB::table('businesses')->distinct()->select('email')->where('slug','=',$sme)->get();
        //$username = ((array) $username[0])['email'];
        //$business = DB::table('businesses')->where('email','=',$username)->get();
        $business= Business::where('business_slug','=',$sme)->get();

        $products = Product::where('bid','=',$business[0]->id)->orderBy('product_shelf', 'asc')->get();
        $shelves = Shelf::distinct()->select('product_shelf')->where('bid','=',$business[0]->id)->get();
        //return $products;
        return view('shop',compact('products','shelves','business'));
    }

    public function product(Request $request, $sme, $product){
        //$username = DB::table('businesses')->distinct()->select('email','business_name')->where('business_slug','=',$sme)->get();
        $business= Business::where('business_slug','=',$sme)->get();
        $productX= Product::where('product_slug','=',$product)->where('bid','=',$business[0]->id)->get();
        $business_name = $business[0]->business_name;
        //return "Business: " . $business_name . "\nProduct: " . $product[0]->product_name;
        //return ((array) $products[0])['product_image_1'];
        //return view('product',compact('productX','sme','business_name'));
        return view('pages.new-ui.app-product',compact('productX','sme','business_name'));
    }








    public function store(Request $request)
    {


        //https://uk.godaddy.com/community/Managing-Web-Hosting/Contact-form-email-in-PHP-to-send-email-on-CPanel-account-fails/td-p/8270
        /*$to = $email; // <– replace with your address here
        $subject = "Welcome to Lytes.App";
        $message = "Hello ". $sme . ", \nWelcome to Lytes.App!\nYour application is under review and you will receive an email with your login ID, password and link shortly if your Shop is approved.
        \nThis process takes only a couple of hours.\n\nBest,\nThe Lytes.App Team";
        $from = "welcome@lytesapp.com";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);*/

        return redirect()->intended('/success');
    }






    public function new_customer(Request $request){
        //CustomerDetails::create(Request::all());
        //return redirect()->intended('/login');
        $customer = new CustomerDetails;
        $img = request()->file('test');
        $imgName = 'random-1' . '.' . $img->getClientOriginalExtension();
        $img->move( base_path() . '/public/img/rx',$imgName);
        $customer->fullname = '/img/rx/' . $imgName;
        $customer->save();

        return $this->retrieve();
        //return $img;
    }

    public function retrieve(){
        $customers = DB::table('customer_details')->get();
        //return $customers;
        return view('retrieve')->with('data', $customers);
    }

    /**LOGIN**/

    //https://stackoverflow.com/questions/32496980/laravel-5-how-to-check-username-password-is-match-with-table
    //Customer login function
    public function customer_login(Request $request){
        $username = Input::get('username');
        $password = Input::get('password');


        if(Auth::attempt(array('customer_id'=>$username, 'password'=>$password))){
            return redirect()->intended('/home');
        }else{
            return "wrong credentials";
        }
    }



    //Administrator login function
    public function admin_login(Request $request){

        $username = Input::get('username');
        $password = Input::get('password');

        $admin = DB::table('admin')->where('username','=',$username)->get();

        $admin = json_decode($admin);

        //dd($business);
        if(($username == ((array) $admin[0])['username'])&&($password == ((array) $admin[0])['password'])){
            $data = BusinessTemp::all();
            return view('pages.admin.home')->with('data', $data);
        }

        $error = 'Login failed';

        return view('pages.customer-signin')->with('error',$error);
    }

    public function profile($id){
        $data = BusinessTemp::find($id);
        return view('pages.admin.profile')->with('data',$data);
    }

    public function approve($id){
        $data = DB::table('businesses_temp')->where('id', $id)->get();
        $email = $data[0]->email;
        $sme = $data[0]->business_name;
        Business::insert($data->toArray());

        $password = uniqid(str_random(1));

        DB::table('businesses')->where('id',$id)->update(['password'=> $password]);
        $data->delete();

        //https://uk.godaddy.com/community/Managing-Web-Hosting/Contact-form-email-in-PHP-to-send-email-on-CPanel-account-fails/td-p/8270
        $to = $email;
        $subject = "Lytes.App Application Approved";
        $message = "Hello ". $sme . ", \nYour Shop on Lytes.App has been approved.
        \nLogin at http://lytesapp.com/login with Username: ". $sme." and Password: ". $password ."\n\nBest,\nThe Lytes.App Team";
        $from = "welcome@lytesapp.com";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

        //Send Approval Message
        return redirect()->intended('/dashboard');
    }

    public function reject($id){
        $data = BusinessTemp::find($id);
        $data->delete();
        //Send Rejection Message
    }

    public function search(Request $request){

        $products = ""; //Result
        $product = Input::get('product');
        $category = Input::get('category');

        if (empty($category)){
            $products = Product::where('product_name','like',"$product%")
                ->join('BUSINESSES','BUSINESSES.id','=','PRODUCTS.bid')
                ->select('PRODUCTS.product_name','PRODUCTS.product_price','PRODUCTS.product_slug','PRODUCTS.product_images',
                    'BUSINESSES.business_slug','BUSINESSES.business_name', 'BUSINESSES.business_area', 'BUSINESSES.business_number')
                ->get();
        }

        if(!Request::ajax()){
            //return Input::get('product');
            //$products = null;
            return view('search-results',compact('products'));
            //return redirect('/search')->with(compact('products'));
            //return $products;
        }
        else{
            return \Response::json($products);
        }
        //return "Hello";

        //return "Categories: " . $category;


        //return \Response::json($category);
        //$category = Input::get('category');
        //$location = Input::get('location');

        return view('search-results',compact('products','shelves'));
//        return $products;

    }



}
