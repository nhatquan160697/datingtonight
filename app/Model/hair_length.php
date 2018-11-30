<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class hair_length extends Model
{
    //
    protected $table="hair_length";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }
    
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','hair_length','id');
    }
}
