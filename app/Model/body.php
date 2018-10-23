<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class body extends Model
{
    //
    protected $table="body";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Body','id');
    }
}
