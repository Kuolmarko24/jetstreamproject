<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otherController extends Controller
{
    //
    public function faqs(){
        return view('backend.other.faqs');
    }
    public function terms(){
        return view('backend.other.terms');
    }
}
