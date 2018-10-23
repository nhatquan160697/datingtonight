<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hair_length extends Model
{
    //
    protected $table="hair_length";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','hair_length','id');
    }
}
