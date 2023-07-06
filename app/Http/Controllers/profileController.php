<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    public function index()
    {
        $account = Session::get('account');
        return view('profile', compact('account'));
    }
}
