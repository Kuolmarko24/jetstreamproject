<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miscellaneousController extends Controller
{
    //
    public function jstree(){
        return view('backend.miscellaneous.jstree');
    }
    public function toast(){
        return view('backend.miscellaneous.toast');
    }
    public function sweetalert(){
        return view('backend.miscellaneous.sweetalert');
    }
}
