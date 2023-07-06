<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    //accountsテーブルとeventsテーブルの関連付け(1:1)
    public function events() {
        return $this->hasMany(Event::class);
    }
    //accountsテーブルとeventsテーブルの関連付け(1:1)
    public function event() {
        return $this->hasOne(Event::class)->latestOfMany();
    }
}
