<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatingPlacePicture extends Model
{
    protected $table = "dating_place_picture";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getItems(){
    	return $this->all();
    }

    public function getNamePlaces(){
    	return DB::table('dating_place_picture')->select('dating_place_picture.id_place','name_place')->join('datingplaces','dating_place_picture.id_place','=','datingplaces.id_place')->get();
    }
}
