<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class educational_level extends Model
{
    //
    protected $table="educational_level";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Educational_level','id');
    }
}
