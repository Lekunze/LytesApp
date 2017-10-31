<?php

namespace App\Http\Controllers;

use App\BusinessTemp;
use App\CustomerDetails;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Request;
use Auth;

use Validator;


use App\Businesses;
use App\Admin;

class DBController extends Controller
{

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

       // $this->validate(Request::all(), $rules, $messages);
        //|image|mimes:jpg,png

        //$business = BusinessTemp::create(Request::all());



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




        $tempBusiness->business_owner_last_name = Input::get('business_owner_last_name');
        $tempBusiness->business_owner_given_names = Input::get('business_owner_given_names');
        $tempBusiness->business_name = Input::get('business_name');
        $tempBusiness->email = Input::get('email');
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




        //$file= Input::get('business_logo');
        //$paths = BusinessTemp::find($business->id);
        //$paths->date_of_birth = $logo;

        //return "Success";

        return redirect()->intended('/received');
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

    //Business login function
    public function business_login(Request $request){
        $username = Input::get('username');
        $password = Input::get('password');

        $business = DB::table('businesses')->where('email','=',$username)->get();

        $business = json_decode($business);
        //dd($business);
        if(($username == ((array) $business[0])['email'])&&($password == ((array) $business[0])['password'])){
            $products = DB::table('product')->where('business_id','=',$username)->orderBy('product_shelf', 'asc')->get();
            $shelves = DB::table('product')->distinct()->select('product_shelf')->where('business_id','=',$username)->get();
            //return $products;
            return view('pages.sme.home',compact('products','shelves'));
        }

        /*if(Auth::guard('businesses')->attempt(array('email'=>$username, 'password'=>$password))){
            //return Auth::user()->customer_id;
            return redirect()->intended('/sme');
        }else{
            return Auth::user()->email;
        }*/

        $error = 'Login failed';

        return view('pages.customer-signin')->with('error',$error);

    }

    //Administrator login function
    public function admin_login(Request $request){
        $username = Input::get('username');
        $password = Input::get('password');

        $data = BusinessTemp::all();


        if(Auth::guard('admins')->attempt(array('username'=>$username, 'password'=>$password))){
            //return redirect()->intended('/');
            return view('pages.admin.home')->with('data', $data);
        }else{
            return "wrong credentials";
        }
    }

    public function profile($id){
        $data = BusinessTemp::find($id);
        return view('pages.admin.profile')->with('data',$data);
    }

    public function approve($id){
        $data = BusinessTemp::find($id);
        $newBusiness = Businesses::create($data->toArray());
        //$newBusinessID = $newBusiness->id;
        $password = bcrypt(md5(uniqid(rand(), true)));
        $newBusiness->password = "sdadada";

        $data->delete();
        //Send Approval Message
        return redirect()->intended('/dashboard');
    }

    public function reject($id){
        $data = BusinessTemp::find($id);
        $data->delete();
        //Send Rejection Message
    }

    public function search(Request $request){
        $pdt = Input::get('search');
        $products = DB::table('product')->where('product_name','like',"$pdt%")->get();
        //$results = DB::where('business_owner_given_names','like',"$pdt%")->get();
        //return $products;
        $shelves='true';
        //return $products;
        return view('search-results',compact('products','shelves'));
        //return view("search-results")->with('products',$products);

    }

    public function results(){
        return view('search-results');
    }



}
