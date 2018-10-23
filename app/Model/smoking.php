<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class smoking extends Model
{
    //
    protected $table="smoking";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Smoking','id');
    }
}
