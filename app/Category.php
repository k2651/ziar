<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'index'
    ];

    static function getLastIndex()
    {
        return self::orderBy('index', 'desc')->first()->index;
    }

}
