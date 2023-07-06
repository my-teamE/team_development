<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Event;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    //
    public function index()
    {

        $eventRecords = Event::all();
        // $accountRecords = Account::all();

        # eventテーブルで取得したstudent_idからaccountsテーブルのnameを取得する
        # 外部キー制約通ってればこれで取得できるはず
        // dd($eventRecords);
        // dd($eventRecords[0]->account());

        # 代替案
        foreach($eventRecords as $eventRecord) {
            $accountRecord = Account::where('student_id', '=', $eventRecord->student_id)->first();
            $eventRecord->name = $accountRecord->name;
        }

        // dd($accountRecords[0], $accountRecords[0]->student_id, $eventRecords[0]->student_id);
        // dd($eventRecords, $eventRecords[0], $eventRecords[0]->image, asset('/storage/postimages/'.$eventRecords[0]->image));
        return view('toppage', compact("eventRecords"));
    }
}

