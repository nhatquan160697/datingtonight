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
    	return DB::table('users')->where('username','=',$username)->get();
    }

    public function getItems(){
    	return $this->all();
    }
    public function checkUserExist($username){
        $checkUserNameExist = DB::table('users')->where('username', '=', $username)->count();
        if($checkUserNameExist >= 1){
            return true;
        } else {
            return false;
        }
    }
     public function addNewUser($username,$password,$email,$phonenumber,$gender,$birthday,$fullname,$city,$facebook){
         $idOfGender = DB::table('gender')->where('gender','=', $gender)->first()->id;
        $idOfCity = DB::table('city')->where('city','=', $city)->first()->id;
        $addNewUser = DB::table('users')->insertGetId(
            [
                'username' => $username,
                'password' => $password,
                'City' => $idOfCity,
                'Gender' => $idOfGender,
                'BirthDate' => $birthday,
                'Fullname' => $fullname,
                'facebook' => $facebook,
            ]
        );
        if($addNewUser){
            return true;
        } else {
            return false;
        }
    }

}
