<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class adminpageController extends Controller
{
    //投稿したコミュニティ-＞投稿中
    public function index()
    {
        $student_id = Auth::user()->student_id;
        $eventRecords = Event::where('student_id', '=', $student_id)->where('status', 1)->get();
        // dd($eventRecords);

        return view('adminpage', compact("eventRecords"));
    }
    //投稿したコミュニティ-＞投稿後
    public function posed()
    {
        $student_id = Auth::user()->student_id;
        $eventRecords = Event::where('student_id', '=', $student_id)->where('status', 0)->get();
        // dd($eventRecords);

        return view('adminpage', compact("eventRecords"));
    }

    //参加したコミュニティ-＞参加中
    public function join()
    {
        $student_id = Auth::user()->student_id;
        $eventRecords = Event::where('student_id', '=', $student_id)->where('status', 0)->get();
        // dd($eventRecords);

        return view('joined', compact("eventRecords"));
    }

    //参加したコミュニティ-＞参加後
    public function joined()
    {
        //未読0
        //許可１
        //拒否２
        //終了３
        $student_id = Auth::user()->student_id;
        $eventRecords = Event::where('apply_user_code', '=', $student_id)->where('status', 3)->get();
        // dd($eventRecords);

        return view('joined', compact("eventRecords"));
    }
}
