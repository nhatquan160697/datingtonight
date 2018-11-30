<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class religion extends Model
{
    //
    protected $table="religion";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Religion','id');
    }
}
