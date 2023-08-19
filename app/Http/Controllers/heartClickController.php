<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class heartClickController extends Controller
{
    // ハートがクリックされた時のエンドポイント
    public function index() {
        // TODO:EventのIDがどのようにして送られてくるか決めてから完成
        $clickedEvent = Event::where('id', 1)->get();
        $clickedEvent->heart = $clickedEvent->heart + 1;
        $clickedEvent->save();

        return redirect('/toppage');
    }
}
