<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopPageController extends Controller
{
    //
    public function index()
    {
        return view('toppage');
    }
    //ログイン機能
    public function login(Request $request)
    {
        $student_id = $request->input('student_id');
        $password = $request->input('password');

        // データベースの比較
        $account = Account::where('student_id', $student_id)
            ->where('password', $password)
            ->first();

        if ($account) {
            Auth::login($account);
            return view('toppage', compact('account'));
        }
    }
    // 認証しているユーザーを取得する
    // $user = Auth::user();
    // 認証しているユーザーのIDを取得する
    // $user_id = Auth::id();
}
