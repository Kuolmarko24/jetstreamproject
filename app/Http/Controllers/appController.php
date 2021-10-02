<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    //
    public function messages(){
        return view('backend.applications.messages');
    }
    public function mail(){
        return view('backend.applications.mail');
    }
    public function filemanager(){
        return view('backend.applications.filemanager');
    }
    public function messenger(){
        return view('backend.applications.messenger');
    }
}
