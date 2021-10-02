<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    //
    public function loginpage(){
        return view('backend.authpages.login');
    }
    public function registerpage(){
        return view('backend.authpages.register');
    }
    public function forgotpasswd(){
        return view('backend.authpages.forgotpasswd');
    }
    public function confirm(){
        return view('backend.authpages.confirm');
    }

}
