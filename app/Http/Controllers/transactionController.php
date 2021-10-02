<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionController extends Controller
{
    //
    public function tranbasic(){
        return view('backend.transaction.transaction-basic');
    }
    public function trancrypto(){
        return view('backend.transaction.transaction-crypto');
    }
}
