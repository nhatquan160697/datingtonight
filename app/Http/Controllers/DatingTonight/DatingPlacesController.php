<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\DatingPlacePicture;
use App\Model\DatingType;
use Session;

class DatingPlacesController extends Controller
{
	public function __construct(DatingPlaces $mDatingPlaces, DatingPlacePicture $mDatingPlacePicture, DatingType $mDatingType){
		$this->mDatingPlaces = $mDatingPlaces;
   		$this->mDatingPlacePicture = $mDatingPlacePicture;
   		$this->mDatingType = $mDatingType;
	}

	public function index(){
		$getItems = $this->mDatingPlaces->getIndex();
		$getNameType = $this->mDatingType->getNameType();
		$colection = array();
		foreach($getNameType as $nameType){
			$countType = $this->mDatingType->countType($nameType->id_type);
			array_push($colection, array('cid' =>$nameType->id_type,'name'=>$nameType->name_type,'count'=>$countType));
		}
		$mostView = $this->mDatingPlaces->getTop5();
		$lastestNew = $this->mDatingPlaces->getTop5byDate();
		return view('datingtonight.datingplaces.index',compact('getItems','colection','mostView','lastestNew'));
	}

	public function detail($slug, $id){
		$getItem = $this->mDatingPlaces->getItem($id);
    	$getPicture = $this->mDatingPlacePicture->getItem($id);
		$getNameType = $this->mDatingType->getNameType();
		$arrType = array();
		foreach($getNameType as $nameType){
			$countType = $this->mDatingType->countType($nameType->id_type);
			array_push($arrType, array('cid' => $nameType->id_type,'name'=>$nameType->name_type,'count'=>$countType));
		}
		$mostView = $this->mDatingPlaces->getTop5();
		$sessionKey = $id;
		$sessionView = Session::get($sessionKey); // tạo 1 mảng sessionView
		if(!$sessionView) {
			Session::put($sessionKey,1);
			$getItem->increment('count_number');
		}
		$relatedNews = $this->mDatingPlaces->relatedNews($id,$getItem->id_type);
		return view('datingtonight.datingplaces.detail',compact('getItem','getPicture','getNameType','arrType','mostView','relatedNews'));
	}

	public function categories($cslug, $cid){
		$getIdCat = $this->mDatingPlaces->getCatId($cid);
		$getCatItem = $this->mDatingType->getCatItem($cid);
		$getNameType = $this->mDatingType->getNameType();
		$colection = array();
		foreach($getNameType as $nameType){
			$countType = $this->mDatingType->countType($nameType->id_type);
			array_push($colection, array('cid' =>$nameType->id_type,'name'=>$nameType->name_type,'count'=>$countType));
		}
		$mostView = $this->mDatingPlaces->getTop5();
		$lastestNew = $this->mDatingPlaces->getTop5byDate();
		return view('datingtonight.datingplaces.cat',compact('getIdCat','getCatItem','colection','mostView','lastestNew'));
	}
}
