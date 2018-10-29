<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;

class DatingPlacesController extends Controller
{
	public function __construct(DatingPlaces $mDatingPlaces){
		$this->mDatingPlaces = $mDatingPlaces;
	}

  	public function index(){
  		$getItems = $this->mDatingPlaces->getIndex();
  		return view('datingtonight.datingplaces.index',compact('getItems'));
  	}

  	public function detail($slug, $id){
  		$getItem = $this->mDatingPlaces->getItem($id);
  		return view('datingtonight.datingplaces.detail',compact('getItem'));
  	}
}
