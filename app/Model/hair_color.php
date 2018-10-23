<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hair_color extends Model
{
    //
    protected $table="hair_color";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Hair_color','id');
    }
}
