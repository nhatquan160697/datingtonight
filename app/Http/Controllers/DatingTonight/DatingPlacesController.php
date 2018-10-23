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
  		$getItems = $this->mDatingPlaces->getItems();
  		return view('datingtonight.datingplaces.index',compact('getItems'));
  	}
}
