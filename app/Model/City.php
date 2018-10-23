<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getItems(){
    	return $this->all();
    }

}
