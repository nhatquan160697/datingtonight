<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\flirtingmethods;

class AdminFlirtingController extends Controller
{
    public function index()
    {
        $flirtingmethods = flirtingmethods::all();
    	return view('admin.flirtingmethods.index',['flirtingmethods'=>$flirtingmethods]);
    }

    public function getAdd()
    {
    	return view('admin.flirtingmethods.add');
    }

    public function postAdd(Request $request)
    {
    	$flirtingmethods = new flirtingmethods;
        $this->validate($request,
            [
                'name_flirting'=>'required|unique:flirtingmethods|min:3|max:200',
                'preview_text'=>'required',
                'detail_flirting'=>'required',
                'author'=>'required|min:3|max:50',
            ],
            [
                //Name
                'name_flirting.required'=>'Please input Name',
                'name_flirting.min'=>'Character between 3-200',
                'name_flirting.max'=>'Character between 3-200',
                'name_flirting.unique'=>'Name must be unique',
                //Preview text
                'preview_text.required'=>'Please input Preview Text',
                //Detail
                'detail_flirting.required'=>'Please input Detail',
                //Author
                'author.required'=>'Please input Author',
                'author.min'=>'Character between 3-50',
                'author.max'=>'Character between 3-50',
            ]
        );
        if($request->file('Image') != null){
            $path = $request->file('Image')->store('files/flirtingmethods');
            $tmp = explode("/", $path);
            $flirtingmethods->image = end($tmp);
        }
        $flirtingmethods->name_flirting=$request->name_flirting;
        $flirtingmethods->preview_text=$request->preview_text;
        $flirtingmethods->detail_flirting=$request->detail_flirting;
        $flirtingmethods->author=$request->author;
        $flirtingmethods->date_created=now();
        $flirtingmethods->save();
        return redirect('admin/flirting-methods/add')->with('success','Add successfully');
    }

    public function getEdit($id)
    {
        $flirtingmethods = flirtingmethods::find($id);
    	return view('admin.flirtingmethods.edit',['flirtingmethods'=>$flirtingmethods]);
    }

    public function postEdit($id ,Request $request)
    {
        $flirtingmethods = flirtingmethods::find($id);
        $this->validate($request,
            [
                'name_flirting'=>'required|unique:flirtingmethods|min:3|max:50',
                'preview_text'=>'required|min:3|max:50',
                'detail_flirting'=>'required',
                'author'=>'required|min:3|max:50',
            ],
            [
                //Name
                'name_flirting.required'=>'Please input Name',
                'name_flirting.min'=>'Character between 3-50',
                'name_flirting.max'=>'Character between 3-50',
                'name_flirting.unique'=>'Name must be unique',
                //Preview text
                'preview_text.required'=>'Please input Preview Text',
                'preview_text.min'=>'Character between 3-50',
                'preview_text.max'=>'Character between 3-50',
                //Detail
                'detail_flirting.required'=>'Please input Detail',
                //Author
                'author.required'=>'Please input Author',
                'author.min'=>'Character between 3-50',
                'author.max'=>'Character between 3-50',
            ]
        );
        if($request->file('Image') != null){
            $path = $request->file('Image')->store('files/flirtingmethods');
            $tmp = explode("/", $path);
            $flirtingmethods->image = end($tmp);
        }
        $flirtingmethods->name_flirting=$request->name_flirting;
        $flirtingmethods->preview_text=$request->preview_text;
        $flirtingmethods->detail_flirting=$request->detail_flirting;
        $flirtingmethods->author=$request->author;
        $flirtingmethods->date_created=now();
        $flirtingmethods->save();
        return redirect('admin/flirting-methods/edit/'.$id)->with('success','Edit successfully');
    }

    public function getDelete($id)
    {
    	$flirtingmethods=flirtingmethods::find($id);
        $flirtingmethods->delete();
        return redirect('admin/flirting-methods/index')->with('success','Delete successfully');
    }
}
