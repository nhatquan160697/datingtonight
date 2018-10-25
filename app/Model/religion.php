<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class religion extends Model
{
    //
    protected $table="religion";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Religion','id');
    }
}
