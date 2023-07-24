<?php

namespace App\Http\Controllers;

use App\Http\Requests\HogeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HogeController extends Controller
{
    //
    public function index() {
        return view('postpage');
    }

    public function post(HogeRequest $request) {
         //TODO:画像保存〇
         $image = Storage::disk('public')->put('/postimages',$request->image);
         $image = basename($image);

         //TODO:DB保存〇
         $event = new Event();
         $event->student_id = Auth::user()->student_id;
         $userMaxNo = Event::where('student_id', Auth::user()->student_id)->max('no') + 1;
         $event->no = $userMaxNo;
         $event->title = $request->title;
         # TODO:タグ機能
         $event->tag = implode("", $request->checkboxes);
         $event->message = $request->body;
         $event->status = 1;
         # dateはイベントの開催日
         $event->date = mt_rand(1, 12). "月".mt_rand(1, 30)."日";
         //imageのみだとnotNull制約とdefault値Nullによってエラー吐く
         $event->image = $image;
        //  dd($event);
         DB::transaction(function () use($event) {
             $event->save();
         });

         //CSRFトークンを破棄
         $request->session()->regenerateToken();

         //画像表示しておく
        //  return view('postdata2', compact('image'));

        # top画面に対してリダイレクトさせる
        return redirect('/toppage');
     }
}
