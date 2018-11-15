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

    public function getIdItem($id){
        return $this->findOrFail($id);
    }

    public function getAllType(){
        return DB::table('gender')->get();
    }

    public function getAllIdCat($idt){
        return DB::table('flirtingmethods')->join('gender','flirtingmethods.id_gender','=','gender.id')->where('flirtingmethods.id_gender','=',$idt)->orderby('date_created','DESC')->paginate(6);
    }

    public function relatedNews($id, $idt){
        return DB::table('flirtingmethods')->select('flirtingmethods.id','name_flirting','detail_flirting','author','id_gender','count_number','date_created','image','gender')->join('gender','flirtingmethods.id_gender','=','gender.id')->where('flirtingmethods.id','<>',$id)->where('flirtingmethods.id_gender','=',$idt)->inRandomOrder()->limit('5')->get();
    }

    public function getIdType($idt){
        return DB::table('gender')->where('id','=',$idt)->first();
    }

    public function countIdType($idt){
        return DB::table('flirtingmethods')->where('id_gender','=',$idt)->count();
    }

    public function mostView(){
        return DB::table('flirtingmethods')->select('flirtingmethods.id','name_flirting','gender','count_number','image')->join('gender','flirtingmethods.id_gender','=','gender.id')->orderby('count_number','DESC')->limit('5')->get();
    }

    public function lastestNews(){
        return DB::table('flirtingmethods')->select('flirtingmethods.id','name_flirting','gender','date_created','image')->join('gender','flirtingmethods.id_gender','=','gender.id')->orderby('date_created','DESC')->limit('5')->get();
    }

    public function getTop5(){
    	return DB::table('flirtingmethods')->orderby('count_number','DESC')->limit('5')->get();
    }

    public function getTop4byDate(){
    	return DB::table('flirtingmethods')->orderby('date_created','DESC')->limit('4')->get();
    }
}
