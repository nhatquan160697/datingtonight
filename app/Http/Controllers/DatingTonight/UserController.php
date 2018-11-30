<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;
use App\Model\city;
use App\Model\gender;
use App\Model\hair_color;
use App\Model\hair_length;
use App\Model\hair_style;
use App\Model\eye_color;
use App\Model\body;
use App\Model\drinking;
use App\Model\smoking;
use App\Model\job_status;
use App\Model\house_type;
use App\Model\live_with;
use App\Model\have_children;
use App\Model\national;
use App\Model\educational_level;
use App\Model\language;
use App\Model\religion;
use App\Model\constellation;

class UserController extends Controller
{
	public function __construct(Users $mUser, city $mCity, gender $mGender, hair_color $mHairColor, hair_length $mHairLength, hair_style $mHairStyle, eye_color $mEyeColor, body $mBody, drinking $mDrinking, smoking $mSmoking, job_status $mJobStatus, house_type $mHomeType, live_with $mLivewith, have_children $mHaveChild, national $mNational, educational_level $mEducation, language $mLanguage, religion $mReligion, constellation $mConstellation){
		$this->mUser = $mUser;
        $this->mCity = $mCity;
        $this->mGender = $mGender;
        $this->mHairColor = $mHairColor;
        $this->mHairLength = $mHairLength;
        $this->mHairStyle = $mHairStyle;
        $this->mEyeColor = $mEyeColor;
        $this->mBody = $mBody;
        $this->mDrinking = $mDrinking;
        $this->mSmoking = $mSmoking;
        $this->mJobStatus = $mJobStatus;
        $this->mHomeType = $mHomeType;
        $this->mLivewith = $mLivewith;
        $this->mHaveChild = $mHaveChild;
        $this->mNational = $mNational;
        $this->mEducation = $mEducation;
        $this->mLanguage = $mLanguage;
        $this->mReligion = $mReligion;
        $this->mConstellation = $mConstellation;
	}

    public function index(){
    	if(session()->has('checkUser')){
    		$id_user = session()->get('checkUser')[0]->id;
    	}
    	$getInfoUser = $this->mUser->getInfoUser($id_user);
    	return view('datingtonight.user.index',compact('getInfoUser'));
    }

    public function getEdit(){
        if(session()->has('checkUser')){
            $id_user = session()->get('checkUser')[0]->id;
        }
        $getInfoUser = $this->mUser->getInfoUser($id_user);
        $getCity = $this->mCity->getItems();
        $getGender = $this->mGender->getItems();
        $getHairColor = $this->mHairColor->getItems();
        $getHairLength = $this->mHairLength->getItems();
        $getHairStyle = $this->mHairStyle->getItems();
        $getEyeColor = $this->mEyeColor->getItems();
        $getBody = $this->mBody->getItems();
        $getDrinking = $this->mDrinking->getItems();
        $getSmoking = $this->mSmoking->getItems();
        $getJobStatus = $this->mJobStatus->getItems();
        $getHomeType = $this->mHomeType->getItems();
        $getLivewith = $this->mLivewith->getItems();
        $getHaveChild = $this->mHaveChild->getItems();
        $getNational = $this->mNational->getItems();
        $getEducation = $this->mEducation->getItems();
        $getLanguage = $this->mLanguage->getItems();
        $getReligion = $this->mReligion->getItems();
        $getConstellation = $this->mConstellation->getItems();
    	return view('datingtonight.user.edit',compact('getInfoUser','getCity','getGender','getHairColor','getHairLength','getHairStyle','getEyeColor','getBody','getDrinking','getSmoking','getJobStatus','getHomeType','getLivewith','getHaveChild','getNational','getEducation','getLanguage','getReligion','getConstellation'));
    }

    public function postEdit($id){

    }
}
