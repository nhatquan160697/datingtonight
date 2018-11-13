<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\City;
use App\Model\DatingPlacePicture;
use App\Http\Requests\DatingPlaceRequest;

class AdminDatingController extends Controller
{
	public function __construct(DatingPlaces $mDatingPlaces, City $mCity, DatingPlacePicture $mDatingPlacePicture){
		$this->mDatingPlaces = $mDatingPlaces;
		$this->mCity = $mCity;
		$this->mDatingPlacePicture = $mDatingPlacePicture;
	}

	public function index(){
		$getItems = $this->mDatingPlaces->getItems();
		return view('admin.datingplaces.index',compact('getItems'));
	}

	public function getAdd(){
		$getCities = $this->mCity->getItems();
		$getType = $this->mDatingPlaces->getType();
		return view('admin.datingplaces.add',compact('getCities','getType'));
	}

	public function postAdd(DatingPlaceRequest $request){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$name_place = trim($request->name_place);
		$slcCity = $request->slcCity;
		$slcType = $request->slcType;
		$txtPreview = trim($request->txtPreview);
		$txtDetail = trim($request->txtDetail);
		$fImages = "";
		if($request->file('fImages') != null){
	 		$file = $request->file('fImages');
			$fileExtension = $file->getClientOriginalExtension();
			$picture = 'datingplaces-'.time().'.'.$fileExtension;
			$uploadPath = storage_path('app\files\datingplaces\\');
			$file->move($uploadPath, $picture);
		}
		$arItem = array(
			'name_place' => $name_place,
			'city' => $slcCity,
			'id_type' => $slcType,
			'preview_text' => $txtPreview,
			'detail_place' => $txtDetail,
			'picture' => $picture,
			'count_number' => 0,
			'date_created' => now()
		);
		// add to the database
		if($this->mDatingPlaces->addItem($arItem)) {
			return redirect(route('admin.datingplaces.index'))->with('msg','Add successfully');
		} else {
			return redirect(route('admin.datingplaces.index'))->with('msg','Add failed');
		}
	}

	public function getEdit($id){
		$getItem = $this->mDatingPlaces->getItem($id);
		$getCities = $this->mCity->getItems();
		$getType = $this->mDatingPlaces->getType();
		return view('admin.datingplaces.edit',compact('getItem','getCities','getType'));
	}

	public function postEdit($id, Request $request){
		$getItem = $this->mDatingPlaces->getItem($id);
		$slcCity = $request->slcCity;
		$slcType = $request->slcType;
		$txtPreview = trim($request->txtPreview);
		$txtDetail = trim($request->txtDetail);
		// handle the image
		$fImages = "";
		$oldPicture = $this->mDatingPlaces->getOldImage($id);
		$oldPath = storage_path('app\files\datingplaces\\').$oldPicture;
		if($request->file('fImages') != null){
			unlink(storage_path('app\files\datingplaces\\').$oldPicture);
	 		$file = $request->file('fImages');
			$fileExtension = $file->getClientOriginalExtension();
			$picture = 'datingplaces-'.time().'.'.$fileExtension;
			$uploadPath = storage_path('app\files\datingplaces\\');
			$file->move($uploadPath, $picture);
			$arItem = array(
				'city' => $slcCity,
				'id_type' => $slcType,
				'preview_text' => $txtPreview,
				'detail_place' => $txtDetail,
				'picture' => $picture,
				'date_created' => now()
			);
		} else { // xu ly neu ko co anh thi giu nguyen
			$arItem = array(
				'city' => $slcCity,
				'id_type' => $slcType,
				'preview_text' => $txtPreview,
				'detail_place' => $txtDetail,
				'date_created' => now()
			);
		}
		$this->validate($request,[
				'txtPreview' =>'required',
				'txtDetail' => 'required',
			],
			[
				'txtPreview.required' => 'Please input Preview ',
				'txtDetail.required' => 'Please input Detail ',
			]
		);
		// add to the database
		if($this->mDatingPlaces->editItem($id, $arItem)) {
			return redirect(route('admin.datingplaces.index'))->with('msg','Edit successfully');
		} else {
			return redirect(route('admin.datingplaces.index'))->with('msg','Edit failed');
		}
	}

	public function del($id){
		$oldPicture = $this->mDatingPlaces->getOldImage($id);
		$oldPath = storage_path('app\files\datingplaces\\').$oldPicture;
		if(isset($oldPath)){
			unlink($oldPath);
		}
		if($this->mDatingPlaces->delItem($id)){
			return redirect()->route('admin.datingplaces.index')->with('msg','Delete successfully');
		} else {
			return redirect()->route('admin.datingplaces.index')->with('msg','Delete failed');
		}
	}

	public function listPicture(){
		$getNamePlace = $this->mDatingPlacePicture->getNamePlaces();
		return view('admin.datingplaces.listpicture',compact('getNamePlace'));
	}
	public function getDatingPicture(){
		$getNameDP = $this->mDatingPlaces->getItems();
		return view('admin.datingplaces.picture',compact('getNameDP'));
	}

	public function postDatingPicture(Request $request){
		$slcName = $request->slcName;
		$fImages1 = "";
		if($request->file('fImages1') != null){
			$path = $request->file('fImages1')->store('files/datingplaces/dating_place_picture');
			$tmp = explode("/", $path);
			$fImages1 = end($tmp);
		}
		$fImages2 = "";
		if($request->file('fImages2') != null){
			$path = $request->file('fImages2')->store('files/datingplaces/dating_place_picture');
			$tmp = explode("/", $path);
			$fImages2 = end($tmp);
		}
		$fImages3 = "";
		if($request->file('fImages3') != null){
			$path = $request->file('fImages3')->store('files/datingplaces/dating_place_picture');
			$tmp = explode("/", $path);
			$fImages3 = end($tmp);
		}
		$fImages4 = "";
		if($request->file('fImages4') != null){
			$path = $request->file('fImages4')->store('files/datingplaces/dating_place_picture');
			$tmp = explode("/", $path);
			$fImages4 = end($tmp);
		}
		$fImages5 = "";
		if($request->file('fImages5') != null){
			$path = $request->file('fImages5')->store('files/datingplaces/dating_place_picture');
			$tmp = explode("/", $path);
			$fImages5 = end($tmp);
		}
		$arItem = array(
			'picture1' => $fImages1,
			'picture2' => $fImages2,
			'picture3' => $fImages3,
			'picture4' => $fImages4,
			'picture5' => $fImages5,
			'id_place' => $slcName,
		);
		// add to the database
		if($this->mDatingPlacePicture->addPicture($arItem)) {
			return redirect(route('admin.datingplaces.listpicture'))->with('msg','Add successfully');
		} else {
			return redirect(route('admin.datingplaces.listpicture'))->with('msg','Add failed');
		}
	}

	public function delPicture($id){
		if($this->mDatingPlacePicture->delItem($id)){
			// xoa hinh
			return redirect()->route('admin.datingplaces.listpicture')->with('msg','Delete successfully');
		} else {
			return redirect()->route('admin.datingplaces.listpicture')->with('msg','Delete failed');
		}
	}
}
