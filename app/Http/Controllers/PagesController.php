<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessTemp;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function sme(){
        return view('pages.sme.home');
    }

    public function register(){
        return view('pages.new');
    }

    public function product(){
        return view('pages.new-product');
    }

    public function login(){
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
    public function new_pdt(){
        return view('pages.sme.new-product');
    }
    public function change(){
        return view('pages.sme.person');
    }




}
