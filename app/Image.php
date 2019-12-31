<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image', 'title'];

    static public function create($fill) {
        $obj = new static();
        $obj->fill($fill);
        $obj->save();
    }
}
