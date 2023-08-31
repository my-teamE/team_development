<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class rankingController extends Controller
{
    // レンダリング時に必要なデータと使い方を表しています
    public function index()
    {
        $eventRecords = Event::where('status', 0)->orderBy('heart', 'desc')->limit(8)->get();
        // 制作物１の部分(title)
        // dd($ddTest[0]->title);
        // ○○件グッド(heart)
        // dd($ddTest[0]->heart);
        // ここには作品の説明文が入ります(message)
        // dd($eventRecords);
        // dd($eventRecords);
        return view('ranking', compact('eventRecords'));
    }
}
