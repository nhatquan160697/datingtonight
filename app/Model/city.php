<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $table="city";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','City','id');
    }
}
