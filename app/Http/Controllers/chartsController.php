<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartsController extends Controller
{
    //
    public function chartsjs(){
        return view('backend.charts.chartjs');
    }
    public function knob(){
        return view('backend.charts.knob');
    }
    public function emailtemplate(){
        return view('backend.emailtemplate');
    }
}
