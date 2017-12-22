<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessTemp;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Response;
use Illuminate\Support\Facades\Cookie;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }


    public function register(){
        return view('pages.new');
    }

    public function product(){
        return view('pages.new-product');
    }

    public function login(){
//        $username = Cookie::get('username');
//
//        if(!$username){
//            return view('pages.customer-signin');
//        }

        return view('pages.customer-signin');
    }

    public function signup(){
        return view('pages.customer-signup');
    }

    public function received(){
        return view('pages.application-received');
    }

    public function home(){
        return view('pages.customer.home');
    }

    public function admin_login(){
        return view('pages.admin.login');
    }

    public function admin_dashboard(){
        return view('pages.admin.home');
    }

    public function profile($id){
        return view('pages.admin.profile');
    }

    //SME Page handlers


    public function logout(){
        Auth::logout();
        return  redirect()->intended('/');
    }

    public function goldilocks(){
        return view('pages.sme.customer-view');
    }


}
