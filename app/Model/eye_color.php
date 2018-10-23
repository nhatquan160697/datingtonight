<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class eye_color extends Model
{
    //
    protected $table="eye_color";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Eye_color','id');
    }
}
