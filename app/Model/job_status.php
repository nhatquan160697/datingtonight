<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class job_status extends Model
{
    //
    protected $table="job_status";
    public $timestamps = false;
    protected $primaryKey = "id";

    public function getItems(){
    	return $this->all();
    }

    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Job_status','id');
    }
}
