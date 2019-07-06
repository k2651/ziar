<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id','role_id'
    ];

    static function store($userId,$roleId){
        parent::create([
            'user_id'=>$userId,
            'role_id'=>$roleId
        ]);
    }

    public function role(){
        return $this->belongsTo('App\Role','role_id');
    }
}
