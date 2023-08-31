<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Applydata;
use App\Models\Event;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;
use Illuminate\Support\Facades\Auth;

class detailController extends Controller
{
    // レンダリング時に必要なデータと使い方を表しています
    public function index(Request $request, $id)
    {
        // dd($id);
        // TODO:EventのIDがどのようにして送られてくるのか決めてから完成
        $clickedEvent = Event::where('id', $id)->first();
        // dd($clickedEvent);

        // これはeventのタイトルを表しています(titleに当たる部分です)
        // dd($clickedEvent->title);

        // これはeventの作成者を表しています(userに当たる部分です)
        $username = Account::where('student_id', $clickedEvent->student_id)->first()->name;
        // dd($username);

        // これはeventのいいね数を表しています(いいね！:に当たる部分です)
        // dd($clickedEvent->heart);

        // リファラ情報によって渡す値を決める
        $refererInfo = $request->headers->get('referer');
        // dd($refererInfo);
        if($refererInfo === "http://localhost:8000/adminpage/index") {
            // adminページから
            $student_id = Auth::user()->student_id;
            $tempEvent = Event::where('id', $id)->first();
            $tempEventStudentId = $tempEvent->student_id;
            $tempEventNo = $tempEvent->no;

            $applydatas = ApplyData::where('student_id', $student_id)->where('status', 0)->where('apply_user_code', '!=', $student_id)->where('no', $id)->get();
            // dd($applydatas);

        } else if ($refererInfo === "http://localhost:8000/ranking") {
            // rankingページから
            $applydatas = [];
        } else {
            dd("リファラ情報を取得出来なかった場合のデバッグ");
        }
        return view('detail', compact('clickedEvent', 'applydatas'));
    }
}
