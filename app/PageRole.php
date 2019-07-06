<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageRole extends Model
{
    protected $fillable = [
        'role_id','page_id','access',
    ];

    static function store($roleId,$pageId,$access){
        return parent::create([
            'role_id'=>$roleId,
            'page_id'=>$pageId,
            'access'=>$access
        ])->id;
    }
}
