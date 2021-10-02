<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function productdetails(){
        return view('backend.products.productdetails');
    }
    public function productlist(){
        return view('backend.products.productlist');
    }
    public function productscard(){
        return view('backend.products.productscard');
    }
}
