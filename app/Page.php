<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name','description','route_name',
    ];

    static function store($name,$description,$routeName){
        return parent::create([
            'name'=>$name,
            'description'=>$description,
            'route_name'=>$routeName
        ])->id;
    }
}
