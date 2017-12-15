<?php

namespace App\Http\Controllers;

use App\BusinessTemp;
use App\Product;
use App\CustomerDetails;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Request;
use Auth;

use Validator;


use App\Businesses;
use App\Admin;

class DBController extends Controller
{

    public function viewProduct(Request $request){
        return view('product-view');
    }

    public function viewSME(Request $request){
        $username = "hudson.lekunze@ashesi.edu.gh";
        $business = DB::table('businesses')->where('email','=',$username)->get();
        $products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        return view('sme-view',compact('products','shelves','business'));
    }

    public function smeguest($id){
        $business = DB::table('businesses')->where('id','=',$id)->get();
        $business = json_decode($business);
        $username = ((array) $business[0])['email'];

        $products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        return view('pages.sme-guest',compact('products','shelves','business'));
    }
    public function sme(Request $request){
        $username = Cookie::get('username');

        if(!$username){
            return view('pages.customer-signin');
        }

        $business = DB::table('businesses')->where('email','=',$username)->get();
        $products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        return view('pages.sme.home',compact('products','shelves','business'));
        //return json_decode($business);
    }

    //Business login function
    public function business_login(Request $request){
        $username = Input::get('username');
        $password = Input::get('password');

        $business = DB::table('businesses')->where('email','=',$username)->get();

        $business = json_decode($business);

        //dd($business);
        if(($username == ((array) $business[0])['email'])&&($password == ((array) $business[0])['password'])){
            $cookie = cookie('username',$username,10080);
            return redirect('/sme')->cookie($cookie);
        }

        /*if(Auth::guard('businesses')->attempt(array('email'=>$username, 'password'=>$password))){
            //return Auth::user()->customer_id;
            return redirect()->intended('/sme');
        }else{
            return Auth::user()->email;
        }*/

        $error = 'Username or Password is incorrect';

        return view('pages.customer-signin')->with('error',$error);

    }

    public function changePassword(Request $request){
        $username = Cookie::get('username');
        if(!$username){
            return redirect('/login');
        }

        $message = "";
        $oldPassword = Input::get('old-password');
        $newPassword = Input::get('password');
        $result = DB::table('businesses')->where('email','=',$username)->where('password','=',$oldPassword)->update(['password' => $newPassword]);

        $business = DB::table('businesses')->where('email','=',$username)->get();

        if($result==1){
            return view('pages.sme.changed-password',compact('business'));
        }else{
            $message = "Failed to change password";
        }

        return view('pages.sme.person',compact('business','message'));

    }

    public function addProduct(Request $request){
        $product = new Product;
        $username = Cookie::get('username');


        $imageHandle = Input::get($username);
        $imageHandle = md5($imageHandle);
        $imageHandle = substr($imageHandle, 0,5);

        $imgPath = base_path() . '/public/img/rx/';
        $pdt_image_1 = request()->file('pdt-image-1');
        $pdt_image_2 = request()->file('pdt-image-2');
        $pdt_image_3 = request()->file('pdt-image-3');

        $pdt_image_1_logoName = $imageHandle . '-p1'. '.' . $pdt_image_1->getClientOriginalExtension();
        $pdt_image_2_logoName = $imageHandle . '-p2'. '.' . $pdt_image_2->getClientOriginalExtension();
        $pdt_image_3_logoName = $imageHandle . '-p3'. '.' . $pdt_image_3->getClientOriginalExtension();

        $pdt_image_1->move($imgPath, $pdt_image_1_logoName);
        $pdt_image_2->move($imgPath, $pdt_image_2_logoName);
        $pdt_image_3->move($imgPath, $pdt_image_3_logoName);

        $pdt_image_1 = 'img/rx/' . $pdt_image_1_logoName;
        $pdt_image_2 = 'img/rx/' . $pdt_image_1_logoName;
        $pdt_image_3 = 'img/rx/' . $pdt_image_1_logoName;


        $product->business_id = $username;
        $product->product_name = Input::get('product-name');
        $product->product_price = Input::get('product-price');
        $product->product_category = Input::get('product-category');
        $product->product_shelf = Input::get('product-shelf');
        $product->product_color = Input::get('product-color');
        $product->product_image_1 = $pdt_image_1;
        $product->product_image_2 = $pdt_image_2;
        $product->product_image_3 = $pdt_image_3;
        $product->save();

        return redirect('/sme');
    }

