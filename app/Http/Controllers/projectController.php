<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    //
    public function projectcard(){
        return view('backend.projects.projectcard');
    }
    public function projectlist(){
        return view('backend.projects.projectlist');
    }
}
