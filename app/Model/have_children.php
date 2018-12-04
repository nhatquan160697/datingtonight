<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class have_children extends Model
{
    //
    protected $table="have_children";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Have_children','id');
    }
}
