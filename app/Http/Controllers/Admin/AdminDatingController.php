<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\City;
use App\Model\DatingPlacePicture;

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
		return view('admin.datingplaces.add',compact('getCities'));
	}

	public function postAdd(Request $request){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$txtName = trim($request->txtName);
		$slcCity = $request->slcCity;
		$txtPreview = trim($request->txtPreview);
		$txtDetail = trim($request->txtDetail);
		$fImages = "";
		if($request->file('fImages') != null){
			$path = $request->file('fImages')->store('files/datingplaces');
			$tmp = explode("/", $path);
			$fImages = end($tmp);
		}
		$arItem = array(
			'name_place' => $txtName,
			'city' => $slcCity,
			'preview_text' => $txtPreview,
			'detail_place' => $txtDetail,
			'picture' => $fImages,
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
		return view('admin.datingplaces.edit',compact('getItem','getCities'));
	}

	public function postEdit($id, Request $request){
		$getItem = $this->mDatingPlaces->getItem($id);
		$txtName = trim($request->txtName);
		$slcCity = $request->slcCity;
		$txtPreview = trim($request->txtPreview);
		$txtDetail = trim($request->txtDetail);
		$fImages = "";
		if($request->file('fImages') != null){
			$path = $request->file('fImages')->store('files/datingplaces');
			$tmp = explode("/", $path);
			$fImages = end($tmp);

			// xóa hình cũ
		}
		$arItem = array(
			'name_place' => $txtName,
			'city' => $slcCity,
			'preview_text' => $txtPreview,
			'detail_place' => $txtDetail,
			'picture' => $fImages,
			'date_created' => now()
		);
		// add to the database
		if($this->mDatingPlaces->editItem($id, $arItem)) {
			return redirect(route('admin.datingplaces.index'))->with('msg','Edit successfully');
		} else {
			return redirect(route('admin.datingplaces.index'))->with('msg','Edit failed');
		}
	}

	public function del($id){
		if($this->mDatingPlaces->delItem($id)){
			// xoa hinh
			return redirect()->route('admin.datingplaces.index')->with('msg','Delete successfully');
		} else {
			return redirect()->route('admin.datingplaces.index')->with('msg','Delete failed');
		}
	}

	public function getDatingPicture(){
		$getNamePlaces = $this->mDatingPlacePicture->getNamePlaces();
		return view('admin.datingplaces.picture',compact('getNamePlaces'));
	}

	public function postDatingPicture(){

	}
}
