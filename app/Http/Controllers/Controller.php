<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //Handles Business Owner Login
    public function login(){
        $userdata = array(
            'email' => Input::get('username') ,
            'password' => Input::get('password')
        );

        if(Auth::attempt($userdata)){
            return redirect()->intended('/'. Auth::user()->username);
        }else{
            $error = 'Wrong username or password';
            return view('pages.new-ui.app-signin',compact('error'));
        }
    }
}
