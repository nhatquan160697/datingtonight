<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function checkUserLogin($username, $password){
    	$checkUserLogin = DB::table('users')->where('username','=',$username)->where('password','=',$password)->count();
    	if($checkUserLogin >= 1){
    		return true;
    	} else {
    		return false;
    	}
    }

    public function getUsername($username){
    	return DB::table('users')->join('user_properties','users.id','=','user_properties.id')->where('username','=',$username)->get();
    }

    public function getItems(){
    	return $this->all();
    }
}
