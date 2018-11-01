<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\DatingPlacePicture;

class DatingPlacesController extends Controller
{
	public function __construct(DatingPlaces $mDatingPlaces, DatingPlacePicture $mDatingPlacePicture){
		$this->mDatingPlaces = $mDatingPlaces;
   		$this->mDatingPlacePicture = $mDatingPlacePicture;
	}

	public function index(){
		$getItems = $this->mDatingPlaces->getIndex();
		return view('datingtonight.datingplaces.index',compact('getItems'));
	}

	public function detail($slug, $id){
		$getItem = $this->mDatingPlaces->getItem($id);
    	$getPicture = $this->mDatingPlacePicture->getItem($id);
		return view('datingtonight.datingplaces.detail',compact('getItem','getPicture'));
	}
}
