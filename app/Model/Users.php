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

    public function getOldImage($iduser){
        return (string)DB::table('users')->select('Avatar')->where('id', $iduser)->first()->Avatar;
    }

    public function getUserID($username){
        return DB::table('users')->where('username','=',$username)->value('id');
    }

    public function getItems(){
    	return $this->all();
    }

    public function editUser($id, $arItem){
        return $this->where('id',$id)->update($arItem);
    }

    public function getInfoUser($id){
        return DB::table('users')
            ->select('users.id','users.username','users.password','users.Fullname','users.Avatar','users.email','users.Birthdate','users.phone_number','users.Facebook',
                'gender.id as idGender','gender.gender',
                'city.id as idCity','city.city',
                'hair_color.id as idHairColor','hair_color.color as hairColor',
                'hair_length.id as idHairLength','hair_length.length',
                'hair_style.id as idHairStyle','hair_style.style',
                'eye_color.id as idEyeColor','eye_color.color as eyeColor',
                'height','weight',
                'body.id as idBody','body.body',
                'drinking.id as idDrinking','drinking.drink',
                'smoking.id as idSmoking','smoking.smoke',
                'job_status.id as idJobStatus','job_status.status',
                'house_type.id as idHomeType','house_type.type',
                'live_with.id as idLivewith','live_with.livewith',
                'have_children.id as idHaveChild','have_children.children',
                'national.id as idNational','national.national',
                'educational_level.id as idEducation','educational_level.level',
                'language.id as idLanguage','language.language',
                'religion.id as idReligion','religion.religion',
                'constellation.id as idConstellation','constellation.constellation')
            ->join('gender','users.Gender','=','gender.id')
            ->join('city','users.City','=','city.id')
            ->join('hair_color','users.Hair_color','=','hair_color.id')
            ->join('hair_length','users.Hair_length','=','hair_length.id')
            ->join('hair_style','users.Hair_style','=','hair_style.id')
            ->join('eye_color','users.Eye_color','=','eye_color.id')
            ->join('body','users.Body','=','body.id')
            ->join('drinking','users.Drinking','=','drinking.id')
            ->join('smoking','users.Smoking','=','smoking.id')
            ->join('job_status','users.Job_status','=','job_status.id')
            ->join('house_type','users.Home_type','=','house_type.id')
            ->join('live_with','users.Live_with','=','live_with.id')
            ->join('have_children','users.Have_children','=','have_children.id')
            ->join('national','users.National','=','national.id')
            ->join('educational_level','users.Educational_level','=','educational_level.id')
            ->join('language','users.Language','=','language.id')
            ->join('religion','users.Religion','=','religion.id')
            ->join('constellation','users.Constellation','=','constellation.id')
            ->where('users.id','=',$id)->first();
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
