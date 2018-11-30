<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class constellation extends Model
{
    //
    protected $table="constellation";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Constellation','id');
    }
}
