<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\hair_color;
use App\Model\hair_length;
use App\Model\hair_style;
use App\Model\eye_color;
use App\Model\city;
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
use App\Model\gender;

class UserPropertiesController extends Controller
{
	//Hair Color Controller
    public function indexHairColor()
    {
    	$hair_color = hair_color::all();
    	return view('admin.user-properties.hair-color.index',['hair_color'=>$hair_color]);
    }

    public function getAddHairColor()
    {
    	return view('admin.user-properties.hair-color.add');
    }

    public function postAddHairColor(Request $request)
    {
    	$this->validate($request,
    		[
    			'color'=>'required|unique:hair_color'
    		],
    		[
    			'color.required'=>'Please input hair color',
    			'color.unique'=>'Color must be unique',
    		]
    	);
    	$hair_color = new hair_color;
    	$hair_color->color=$request->color;
    	$hair_color->save();
    	return redirect('admin/user-properties/hair-color/add')->with('success','Add successfully');
    }

    public function getEditHairColor($id)
    {
		$hair_color = hair_color::find($id);
		return view('admin.user-properties.hair-color.edit',['hair_color'=>$hair_color]);
    }

    public function postEditHairColor($id,Request $request)
    {
		$hair_color = hair_color::find($id);
		$this->validate($request,
            [
                'color'=>'required|unique:hair_color'
            ],
            [
                'color.required'=>'Please input hair color',
    			'color.unique'=>'Color must be unique',
            ]
        );
        $hair_color->color=$request->color;
        $hair_color->save();
        return redirect('admin/user-properties/hair-color/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteHairColor($id)
    {
    	$hair_color=hair_color::find($id);
    	$hair_color->delete();
    	return redirect('admin/user-properties/hair-color/index')->with('success','Delete successfully');
    }




    //Hair Length Controller
    public function indexHairLength()
    {
    	$hair_length = hair_length::all();
    	return view('admin.user-properties.hair-length.index',['hair_length'=>$hair_length]);
    }

    public function getAddHairLength()
    {
    	return view('admin.user-properties.hair-length.add');
    }

    public function postAddHairLength(Request $request)
    {
    	$this->validate($request,
    		[
    			'length'=>'required|unique:hair_length'
    		],
    		[
    			'length.required'=>'Please input hair length',
    			'length.unique'=>'length must be unique',
    		]
    	);
    	$hair_length = new hair_length;
    	$hair_length->length=$request->length;
    	$hair_length->save();
    	return redirect('admin/user-properties/hair-length/add')->with('success','Add successfully');
    }

    public function getEditHairLength($id)
    {
		$hair_length = hair_length::find($id);
		return view('admin.user-properties.hair-length.edit',['hair_length'=>$hair_length]);
    }

    public function postEditHairLength($id,Request $request)
    {
		$hair_length = hair_length::find($id);
		$this->validate($request,
            [
                'length'=>'required|unique:hair_length'
            ],
            [
                'length.required'=>'Please input hair length',
    			'length.unique'=>'length must be unique',
            ]
        );
        $hair_length->length=$request->length;
        $hair_length->save();
        return redirect('admin/user-properties/hair-length/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteHairLength($id)
    {
    	$hair_length=hair_length::find($id);
    	$hair_length->delete();
    	return redirect('admin/user-properties/hair-length/index')->with('success','Delete successfully');
    }




    //Hair Style Controller
    public function indexHairStyle()
    {
    	$hair_style = hair_style::all();
    	return view('admin.user-properties.hair-style.index',['hair_style'=>$hair_style]);
    }

    public function getAddHairStyle()
    {
    	return view('admin.user-properties.hair-style.add');
    }

    public function postAddHairStyle(Request $request)
    {
    	$this->validate($request,
    		[
    			'style'=>'required|unique:hair_style'
    		],
    		[
    			'style.required'=>'Please input hair style',
    			'style.unique'=>'style must be unique',
    		]
    	);
    	$hair_style = new hair_style;
    	$hair_style->style=$request->style;
    	$hair_style->save();
    	return redirect('admin/user-properties/hair-style/add')->with('success','Add successfully');
    }

    public function getEditHairStyle($id)
    {
		$hair_style = hair_style::find($id);
		return view('admin.user-properties.hair-style.edit',['hair_style'=>$hair_style]);
    }

    public function postEditHairStyle($id,Request $request)
    {
		$hair_style = hair_style::find($id);
		$this->validate($request,
            [
                'style'=>'required|unique:hair_style'
            ],
            [
                'style.required'=>'Please input hair style',
    			'style.unique'=>'style must be unique',
            ]
        );
        $hair_style->style=$request->style;
        $hair_style->save();
        return redirect('admin/user-properties/hair-style/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteHairStyle($id)
    {
    	$hair_style=hair_style::find($id);
    	$hair_style->delete();
    	return redirect('admin/user-properties/hair-style/index')->with('success','Delete successfully');
    }




    //Eye Color Controller
    public function indexEyeColor()
    {
    	$eye_color = eye_color::all();
    	return view('admin.user-properties.eye-color.index',['eye_color'=>$eye_color]);
    }

    public function getAddEyeColor()
    {
    	return view('admin.user-properties.eye-color.add');
    }

    public function postAddEyeColor(Request $request)
    {
    	$this->validate($request,
    		[
    			'color'=>'required|unique:eye_color'
    		],
    		[
    			'color.required'=>'Please input eye color',
    			'color.unique'=>'color must be unique',
    		]
    	);
    	$eye_color = new eye_color;
    	$eye_color->color=$request->color;
    	$eye_color->save();
    	return redirect('admin/user-properties/eye-color/add')->with('success','Add successfully');
    }

    public function getEditEyeColor($id)
    {
		$eye_color = eye_color::find($id);
		return view('admin.user-properties.eye-color.edit',['eye_color'=>$eye_color]);
    }

    public function postEditEyeColor($id,Request $request)
    {
		$eye_color = eye_color::find($id);
		$this->validate($request,
            [
                'color'=>'required|unique:eye_color'
            ],
            [
                'color.required'=>'Please input eye color',
    			'color.unique'=>'color must be unique',
            ]
        );
        $eye_color->color=$request->color;
        $eye_color->save();
        return redirect('admin/user-properties/eye-color/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteEyeColor($id)
    {
    	$eye_color=eye_color::find($id);
    	$eye_color->delete();
    	return redirect('admin/user-properties/eye-color/index')->with('success','Delete successfully');
    }




    //City Controller
    public function indexCity()
    {
    	$city = city::all();
    	return view('admin.user-properties.city.index',['city'=>$city]);
    }

    public function getAddCity()
    {
    	return view('admin.user-properties.city.add');
    }

    public function postAddCity(Request $request)
    {
    	$this->validate($request,
    		[
    			'city'=>'required|unique:city'
    		],
    		[
    			'city.required'=>'Please input city',
    			'city.unique'=>'city must be unique',
    		]
    	);
    	$city = new city;
    	$city->city=$request->city;
    	$city->save();
    	return redirect('admin/user-properties/city/add')->with('success','Add successfully');
    }

    public function getEditCity($id)
    {
		$city = city::find($id);
		return view('admin.user-properties.city.edit',['city'=>$city]);
    }

    public function postEditCity($id,Request $request)
    {
		$city = city::find($id);
		$this->validate($request,
            [
                'city'=>'required|unique:city'
            ],
            [
                'city.required'=>'Please input city',
    			'city.unique'=>'city must be unique',
            ]
        );
        $city->city=$request->city;
        $city->save();
        return redirect('admin/user-properties/city/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteCity($id)
    {
    	$city=city::find($id);
    	$city->delete();
    	return redirect('admin/user-properties/city/index')->with('success','Delete successfully');
    }




    //Body Controller
    public function indexBody()
    {
    	$body = body::all();
    	return view('admin.user-properties.body.index',['body'=>$body]);
    }

    public function getAddBody()
    {
    	return view('admin.user-properties.body.add');
    }

    public function postAddBody(Request $request)
    {
    	$this->validate($request,
    		[
    			'body'=>'required|unique:body'
    		],
    		[
    			'body.required'=>'Please input body',
    			'body.unique'=>'body must be unique',
    		]
    	);
    	$body = new body;
    	$body->body=$request->body;
    	$body->save();
    	return redirect('admin/user-properties/body/add')->with('success','Add successfully');
    }

    public function getEditBody($id)
    {
		$body = body::find($id);
		return view('admin.user-properties.body.edit',['body'=>$body]);
    }

    public function postEditBody($id,Request $request)
    {
		$body = body::find($id);
		$this->validate($request,
            [
                'body'=>'required|unique:body'
            ],
            [
                'body.required'=>'Please input body',
    			'body.unique'=>'body must be unique',
            ]
        );
        $body->body=$request->body;
        $body->save();
        return redirect('admin/user-properties/body/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteBody($id)
    {
    	$body=body::find($id);
    	$body->delete();
    	return redirect('admin/user-properties/body/index')->with('success','Delete successfully');
    }




    //Drinking Controller
    public function indexDrinking()
    {
    	$drinking = drinking::all();
    	return view('admin.user-properties.drinking.index',['drinking'=>$drinking]);
    }

    public function getAddDrinking()
    {
    	return view('admin.user-properties.drinking.add');
    }

    public function postAddDrinking(Request $request)
    {
    	$this->validate($request,
    		[
    			'drink'=>'required|unique:drinking'
    		],
    		[
    			'drink.required'=>'Please input drinking',
    			'drink.unique'=>'drinking must be unique',
    		]
    	);
    	$drinking = new drinking;
    	$drinking->drink=$request->drink;
    	$drinking->save();
    	return redirect('admin/user-properties/drinking/add')->with('success','Add successfully');
    }

    public function getEditDrinking($id)
    {
		$drinking = drinking::find($id);
		return view('admin.user-properties.drinking.edit',['drinking'=>$drinking]);
    }

    public function postEditDrinking($id,Request $request)
    {
		$drinking = drinking::find($id);
		$this->validate($request,
            [
                'drink'=>'required|unique:drinking'
            ],
            [
                'drink.required'=>'Please input drinking',
    			'drink.unique'=>'drinking must be unique',
            ]
        );
        $drinking->drink=$request->drink;
        $drinking->save();
        return redirect('admin/user-properties/drinking/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteDrinking($id)
    {
    	$drinking=drinking::find($id);
    	$drinking->delete();
    	return redirect('admin/user-properties/drinking/index')->with('success','Delete successfully');
    }




    //Smoking Controller
    public function indexSmoking()
    {
    	$smoking = smoking::all();
    	return view('admin.user-properties.smoking.index',['smoking'=>$smoking]);
    }

    public function getAddSmoking()
    {
    	return view('admin.user-properties.smoking.add');
    }

    public function postAddSmoking(Request $request)
    {
    	$this->validate($request,
    		[
    			'smoke'=>'required|unique:smoking'
    		],
    		[
    			'smoke.required'=>'Please input smoking',
    			'smoke.unique'=>'smoking must be unique',
    		]
    	);
    	$smoking = new smoking;
    	$smoking->smoke=$request->smoke;
    	$smoking->save();
    	return redirect('admin/user-properties/smoking/add')->with('success','Add successfully');
    }

    public function getEditSmoking($id)
    {
		$smoking = smoking::find($id);
		return view('admin.user-properties.smoking.edit',['smoking'=>$smoking]);
    }

    public function postEditSmoking($id,Request $request)
    {
		$smoking = smoking::find($id);
		$this->validate($request,
            [
                'smoke'=>'required|unique:smoking'
            ],
            [
                'smoke.required'=>'Please input smoking',
    			'smoke.unique'=>'smoking must be unique',
            ]
        );
        $smoking->smoke=$request->smoke;
        $smoking->save();
        return redirect('admin/user-properties/smoking/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteSmoking($id)
    {
    	$smoking=smoking::find($id);
    	$smoking->delete();
    	return redirect('admin/user-properties/smoking/index')->with('success','Delete successfully');
    }




    //Job Status Controller
    public function indexJobStatus()
    {
    	$job_status = job_status::all();
    	return view('admin.user-properties.job-status.index',['job_status'=>$job_status]);
    }

    public function getAddJobStatus()
    {
    	return view('admin.user-properties.job-status.add');
    }

    public function postAddJobStatus(Request $request)
    {
    	$this->validate($request,
    		[
    			'status'=>'required|unique:job_status'
    		],
    		[
    			'status.required'=>'Please input status',
    			'status.unique'=>'status must be unique',
    		]
    	);
    	$job_status = new job_status;
    	$job_status->status=$request->status;
    	$job_status->save();
    	return redirect('admin/user-properties/job-status/add')->with('success','Add successfully');
    }

    public function getEditJobStatus($id)
    {
		$job_status = job_status::find($id);
		return view('admin.user-properties.job-status.edit',['job_status'=>$job_status]);
    }

    public function postEditJobStatus($id,Request $request)
    {
		$job_status = job_status::find($id);
		$this->validate($request,
            [
                'status'=>'required|unique:job_status'
            ],
            [
                'status.required'=>'Please input status',
    			'status.unique'=>'status must be unique',
            ]
        );
        $job_status->status=$request->status;
        $job_status->save();
        return redirect('admin/user-properties/job-status/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteJobStatus($id)
    {
    	$job_status=job_status::find($id);
    	$job_status->delete();
    	return redirect('admin/user-properties/job-status/index')->with('success','Delete successfully');
    }




    //House Type Controller
    public function indexHouseType()
    {
    	$house_type = house_type::all();
    	return view('admin.user-properties.house-type.index',['house_type'=>$house_type]);
    }

    public function getAddHouseType()
    {
    	return view('admin.user-properties.house-type.add');
    }

    public function postAddHouseType(Request $request)
    {
    	$this->validate($request,
    		[
    			'type'=>'required|unique:house_type'
    		],
    		[
    			'type.required'=>'Please input type',
    			'type.unique'=>'type must be unique',
    		]
    	);
    	$house_type = new house_type;
    	$house_type->type=$request->type;
    	$house_type->save();
    	return redirect('admin/user-properties/house-type/add')->with('success','Add successfully');
    }

    public function getEditHouseType($id)
    {
		$house_type = house_type::find($id);
		return view('admin.user-properties.house-type.edit',['house_type'=>$house_type]);
    }

    public function postEditHouseType($id,Request $request)
    {
		$house_type = house_type::find($id);
		$this->validate($request,
            [
                'type'=>'required|unique:house_type'
            ],
            [
                'type.required'=>'Please input type',
    			'type.unique'=>'type must be unique',
            ]
        );
        $house_type->type=$request->type;
        $house_type->save();
        return redirect('admin/user-properties/house-type/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteHouseType($id)
    {
    	$house_type=house_type::find($id);
    	$house_type->delete();
    	return redirect('admin/user-properties/house-type/index')->with('success','Delete successfully');
    }




    //Live With Controller
    public function indexLiveWith()
    {
    	$live_with = live_with::all();
    	return view('admin.user-properties.live-with.index',['live_with'=>$live_with]);
    }

    public function getAddLiveWith()
    {
    	return view('admin.user-properties.live-with.add');
    }

    public function postAddLiveWith(Request $request)
    {
    	$this->validate($request,
    		[
    			'livewith'=>'required|unique:live_with'
    		],
    		[
    			'livewith.required'=>'Please input livew ith',
    			'livewith.unique'=>'live with must be unique',
    		]
    	);
    	$live_with = new live_with;
    	$live_with->livewith=$request->livewith;
    	$live_with->save();
    	return redirect('admin/user-properties/live-with/add')->with('success','Add successfully');
    }

    public function getEditLiveWith($id)
    {
		$live_with = live_with::find($id);
		return view('admin.user-properties.live-with.edit',['live_with'=>$live_with]);
    }

    public function postEditLiveWith($id,Request $request)
    {
		$live_with = live_with::find($id);
		$this->validate($request,
            [
                'livewith'=>'required|unique:live_with'
            ],
            [
                'livewith.required'=>'Please input live with',
    			'livewith.unique'=>'live with must be unique',
            ]
        );
        $live_with->livewith=$request->livewith;
        $live_with->save();
        return redirect('admin/user-properties/live-with/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteLiveWith($id)
    {
    	$live_with=live_with::find($id);
    	$live_with->delete();
    	return redirect('admin/user-properties/live-with/index')->with('success','Delete successfully');
    }




    //Have Children Controller
    public function indexHaveChildren()
    {
    	$have_children = have_children::all();
    	return view('admin.user-properties.have-children.index',['have_children'=>$have_children]);
    }

    public function getAddHaveChildren()
    {
    	return view('admin.user-properties.have-children.add');
    }

    public function postAddHaveChildren(Request $request)
    {
    	$this->validate($request,
    		[
    			'children'=>'required|unique:have_children'
    		],
    		[
    			'children.required'=>'Please input children',
    			'children.unique'=>'children must be unique',
    		]
    	);
    	$have_children = new have_children;
    	$have_children->children=$request->children;
    	$have_children->save();
    	return redirect('admin/user-properties/have-children/add')->with('success','Add successfully');
    }

    public function getEditHaveChildren($id)
    {
		$have_children = have_children::find($id);
		return view('admin.user-properties.have-children.edit',['have_children'=>$have_children]);
    }

    public function postEditHaveChildren($id,Request $request)
    {
		$have_children = have_children::find($id);
		$this->validate($request,
            [
                'children'=>'required|unique:have_children'
            ],
            [
                'children.required'=>'Please input children',
    			'children.unique'=>'children must be unique',
            ]
        );
        $have_children->children=$request->children;
        $have_children->save();
        return redirect('admin/user-properties/have-children/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteHaveChildren($id)
    {
    	$have_children=have_children::find($id);
    	$have_children->delete();
    	return redirect('admin/user-properties/have-children/index')->with('success','Delete successfully');
    }




    //National Controller
    public function indexNational()
    {
    	$national = national::all();
    	return view('admin.user-properties.national.index',['national'=>$national]);
    }

    public function getAddNational()
    {
    	return view('admin.user-properties.national.add');
    }

    public function postAddNational(Request $request)
    {
    	$this->validate($request,
    		[
    			'national'=>'required|unique:national'
    		],
    		[
    			'national.required'=>'Please input national',
    			'national.unique'=>'national must be unique',
    		]
    	);
    	$national = new national;
    	$national->national=$request->national;
    	$national->save();
    	return redirect('admin/user-properties/national/add')->with('success','Add successfully');
    }

    public function getEditNational($id)
    {
		$national = national::find($id);
		return view('admin.user-properties.national.edit',['national'=>$national]);
    }

    public function postEditNational($id,Request $request)
    {
		$national = national::find($id);
		$this->validate($request,
            [
                'national'=>'required|unique:national'
            ],
            [
                'national.required'=>'Please input national',
    			'national.unique'=>'national must be unique',
            ]
        );
        $national->national=$request->national;
        $national->save();
        return redirect('admin/user-properties/national/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteNational($id)
    {
    	$national=national::find($id);
    	$national->delete();
    	return redirect('admin/user-properties/national/index')->with('success','Delete successfully');
    }




    //Educational Level Controller
    public function indexEducationalLevel()
    {
    	$educational_level = educational_level::all();
    	return view('admin.user-properties.educational-level.index',['educational_level'=>$educational_level]);
    }

    public function getAddEducationalLevel()
    {
    	return view('admin.user-properties.educational-level.add');
    }

    public function postAddEducationalLevel(Request $request)
    {
    	$this->validate($request,
    		[
    			'level'=>'required|unique:educational_level'
    		],
    		[
    			'level.required'=>'Please input level',
    			'level.unique'=>'level must be unique',
    		]
    	);
    	$educational_level = new educational_level;
    	$educational_level->level=$request->level;
    	$educational_level->save();
    	return redirect('admin/user-properties/educational-level/add')->with('success','Add successfully');
    }

    public function getEditEducationalLevel($id)
    {
		$educational_level = educational_level::find($id);
		return view('admin.user-properties.educational-level.edit',['educational_level'=>$educational_level]);
    }

    public function postEditEducationalLevel($id,Request $request)
    {
		$educational_level = educational_level::find($id);
		$this->validate($request,
            [
                'level'=>'required|unique:educational_level'
            ],
            [
                'level.required'=>'Please input level',
    			'level.unique'=>'level must be unique',
            ]
        );
        $educational_level->level=$request->level;
        $educational_level->save();
        return redirect('admin/user-properties/educational-level/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteEducationalLevel($id)
    {
    	$educational_level=educational_level::find($id);
    	$educational_level->delete();
    	return redirect('admin/user-properties/educational-level/index')->with('success','Delete successfully');
    }




    //Language Controller
    public function indexLanguage()
    {
    	$language = language::all();
    	return view('admin.user-properties.language.index',['language'=>$language]);
    }

    public function getAddLanguage()
    {
    	return view('admin.user-properties.language.add');
    }

    public function postAddLanguage(Request $request)
    {
    	$this->validate($request,
    		[
    			'language'=>'required|unique:language'
    		],
    		[
    			'language.required'=>'Please input language',
    			'language.unique'=>'language must be unique',
    		]
    	);
    	$language = new language;
    	$language->language=$request->language;
    	$language->save();
    	return redirect('admin/user-properties/language/add')->with('success','Add successfully');
    }

    public function getEditLanguage($id)
    {
		$language = language::find($id);
		return view('admin.user-properties.language.edit',['language'=>$language]);
    }

    public function postEditLanguage($id,Request $request)
    {
		$language = language::find($id);
		$this->validate($request,
            [
                'language'=>'required|unique:language'
            ],
            [
                'language.required'=>'Please input language',
    			'language.unique'=>'language must be unique',
            ]
        );
        $language->language=$request->language;
        $language->save();
        return redirect('admin/user-properties/language/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteLanguage($id)
    {
    	$language=language::find($id);
    	$language->delete();
    	return redirect('admin/user-properties/language/index')->with('success','Delete successfully');
    }




    //Religion Controller
    public function indexReligion()
    {
    	$religion = religion::all();
    	return view('admin.user-properties.religion.index',['religion'=>$religion]);
    }

    public function getAddReligion()
    {
    	return view('admin.user-properties.religion.add');
    }

    public function postAddReligion(Request $request)
    {
    	$this->validate($request,
    		[
    			'religion'=>'required|unique:religion'
    		],
    		[
    			'religion.required'=>'Please input religion',
    			'religion.unique'=>'religion must be unique',
    		]
    	);
    	$religion = new religion;
    	$religion->religion=$request->religion;
    	$religion->save();
    	return redirect('admin/user-properties/religion/add')->with('success','Add successfully');
    }

    public function getEditReligion($id)
    {
		$religion = religion::find($id);
		return view('admin.user-properties.religion.edit',['religion'=>$religion]);
    }

    public function postEditReligion($id,Request $request)
    {
		$religion = religion::find($id);
		$this->validate($request,
            [
                'religion'=>'required|unique:religion'
            ],
            [
                'religion.required'=>'Please input religion',
    			'religion.unique'=>'religion must be unique',
            ]
        );
        $religion->religion=$request->religion;
        $religion->save();
        return redirect('admin/user-properties/religion/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteReligion($id)
    {
    	$religion=religion::find($id);
    	$religion->delete();
    	return redirect('admin/user-properties/religion/index')->with('success','Delete successfully');
    }




    //Constellation Controller
    public function indexConstellation()
    {
    	$constellation = constellation::all();
    	return view('admin.user-properties.constellation.index',['constellation'=>$constellation]);
    }

    public function getAddConstellation()
    {
    	return view('admin.user-properties.constellation.add');
    }

    public function postAddConstellation(Request $request)
    {
    	$this->validate($request,
    		[
    			'constellation'=>'required|unique:constellation'
    		],
    		[
    			'constellation.required'=>'Please input constellation',
    			'constellation.unique'=>'constellation must be unique',
    		]
    	);
    	$constellation = new constellation;
    	$constellation->constellation=$request->constellation;
    	$constellation->save();
    	return redirect('admin/user-properties/constellation/add')->with('success','Add successfully');
    }

    public function getEditConstellation($id)
    {
		$constellation = constellation::find($id);
		return view('admin.user-properties.constellation.edit',['constellation'=>$constellation]);
    }

    public function postEditConstellation($id,Request $request)
    {
		$constellation = constellation::find($id);
		$this->validate($request,
            [
                'constellation'=>'required|unique:constellation'
            ],
            [
                'constellation.required'=>'Please input constellation',
    			'constellation.unique'=>'constellation must be unique',
            ]
        );
        $constellation->constellation=$request->constellation;
        $constellation->save();
        return redirect('admin/user-properties/constellation/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteConstellation($id)
    {
    	$constellation=constellation::find($id);
    	$constellation->delete();
    	return redirect('admin/user-properties/constellation/index')->with('success','Delete successfully');
    }




    //Gender Controller
    public function indexGender()
    {
        $gender = gender::all();
        return view('admin.user-properties.gender.index',['gender'=>$gender]);
    }

    public function getAddGender()
    {
        return view('admin.user-properties.gender.add');
    }

    public function postAddGender(Request $request)
    {
        $this->validate($request,
            [
                'gender'=>'required|unique:gender'
            ],
            [
                'gender.required'=>'Please input gender',
                'gender.unique'=>'gender must be unique',
            ]
        );
        $gender = new gender;
        $gender->gender=$request->gender;
        $gender->save();
        return redirect('admin/user-properties/gender/add')->with('success','Add successfully');
    }

    public function getEditGender($id)
    {
        $gender = gender::find($id);
        return view('admin.user-properties.gender.edit',['gender'=>$gender]);
    }

    public function postEditGender($id,Request $request)
    {
        $gender = gender::find($id);
        $this->validate($request,
            [
                'gender'=>'required|unique:gender'
            ],
            [
                'gender.required'=>'Please input gender',
                'gender.unique'=>'gender must be unique',
            ]
        );
        $gender->gender=$request->gender;
        $gender->save();
        return redirect('admin/user-properties/gender/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDeleteGender($id)
    {
        $gender=gender::find($id);
        $gender->delete();
        return redirect('admin/user-properties/gender/index')->with('success','Delete successfully');
    }
}
