<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class rankingController extends Controller
{
    // レンダリング時に必要なデータと使い方を表しています
    public function index()
    {
        $eventRecords = Event::orderBy('heart', 'DESC')->get();

        // これはeventの名前を表しています(制作物1.制作物2...に当たる部分に挿入されると思います)
        dd($eventRecords->title);

        // これはeventのハートの個数を表しています(○○件グッドに当たる部分に挿入されると思います)
        dd($eventRecords->heart);

        // これはeventの本文を表しています(ここは作品の説明文が入ります ～～～～～～～～～に当たる部分に挿入されると思います)
        dd($eventRecords->message);
        return view('ranking', compact($eventRecords));
    }
}
