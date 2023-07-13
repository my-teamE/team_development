<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class profileController extends Controller
{
    //
    public function index()
    {
        //ログインしているユーザーのstudent_idを取得する
        $student_id = Auth::user()->student_id;
        $profile = Profile::where('student_id', '=', $student_id)->first();
        $account = Account::where('student_id', '=', $student_id)->first();
        // dd($profile);

        return view('profile', compact('profile', 'account'));
    }
}
