<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsController extends Controller
{
    //
    public function validation(){
        return view('backend.forms.date');
    }
    public function date(){
        return view('backend.forms.date');
    }
    public function formupload(){
        return view('backend.forms.formupload');
    }
}
