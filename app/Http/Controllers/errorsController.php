<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorsController extends Controller
{
    //
    public function fourOfour(){
        return view('backend.errors.404');
    }
    public function fiveOfive(){
        return view('backend.errors.504');
    }
}