    public function new_pdt(){
        $username = Cookie::get('username');
        if(!$username){
            return redirect('/login');
        }

        $business = DB::table('businesses')->where('email','=',$username)->get();
        $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();

        //return $shelves;
        return view('pages.sme.new-product',compact('business','shelves'));
    }

    public function store_info(){
        $username = Cookie::get('username');
        if(!$username){
            return redirect('/login');
        }

        $shelves = DB::table('customer_details')->where('customer_id','=',$username)->get();
        $business = DB::table('businesses')->where('email','=',$username)->get();
        return view('pages.sme.store-info',compact('business','shelves'));
    }

    public function manageProducts(){
        $username = Cookie::get('username');
        if(!$username){
            return redirect('/login');
        }
        $business = DB::table('businesses')->where('email','=',$username)->get();
        return view('pages.sme.manage-products',compact('business'));
    }

    public function change(){
        $username = Cookie::get('username');
        if(!$username){
            return redirect('/login');
        }
        $business = DB::table('businesses')->where('email','=',$username)->get();
        return view('pages.sme.person',compact('business'));
    }



    public function shelf(Request $request){


        if(Request::ajax()){
            $customer = new CustomerDetails();
            $customer->customer_id = "hudson.lekunze@ashesi.edu.gh";
            $customer->fullname = Input::get('search');
            $customer->save();
       }

        $shelves = DB::table('customer_details')->where('customer_id','=','hudson.lekunze@ashesi.edu.gh')->get();

        $tell = true;
        return view('pages.sme.store-info',compact('tell','shelves'));

    }

    public function deleteshelf(Request $request){
        if(Request::ajax()){
            $id = Input::get('id');
            DB::table('customer_details')->where('id','=', $id)->delete();
        }

        $shelves = DB::table('customer_details')->where('customer_id','=','hudson.lekunze@ashesi.edu.gh')->get();

        $tell = true;
        return view('pages.sme.store-info',compact('tell','shelves'));

    }


    public function store(Request $request)
    {
        $tempBusiness = new BusinessTemp;

        //$tempBusiness->business_owner_last_name = Input::get('business_owner_last_name');
        $imageHandle = Input::get('email');
        $imageHandle = md5($imageHandle);
        $imageHandle = substr($imageHandle, 0,5);


        $messages =  [
            'digits_between' => 'Incorrect phone number entered. Check',
            'required' => 'Image is required',
        ];



        Validator::make(Request::all(),[
            'business_owner_last_name' => 'required|regex:/^[a-zA-Z. -]+$/u',
            'business_owner_given_names' => 'string',
            'business_name' => 'string',
            'email' => 'email',
            'region' => 'string',
            'id_number' => 'string',
            'address' => 'string',
            'area' => 'string',
            'phone_number' => 'digits_between:10,10',
            'business_number' => 'digits_between:10,10',
        ], $messages)->validate();

        $imgPath = base_path() . '/public/img/rx/';
        $logo = request()->file('business_logo');
        $cover_image_1 = request()->file('cover_image_1');
        $cover_image_2 = request()->file('cover_image_2');
        $cover_image_3 = request()->file('cover_image_3');

        $logoName = $imageHandle . '-logo'. '.' . $logo->getClientOriginalExtension();
        $cover_image_1_logoName = $imageHandle . '-c1'. '.' . $cover_image_1->getClientOriginalExtension();
        $cover_image_2_logoName = $imageHandle . '-c2'. '.' . $cover_image_2->getClientOriginalExtension();
        $cover_image_3_logoName = $imageHandle . '-c3'. '.' . $cover_image_3->getClientOriginalExtension();

        $logo->move($imgPath, $logoName);
        $cover_image_1->move($imgPath, $cover_image_1_logoName);
        $cover_image_2->move($imgPath, $cover_image_2_logoName);
        $cover_image_3->move($imgPath, $cover_image_3_logoName);

        $logo = 'img/rx/' . $logoName;
        $cover_image_1 = 'img/rx/' . $cover_image_1_logoName;
        $cover_image_2 = 'img/rx/' . $cover_image_2_logoName;
        $cover_image_3 = 'img/rx/' . $cover_image_3_logoName;




        $email = Input::get('email');
        $sme = Input::get('business_name');

        $tempBusiness->business_owner_last_name = Input::get('business_owner_last_name');
        $tempBusiness->business_owner_given_names = Input::get('business_owner_given_names');
        $tempBusiness->business_name = $sme;
        $tempBusiness->email = $email;
        $tempBusiness->region = Input::get('region');
        $tempBusiness->address = Input::get('address');
        $tempBusiness->area = Input::get('area');
        $tempBusiness->phone_number = Input::get('phone_number');
        $tempBusiness->phone_number_2 = Input::get('phone_number_2');
        $tempBusiness->business_number = Input::get('business_number');
        $tempBusiness->business_number_2 = Input::get('business_number_2');
        $tempBusiness->nationality = Input::get('nationality');
        $tempBusiness->date_of_birth = Input::get('date_of_birth');
        $tempBusiness->id_type = Input::get('id_type');
        $tempBusiness->id_number = Input::get('id_number');
        $tempBusiness->country = Input::get('country');
        $tempBusiness->industry = Input::get('industry');
        $tempBusiness->delivery_services = Input::get('delivery_services');
        $tempBusiness->business_logo = $logo;
        $tempBusiness->cover_image_1 = $cover_image_1;
        $tempBusiness->cover_image_2 = $cover_image_2;
        $tempBusiness->cover_image_3 = $cover_image_3;

        $tempBusiness->save();

        //https://uk.godaddy.com/community/Managing-Web-Hosting/Contact-form-email-in-PHP-to-send-email-on-CPanel-account-fails/td-p/8270
        $to = $email; // <– replace with your address here
        $subject = "Welcome to Lytes.App";
        $message = "Hello ". $sme . ", \nWelcome to Lytes.App!\nYour application is under review and you will receive an email with your login ID, password and link shortly if your Shop is approved.
        \nThis process takes only a couple of hours.\n\nBest,\nThe Lytes.App Team";
        $from = "welcome@lytesapp.com";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

        return redirect()->intended('/success');
    }

