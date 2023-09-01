<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyData;

class joinedController extends Controller
{
    //
    public function index($id) {
        ApplyData::where('id', $id)->update(['status' => 1]);
        return response()->json(['status' => 'OK']);
    }
}
