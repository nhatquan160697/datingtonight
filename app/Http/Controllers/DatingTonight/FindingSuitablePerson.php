<?php

namespace App\Http\Controllers\DatingTonight;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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
use Carbon\Carbon;


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

    public function result(Request $request,Users $Users)
    {
    	//return $Users=Users::where('Gender','=',$request->gender)->get();
    	$Users=$Users->newQuery();
    	if($request->gender!='')
    	{
    		$Users->where('Gender','=',$request->gender);
    	}
    	if($request->city!='')
    	{
    		$Users->where('City','=',$request->city);
    	}
    	if($request->hair_color!='')
    	{
    		$Users->where('Hair_color','=',$request->hair_color);
    	}
    	if($request->eye_color!='')
    	{
    		$Users->where('Eye_color','=',$request->eye_color);
    	}
    	if($request->hair_style!='')
    	{
    		$Users->where('Hair_style','=',$request->hair_style);
    	}
    	if($request->hair_length!='')
    	{
    		$Users->where('Hair_length','=',$request->hair_length);
    	}
    	if($request->body!='')
    	{
    		$Users->where('Body','=',$request->body);
    	}
    	if($request->drink!='')
    	{
    		$Users->where('Drinking','=',$request->drink);
    	}
    	if($request->smoke!='')
    	{
    		$Users->where('Smoking','=',$request->smoke);
    	}
    	if($request->job_status!='')
    	{
    		$Users->where('Job_status','=',$request->job_status);
    	}
    	if($request->house_type!='')
    	{
    		$Users->where('Home_type','=',$request->house_type);
    	}
    	if($request->smoke!='')
    	{
    		$Users->where('Smoking','=',$request->smoke);
    	}
    	if($request->live_with!='')
    	{
    		$Users->where('Live_with','=',$request->live_with);
    	}
    	if($request->have_children!='')
    	{
    		$Users->where('Have_children','=',$request->have_children);
    	}
    	if($request->national!='')
    	{
    		$Users->where('National','=',$request->national);
    	}
    	if($request->educational_level!='')
    	{
    		$Users->where('Educational_level','=',$request->educational_level);
    	}
    	if($request->language!='')
    	{
    		$Users->where('Language','=',$request->language);
    	}
    	if($request->religion!='')
    	{
    		$Users->where('Religion','=',$request->religion);
    	}
    	if($request->constellation!='')
    	{
    		$Users->where('Constellation','=',$request->constellation);
    	}
        if($request->fromage!='' && $request->toage!="")
        {
            $Users->whereBetween(DB::raw('TIMESTAMPDIFF(YEAR,Users.Birthdate,CURDATE())'),array(Input::get('fromage'),Input::get('toage')));
        }
         if ($request->fromage!='' && $request->toage=='') {
            $Users->where(DB::raw('TIMESTAMPDIFF(YEAR,Users.Birthdate,CURDATE())'),'>=',$request->fromage);
        }
        if ($request->fromage=='' && $request->toage!='') {
            $Users->where(DB::raw('TIMESTAMPDIFF(YEAR,Users.Birthdate,CURDATE())'),'<=',$request->toage);
        }

        //Height
        if($request->fromheight!='' && $request->toheight!="")
        {
            $Users->whereBetween('Height',array(Input::get('fromheight'),Input::get('toheight')));
        }
        if ($request->fromheight!='' && $request->toheight=='') {
            $Users->where('Height','>=',$request->fromheight);
        }
        if ($request->fromheight=='' && $request->toheight!='') {
            $Users->where('Height','<=',$request->toheight);
        }
        //Weight
        if($request->fromweight!='' && $request->toweight!="")
        {
            $Users->whereBetween('Weight',array(Input::get('fromweight'),Input::get('toweight')));
        }
        if ($request->fromweight!='' && $request->toweight=='') {
            $Users->where('Weight','>=',$request->fromweight);
        }
        if ($request->fromheight=='' && $request->toweight!='') {
            $Users->where('Weight','<=',$request->toweight);
        }
        $Users=$Users->get();
        $city=city::all();
        $gender=gender::all();
    	return view('datingtonight.findingperson.result',[
            'Users'=>$Users,
            'gender'=>$gender,
            'city'=>$city
        ]);
    }
}
