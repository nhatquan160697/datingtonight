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
                'name_flirting'=>'required|unique:flirtingmethods',
                'preview_text'=>'required',
                'detail_flirting'=>'required',
                'author'=>'required',
            ],
            [
                //Name
                'name_flirting.required'=>'Please input Name',
                'name_flirting.unique'=>'Name must be unique',
                //Preview text
                'preview_text.required'=>'Please input Preview Text',
                //Detail
                'detail_flirting.required'=>'Please input Detail',
                //Author
                'author.required'=>'Please input Author',
            ]
        );
        $picture="";
        if($request->file('Image') != null){
                $file=$request->file('Image');
                $fileExtension=$file->getClientOriginalExtension();
                $picture='flirtingmethods-'.time().'.'.$fileExtension;
                $uploadPath =storage_path('app\files\flirtingmethods\\');
                $file->move($uploadPath,$picture);
        }
        $flirtingmethods->image=$picture;
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
                'name_flirting'=>'required',
                'preview_text'=>'required',
                'detail_flirting'=>'required',
                'author'=>'required',
            ],
            [
                //Name
                'name_flirting.required'=>'Please input Name',
                //Preview text
                'preview_text.required'=>'Please input Preview Text',
                //Detail
                'detail_flirting.required'=>'Please input Detail',
                //Author
                'author.required'=>'Please input Author',
            ]
        );
        $oldPicture=$flirtingmethods->image;
        $oldPath=storage_path('app\files\flirtingmethods\\').$oldPicture;
        $picture=$flirtingmethods->image;
        if($request->file('Image') != null){
            unlink($oldPath);
            $file=$request->file('Image');
            $fileExtension=$file->getClientOriginalExtension();
            $picture='flirtingmethods-'.time().'.'.$fileExtension;
            $uploadPath =storage_path('app\files\flirtingmethods\\');
            $file->move($uploadPath,$picture);
        }
        $flirtingmethods->image=$picture;
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
        $oldPicture=$flirtingmethods->image;
        $oldPath=storage_path('app\files\flirtingmethods\\').$oldPicture;
        unlink($oldPath);
        $flirtingmethods->delete();
        return redirect('admin/flirting-methods/index')->with('success','Delete successfully');
    }
}
