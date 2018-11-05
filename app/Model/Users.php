<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getItems(){
    	return $this->all();
    }
    public function users_properties()
    {
    	return $this->hasOne('App\Model\user_properties');
    }
}
