<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class analyticsController extends Controller
{
    public function analytics(){
        return view('backend.analytics');
    }
}
