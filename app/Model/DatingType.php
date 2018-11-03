<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatingType extends Model
{
    protected $table = "dating_place_type";
    protected $primaryKey = "id_type";
    public $timestamps = false;

    public function getNameType(){
        return DB::table('dating_place_type')->get();
    }

    public function countHotel($idType){
    	return DB::table('datingplaces')->where('id_type','=',$idType)->count();
    }
}
