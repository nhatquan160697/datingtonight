<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class flirtingmethods extends Model
{
    //
    protected $table="flirtingmethods";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getTop5(){
    	return DB::table('flirtingmethods')->orderby('count_number','DESC')->limit('5')->get();
    }

    public function getTop4byDate(){
    	return DB::table('flirtingmethods')->orderby('date_created','DESC')->limit('4')->get();
    }
}
