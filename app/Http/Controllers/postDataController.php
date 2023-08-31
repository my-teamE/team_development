<?php

namespace App\Http\Controllers;

use App\Http\Requests\postDataRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class postDataController extends Controller
{
    //TODO:適当に返す
    public function index()
    {
        return view("postdata");
    }

    public function post(postDataRequest $request)
    {
        //TODO:画像保存〇
        $image = Storage::disk('public')->put('/postimages', $request->image);
        $image = basename($image);

        //TODO:DB保存〇
        $event = new Event();
        $event->student_id = mt_rand(1000000, 9999999);
        $event->no = mt_rand();
        $event->title = "テストタイトル";
        $event->tag = "テストタグ";
        $event->message = "テストメッセージ";
        $event->status = mt_rand(1000, 9999);
        $event->date = mt_rand(1, 12) . "月" . mt_rand(1, 30) . "日";
        //imageのみだとnotNull制約とdefault値Nullによってエラー吐く
        $event->image = $image;
        DB::transaction(function () use ($event) {
            $event->save();
        });

        //CSRFトークンを破棄
        $request->session()->regenerateToken();
        //画像表示しておく
        return view('postdata2', compact('image'));
    }
}
