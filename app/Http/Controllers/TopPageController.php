<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\account;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopPageController extends Controller
{
    public $eventRecords;

    public function index()
    {
        $eventRecords = Event::all();

        // $accountRecords = Account::all();

        # eventテーブルで取得したstudent_idからaccountsテーブルのnameを取得する
        # 外部キー制約通ってればこれで取得できるはず
        // dd($eventRecords);
        // dd($eventRecords[0]->account());

        # 代替案
        foreach ($eventRecords as $eventRecord) {
            $accountRecord = Account::where('student_id', '=', $eventRecord->student_id)->first();
            // dd($accountRecord->name);
            $eventRecord->name = $accountRecord->name;
        }

        // dd($accountRecords[0], $accountRecords[0]->student_id, $eventRecords[0]->student_id);
        // dd($eventRecords, $eventRecords[0], $eventRecords[0]->image, asset('/storage/postimages/'.$eventRecords[0]->image));
        return view('toppage', compact("eventRecords"));
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
            $eventRecords = Event::all();
            return view('toppage', compact('account', 'eventRecords'));
        }
    }
    //ログアウト機能
    public function logout()
    {
        Auth::logout();
        return redirect('/toppage');
    }

    //タグ検索
    public function search(Request $request)
    {
        //ハッカソンの場合しかタグ検索を実装していない
        $event = new Event();
        $eventRecords = Event::all();
        // dd($eventRecords);
        $eventRecords = Event::where('tag', 'like', '%1%')->get();
        // dd($eventRecords);
        return view('toppage', compact("eventRecords"));
    }
}
