<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    public function bets() {
        return $this->hasMany(Bet::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
