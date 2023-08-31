<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class heartClickController extends Controller
{
    // ハートがクリックされた時のエンドポイント
    public function index($id) {
        // TODO:EventのIDがどのようにして送られてくるか決めてから完成
        $clickedEvent = Event::where('id', $id)->get();
        $clickedEvent->heart = $clickedEvent->heart + 1;
        $clickedEvent->save();

        return redirect('/toppage');
    }
}
