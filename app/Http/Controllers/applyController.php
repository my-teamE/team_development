<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Account;

class applyController extends Controller
{
    // 雛形
    public function index(){
        return view('apply');
    }

    // クエリ文字列によるルーティング
    public function apply($id) {
        $event = Event::where('id', $id)->first();
        $account = Account::where('student_id', $event->student_id)->first();
        // dd($account->name);
        return view('apply', compact("event", "account"));
    }
}
