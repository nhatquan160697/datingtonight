<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class educational_level extends Model
{
    //
    protected $table="educational_level";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Educational_level','id');
    }
}
