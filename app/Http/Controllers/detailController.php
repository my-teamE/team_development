<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Event;
use Illuminate\Http\Request;

class detailController extends Controller
{
    // レンダリング時に必要なデータと使い方を表しています
    public function index()
    {
        // TODO:EventのIDがどのようにして送られてくるのか決めてから完成
        $clickedEvent = Event::where('id', 1)->get();

        // これはeventのタイトルを表しています(titleに当たる部分です)
        dd($clickedEvent->title);

        // これはeventの作成者を表しています(userに当たる部分です)
        $username = Account::where('student_id', $clickedEvent->student_id)->name;
        dd($username);

        // これはeventのいいね数を表しています(いいね！:に当たる部分です)
        dd($clickedEvent->heart);

        return view('detail', compact($clickedEvent));
    }
}
