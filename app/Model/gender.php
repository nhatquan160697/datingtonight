<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    protected $table="gender";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Gender','id');
    }
}
