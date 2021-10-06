<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablesController extends Controller
{
    //
    public function basictables(){
        return view('backend.tables.basictable');
    }
    public function datatables(){
        return view('backend.tables.datatable');
    }
}
