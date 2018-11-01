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
    	return DB::table('datingplaces')->select('id','dating_place_picture.id_place','name_place','picture1','picture2','picture3','picture4','picture5')->join('dating_place_picture','dating_place_picture.id_place','=','datingplaces.id_place')->get();
    }

    public function getItem($id){
        return DB::table('dating_place_picture')->where('id_place','=',$id)->first();
    }

    public function addPicture($arItem){
    	return $this->insert($arItem);
    }

    public function delItem($id){
        return $this->where('id',$id)->delete();
    }
}
