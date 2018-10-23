<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    //
    protected $table="language";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Language','id');
    }
}
