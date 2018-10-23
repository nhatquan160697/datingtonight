<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class constellation extends Model
{
    //
    protected $table="constellation";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Constellation','id');
    }
}
