<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\body;
use App\Model\gender;
use App\Model\city;
use App\Model\constellation;
use App\Model\drinking;
use App\Model\educational_level;
use App\Model\eye_color;
use App\Model\hair_color;
use App\Model\hair_length;
use App\Model\hair_style;
use App\Model\have_children;
use App\Model\house_type;
use App\Model\job_status;
use App\Model\language;
use App\Model\live_with;
use App\Model\national;
use App\Model\religion;
use App\Model\smoking;
use App\Model\Users;
use App\Model\user_properties;


class FindingSuitablePerson extends Controller
{
    //
    public function index()
    {
    	$body=body::all();
    	$city=city::all();
    	$constellation=constellation::all();
    	$drinking=drinking::all();
    	$educational_level=educational_level::all();
    	$eye_color=eye_color::all();
    	$hair_color=hair_color::all();
    	$hair_length=hair_length::all();
    	$hair_style=hair_style::all();
    	$have_children=have_children::all();
    	$house_type=house_type::all();
    	$job_status=job_status::all();
    	$language=language::all();
    	$live_with=live_with::all();
    	$national=national::all();
    	$religion=religion::all();
    	$smoking=smoking::all();
    	$gender=gender::all();
    	return view('datingtonight.findingperson.formFinding',
    		[
    			'body'=>$body,
    			'city'=>$city,
    			'constellation'=>$constellation,
    			'drinking'=>$drinking,
    			'educational_level'=>$educational_level,
    			'eye_color'=>$eye_color,
    			'hair_color'=>$hair_color,
    			'hair_length'=>$hair_length,
    			'hair_style'=>$hair_style,
    			'have_children'=>$have_children,
    			'house_type'=>$house_type,
    			'job_status'=>$job_status,
    			'language'=>$language,
    			'live_with'=>$live_with,
    			'national'=>$national,
    			'religion'=>$religion,
    			'gender'=>$gender,
    			'smoking'=>$smoking
    		]);
    }

    public function result(Request $request,user_properties $user_properties, Users $Users)
    {
    	//return $user_properties=user_properties::where('Gender','=',$request->gender)->get();
    	$user_properties=$user_properties->newQuery();
    	if($request->gender!='')
    	{
    		$user_properties->where('Gender','=',$request->gender);
    	}
    	if($request->city!='')
    	{
    		$user_properties->where('City','=',$request->city);
    	}
    	if($request->hair_color!='')
    	{
    		$user_properties->where('Hair_color','=',$request->hair_color);
    	}
    	if($request->eye_color!='')
    	{
    		$user_properties->where('Eye_color','=',$request->eye_color);
    	}
    	if($request->hair_style!='')
    	{
    		$user_properties->where('Hair_style','=',$request->hair_style);
    	}
    	if($request->hair_length!='')
    	{
    		$user_properties->where('Hair_length','=',$request->hair_length);
    	}
    	if($request->body!='')
    	{
    		$user_properties->where('Body','=',$request->body);
    	}
    	if($request->drink!='')
    	{
    		$user_properties->where('Drinking','=',$request->drink);
    	}
    	if($request->smoke!='')
    	{
    		$user_properties->where('Smoking','=',$request->smoke);
    	}
    	if($request->job_status!='')
    	{
    		$user_properties->where('Job_status','=',$request->job_status);
    	}
    	if($request->house_type!='')
    	{
    		$user_properties->where('Home_type','=',$request->house_type);
    	}
    	if($request->smoke!='')
    	{
    		$user_properties->where('Smoking','=',$request->smoke);
    	}
    	if($request->live_with!='')
    	{
    		$user_properties->where('Live_with','=',$request->live_with);
    	}
    	if($request->have_children!='')
    	{
    		$user_properties->where('Have_children','=',$request->have_children);
    	}
    	if($request->national!='')
    	{
    		$user_properties->where('National','=',$request->national);
    	}
    	if($request->educational_level!='')
    	{
    		$user_properties->where('Educational_level','=',$request->educational_level);
    	}
    	if($request->language!='')
    	{
    		$user_properties->where('Language','=',$request->language);
    	}
    	if($request->religion!='')
    	{
    		$user_properties->where('Religion','=',$request->religion);
    	}
    	if($request->constellation!='')
    	{
    		$user_properties->where('Constellation','=',$request->constellation);
    	}
    	return $user_properties->get();
    }
}
