<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\DatingPlacePicture;
use App\Model\DatingType;

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
			$countHotel = $this->mDatingType->countHotel($nameType->id_type);
			array_push($colection, array('name'=>$nameType->name_type,'count'=>$countHotel));
		}
		$mostView = $this->mDatingPlaces->getTop5();
		$lastestNew = $this->mDatingPlaces->getTop5byDate();
		return view('datingtonight.datingplaces.index',compact('getItems','colection','mostView','lastestNew'));
	}

	public function detail($slug, $id){
		$getItem = $this->mDatingPlaces->getItem($id);
    	$getPicture = $this->mDatingPlacePicture->getItem($id);
		$getNameType = $this->mDatingType->getNameType();
		$countHotel = $this->mDatingType->countHotel($id);
		return view('datingtonight.datingplaces.detail',compact('getItem','getPicture','getNameType','countHotel'));
	}
}
