<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Wager extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'description'];
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function options() {
        return $this->hasMany(Option::class);
    }


    public static function add($fields) {
        $wager = new static;
        $wager->fill($fields);
        $wager->save();
        $wager->creator_id = 1;
//        $wager->creator_id = \Auth::user();
        return $wager;
    }

    public function edit($fields) {
        $this->fill($fields);
        $this->save();
    }

    public function remove() {
        $this->delete();
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
