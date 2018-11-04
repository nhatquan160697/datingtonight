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

    public function result(Request $request)
    {
    	$x=''.$request->gender.''.$request->hair_color.'';
    	return $x;
    }
}