    public function product(Request $request, $sme, $product){
        //$business = DB::table('businesses')->where('email','=',$username)->get();
        //$products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $username = DB::table('businesses')->distinct()->select('email','business_name')->where('slug','=',$sme)->get();
        $business_name = ((array) $username[0])['business_name'];
        $username = ((array) $username[0])['email'];
        $products = DB::table('product')->where('business_id','=',$username)
                                        ->where('slug','=',$product)->get();

        //return $username;
        //return ((array) $products[0])['product_image_1'];
        return view('product',compact('products','sme','business_name'));
    }

    public function shop(Request $request, $sme){

        $username = DB::table('businesses')->distinct()->select('email')->where('slug','=',$sme)->get();
        $username = ((array) $username[0])['email'];
        $business = DB::table('businesses')->where('email','=',$username)->get();
        $products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
        $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();
        //return $products;
        return view('shop',compact('products','shelves','business'));
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

        $data = BusinessTemp::all();

        $username = Input::get('username');
        $password = Input::get('password');

        $admin = DB::table('admins')->where('username','=',$username)->get();

        $admin = json_decode($admin);

        //dd($business);
        if(($username == ((array) $admin[0])['username'])&&($password == ((array) $admin[0])['password'])){
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
        Businesses::insert($data->toArray());

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
        $product = Input::get('search');
        $category = Input::get('category');
        $location = Input::get('location');

        $products = "";

        $shelves='true';

        if($product == ""){
            $products = null;
            return view('search-results',compact('products'));
        }
        else{

            if($category != ""){
                if($location != ""){
                    $products = DB::table('product')->select('product.*', 'businesses.business_name', 'businesses.area', 'businesses.business_number')
                        ->join('businesses','businesses.email','=','product.business_id')
                        ->where('product_name','like',"$product%")
                        ->where('product_category','=',"$category")
                        ->where('businesses.area','=',"$location")
                        ->get();
                } else{
                    $products = DB::table('product')->select('product.*', 'businesses.business_name', 'businesses.area', 'businesses.business_number')
                        ->join('businesses','businesses.email','=','product.business_id')
                        ->where('product_name','like',"$product%")
                        ->where('product_category','=',"$category")
                        ->get();
                }
            } elseif($location != "" && $category == ""){
                $products = DB::table('product')->select('product.*', 'businesses.business_name', 'businesses.area', 'businesses.business_number')
                    ->join('businesses','businesses.email','=','product.business_id')
                    ->where('product_name','like',"$product%")
                    ->where('businesses.area','=',"$location")
                    ->get();
            }else{
                $products = DB::table('product')->select('product.*', 'businesses.business_name', 'businesses.area', 'businesses.business_number')
                    ->join('businesses','businesses.email','=','product.business_id')
                    ->where('product_name','like',"$product%")
                    ->get();
            }

        }
        return view('search-results',compact('products','shelves'));
//        return $products;

    }



}
