<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatingPlaces extends Model
{
    protected $table = "datingplaces";
    protected $primaryKey = "id_place";
    public $timestamps = false;

    public function getItems(){
    	return $this->all();
    }

    public function getIndex(){
        return DB::table('datingplaces')->paginate(4);
    }

    public function getItem($id){
    	return $this->findOrFail($id);
    }

    public function addItem($arItem){
    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){
    	return $this->where('id_place',$id)->update($arItem);
    }

    public function delItem($id){
    	return $this->where('id_place',$id)->delete();
    }
}
