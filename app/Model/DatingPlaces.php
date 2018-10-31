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

    public function getTop5(){
        return DB::table('datingplaces')->join('dating_place_type','datingplaces.id_type','=','dating_place_type.id_type')->orderby('count_number','DESC')->limit('5')->get();
    }

    public function getTop5byDate(){
        return DB::table('datingplaces')->join('dating_place_type','datingplaces.id_type','=','dating_place_type.id_type')->orderby('date_created','DESC')->limit('5')->get();
    }

    public function getTop6(){
        return DB::table('datingplaces')->join('dating_place_type','datingplaces.id_type','=','dating_place_type.id_type')->orderby('count_number','DESC')->limit('6')->get();
    }

    public function getTopOne(){
        return DB::table('datingplaces')->orderby('count_number','DESC')->limit('1')->get();
    }

    public function getTop23(){
        return DB::table('datingplaces')->orderby('count_number','DESC')->limit('2')->offset('1')->get();
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
