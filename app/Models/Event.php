<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Accountsテーブルに外部キーで参照できるようにする(1:1)
    public function account() {
        return $this->belongsTo(Article::class);
    }
}
