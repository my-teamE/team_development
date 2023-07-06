<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Account extends Model implements Authenticatable
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

    // Authenticatableメソッドの実装
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
