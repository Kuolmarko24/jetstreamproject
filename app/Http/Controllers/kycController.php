<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kycController extends Controller
{
    //
    public function kyclist(){
        return view('backend.kyc.kyclist');
    }
    public function kycdetails(){
        return view('backend.kyc.kycdetails');
    }
}
