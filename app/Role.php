<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name','description','default_access','default_page','set_default'
    ];

    static function store($name,$description,$defaultAccess=0,$defaultPage,$setDefault=0){
        return parent::create([
            'name'=>$name,
            'description'=>$description,
            'default_access'=>$defaultAccess,
            'default_page'=>$defaultPage,
            'set_default'=>$setDefault
        ])->id;
    }

    //  setDefault seteaza daca acest rol 
    //  va fi default atunci cind userul se va inregistra 
    
    static function getDefaultRole(){
        return parent::where('set_default',1)->first();
    }
}
