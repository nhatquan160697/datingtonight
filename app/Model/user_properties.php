<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_properties extends Model
{
    //
    protected $table="user_properties";
    public $timestamps = false;
    public function users()
    {
    	return $this->hasOne('App\Model\Users');
    }
}
