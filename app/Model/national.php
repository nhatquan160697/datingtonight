<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class national extends Model
{
    //
    protected $table="national";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','National','id');
    }
}
