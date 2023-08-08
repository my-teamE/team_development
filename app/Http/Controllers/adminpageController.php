<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminpageController extends Controller
{
    //
    public function index()
    {
        return view('adminpage');
    }
}
