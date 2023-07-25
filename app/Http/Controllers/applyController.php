<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Account;
use App\Models\Applydata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class applyController extends Controller
{
    // 雛形
    public function index(){
        return view('apply');
    }

    // クエリ文字列によるルーティング
    public function apply($id) {
        $event = Event::where('id', $id)->first();
        $account = Account::where('student_id', $event->student_id)->first();
        // dd($account->name);
        return view('apply', compact("event", "account", "id"));
    }

    // 応募ボタンクリック時のエンドポイント
    public function applied($id) {
        $maxNo = ApplyData::where('student_id', Auth::user()->student_id)->max('no');
        dd($maxNo);

        $applydata = new Applydata();
        $apply_user_code = Event::where('id', $id)->first();

        $applydata->student_id = $apply_user_code;
        $applydata->no = $maxNo + 1;
        $applydata->apply_user_code = $student_id = Auth::user()->student_id;
        $applydata->status = 0;


        DB::transaction(function () use ($applydata) {
            $applydata->save();
        });

        return ;
    }
}
