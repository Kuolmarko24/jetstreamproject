<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cryptoController extends Controller
{
    //
    public function crypto(){
        return view('backend.crypto');
    }
}
