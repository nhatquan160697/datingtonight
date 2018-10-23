<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hair_style extends Model
{
    //
    protected $table="hair_style";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Hair_style','id');
    }
}
