<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class live_with extends Model
{
    //
    protected $table="live_with";
    public $timestamps = false;
    public function users_properties()
    {
    	return $this->hasMany('App\user_properties','Live_with','id');
    }
}
