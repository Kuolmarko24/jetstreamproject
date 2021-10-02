<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invoiceController extends Controller
{
    //
    public function invoicelist(){
        return view('backend.invoice.invoicelist');
    }
    public function invoicedetails(){
        return view('backend.invoice.invoicedetail');
    }
}
