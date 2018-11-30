<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class house_type extends Model
{
    //
    protected $table="house_type";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Home_type','id');
    }
}
