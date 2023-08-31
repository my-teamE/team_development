<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    //
    public function index()
    {
        //ログインしているユーザーのstudent_idを取得する
        $student_id = Auth::user()->student_id;
        $profile = Profile::where('student_id', '=', $student_id)->first();
        $account = Account::where('student_id', '=', $student_id)->first();

        return view('profile', compact('profile', 'account'));
    }

    public function edit(Request $request)
    {

        $student_id = Auth::user()->student_id;
        $profile = Profile::where('student_id', '=', $student_id)->first();
        $account = Account::where('student_id', '=', $student_id)->first();

        $profile = Profile::where('student_id', '=', $student_id)
            ->update([
                // 'student_id' => $request['student_id'],
                'class' => $request['class'],
                'github_url' => $request['github_url'],
                'skill' => $request['skill'],
                'comment' => $request['comment'],
            ]);
        // 更新後のプロフィールを再度取得
        // これがないとAttempt to read propertyのエラーが出る
        $profile = Profile::where('student_id', '=', $student_id)->first();
        // dd($profile->class);

        return redirect('profile');
    }

    public function confirmation($id)
    //他人のプロフィールを見る
    {
        $event = Event::where('id', $id)->first();
        $student_id = $event->student_id;
        $profile = Profile::where('student_id', '=', $student_id)->first();
        $account = Account::where('student_id', '=', $student_id)->first();




        return view('profile', compact('profile', 'account'));
    }
}
