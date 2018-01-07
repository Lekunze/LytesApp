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
use Illuminate\Http\Request;

use Validator;


use App\Business;
use App\Admin;

class DBController extends Controller
{
    public function results(Request $request){
        return view('/');
    }

    public function slugCheck(Request $request){
        $slug = Input::get('business');

        if(strlen($slug)>=3){
            $business= Business::where('business_slug','=',$slug)->get();

            if(!sizeof($business)>0){
                return \Response::json(['message'=>'Available']);
            }else{
                return \Response::json(['message'=>'Negative']);
            }
        }



    }

    public function userCheck(Request $request){
        $email = Input::get('user');

        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {

            $user = User::where('email', '=', $email)->get();

            if (!sizeof($user) > 0) {
                return \Response::json(['message' => 'Available']);
            } else {
                return \Response::json(['message' => 'Negative']);
            }
        }else{
            return \Response::json(['message'=>'Error']);

        }


    }


    //------------------------VERIFIED BUSINESSESS FUNCTIONS----------------------------


    //Product View
    public function product(Request $request, $sme, $product){
        //$username = DB::table('businesses')->distinct()->select('email','business_name')->where('business_slug','=',$sme)->get();
        $business= Business::where('business_slug','=',$sme)->get();
        if(!sizeof($business)>0){
            return view('errors.503');
        }

        $product= Product::where('product_slug','=',$product)->get();
        if(!sizeof($product)>0){
            return view('errors.504');
        }


        $business= Business::where('business_slug','=',$sme)->get();
        $productX= Product::where('product_slug','=',$product)->where('bid','=',$business[0]->id)->get();
        //$business_name = $business[0]->business_name;
        //return "Business: " . $business_name . "\nProduct: " . $product[0]->product_name;
        //return ((array) $products[0])['product_image_1'];
        //return view('product',compact('productX','sme','business_name'));
        return view('pages.new-ui.app-product',compact('productX','sme','business'));
    }

    public function sme(Request $request, $sme){

        //Guest View
        if(!Auth::check()){
            //return $sme;
            //return redirect('/login');
            $business= Business::where('business_slug','=',$sme)->get();

            $products = Product::where('bid','=',$business[0]->id)->orderBy('bid', 'asc')->get();
            $shelves = Shelf::distinct()->select('shelf_name')->where('bid','=',$business[0]->id)->get();
            return view('pages.new-ui.app-store',compact('products','shelves','business'));

        }

        /*$products = DB::table('products')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('products')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();*/

        //SME View, other SME
        $business= Business::where('business_slug','=',$sme)->get();
        if(!sizeof($business)>0){
            return view('errors.503');
        }


        if($business[0]->id != Auth::id()){
            $products = Product::where('bid','=',$business[0]->id)->orderBy('bid', 'asc')->get();
            $shelves = Shelf::distinct()->select('shelf_name')->where('bid','=',$business[0]->id)->get();
            return view('pages.new-ui.app-store',compact('products','shelves','business'));
        }


        //SME View, same SME
        $shelves = Shelf::where('bid','=',Auth::id())->get();
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
        $shelves = Shelf::where('bid','=',Auth::id())->get();

        //return $shelves;
        return view('pages.new-ui.app-store-product',compact('business','shelves'));
    }
    //Open Page with Products
    public function products(){
        if(!Auth::check()){
            return redirect('/login');
        }

        $business = Business::find(Auth::id());
        $shelves = Shelf::where('bid','=',Auth::id())->get();
        $products = Product::where('bid','=',Auth::id())->get();
        //return $shelves;
        return view('pages.new-ui.app-store-product-edit',compact('business','shelves','products'));
    }

    //Open Page with Shelves
    public function shelves(){
        if(!Auth::check()){
            return redirect('/login');
        }

        $business = Business::find(Auth::id());
        $count_shelves = Shelf::where('bid','=',Auth::id())->count();
        $shelves = Shelf::where('bid','=',Auth::id())->get();
        //return $shelves;
        return view('pages.new-ui.app-store-shelf',compact('business','shelves','count_shelves'));
    }

    //Add new Shelf
    public function shelf(){

        //return "Hello";

        $no_of_shelves = Shelf::where('bid','=',Auth::id())->count();

        $shelf = new Shelf();
        $shelf->bid = Auth::id();
        $shelf->shelf_name = Input::get('shelf');
        $shelf->save();

        $business= Business::where('id','=',Auth::id())->get();
        return redirect($business[0]->business_slug.'/shelves')->with('no_of_shelves',$no_of_shelves);

    }

    //Delete Shelf
    public function deleteshelf(Request $request){
        $id = Input::get('id');
        $shelf = Shelf::destroy($id);
        return \Response::json($id);
    }

    //Delete Product
    public function deleteProduct(Request $request){
        $id = Input::get('id');
        $product = Product::destroy($id);
        return \Response::json($id);
    }

    //Edit Product
    public function editProduct(Request $request)
    {
        $name = Input::get('edit_product_name');;
        $price = Input::get('edit_product_price');;
        $id = Input::get('edit_product_id');;

        Product::where('id',$id)->update(['product_name'=>$name,'product_price'=>$price]);

        $business= Business::where('id','=',Auth::id())->get();
        return redirect($business[0]->business_slug.'/products');
    }

    //Edit Shelf
    public function editShelf(Request $request)
    {
        $name = Input::get('edit_shelf_name');;
        $id = Input::get('edit_shelf_id');;

        Shelf::where('id',$id)->update(['shelf_name'=>$name]);

        $business= Business::where('id','=',Auth::id())->get();
        return redirect($business[0]->business_slug.'/shelves');
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

        $message = "";
        $businessEmail = Input::get('user_email');
        $oldPassword = Input::get('old_password');
        $newPassword = Input::get('password');

        //$current_password = Auth::user()->getAuthPassword();

        $user= User::where('email','=',$businessEmail)->get();

        if(sizeof($user)==0){
//            return "Here";
            $message = "User doesn't exist";
            return view('pages.new-ui.app-store-change',compact('message'));
            //return redirect('/change')->with('message',$message);
        }


        if(Hash::check($oldPassword,$user[0]->password)){
            $id = Auth::id();
            $user = User::find($id);
            $user->password = Hash::make($newPassword);
            $user->save();

            $message = "Password successfully changed";
            return view('pages.new-ui.app-store-change',compact('message'));
        }else{
            $message = "Failed to change password";
            return view('pages.new-ui.app-store-change',compact('message'));
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
