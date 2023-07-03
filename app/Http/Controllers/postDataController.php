<?php

namespace App\Http\Controllers;

use App\Http\Requests\postDataRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Kadai05_1Request;
use Illuminate\Support\Facades\Storage;

class postDataController extends Controller
{
    //TODO:適当に返す
    public function index() {
        return view("postdata");
    }

    public function post(postDataRequest $request) {
        //TODO:画像保存〇
        $image = Storage::disk('public')->put('/postimages',$request->image);
        $image = basename($image);

        //TODO:DB保存×

        //CSRFトークンを破棄
        $request->session()->regenerateToken();
        //画像表示しておく
        return view('postdata2', compact('image'));
    }
}
