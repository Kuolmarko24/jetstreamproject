<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function userlist(){
        return view('backend.usermanage.user-list-regular');
    }
    public function userprofile(){
        return view('backend.usermanage.user-profile');
    }
    public function usercontact(){
        return view('backend.usermanage.user-contact');
    }
    public function useraccount(){
        return view('backend.usermanage.user-setting');
    }
    public function loginactivity(){
        return view('backend.usermanage.loginactivity');
    }
    public function emailtemplate(){
        return view('backend.emailtemplate');
    }
}
