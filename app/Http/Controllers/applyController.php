<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Account;
use App\Models\Applydata;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class applyController extends Controller
{
    // 雛形



    public function index()
    {
        return view('apply');
    }

    // クエリ文字列によるルーティング
    public function apply($id)

    {

        $event = Event::where('id', $id)->first();
        $account = Account::where('student_id', $event->student_id)->first();
        // dd($account->name);
        return view('apply', compact("event", "account", "id"));
    }

    // 応募ボタンクリック時のエンドポイント

    public function applied($id)
    {
        $eventRecords = Event::all()->where('status', 1);
        $applydata = new Applydata();
        $eventStundent = Event::where('id', $id)->first();

        $maxNo = Applydata::where('student_id', $eventStundent->student_id)->max('no');

        $applydata->student_id = $eventStundent->student_id;
        $applydata->no = $maxNo + 1;
        $applydata->apply_user_code = Auth::user()->student_id;
        $applydata->status = 0;

        DB::transaction(function () use ($applydata) {
            $applydata->save();
        });

        $student_id = $applydata->student_id;

        $apply_user_id = $applydata->apply_user_code;


        Profile::where('student_id', '=', $student_id)
            ->update([
                'message' => $apply_user_id . 'が応募しました',
            ]);
        Profile::where('student_id', '=', $apply_user_id)
            ->update([
                'message' => '応募完了しました',
            ]);


        $profile = Profile::where('student_id', '=', Auth::user()->student_id)->first();
        $eventRankRecords = Event::where('status', 0)->orderBy('heart', 'desc')->limit(8)->get();


        // dd($message);
        return view("/toppage", compact('profile', 'eventRecords', 'eventRankRecords'));
    }
}
