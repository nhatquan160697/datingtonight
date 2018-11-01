<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DatingPlaces;
use App\Model\flirtingmethods;

class IndexController extends Controller
{
	public function __construct(DatingPlaces $mDatingPlaces, flirtingmethods $mFlirtingMethods){
		$this->mDatingPlaces = $mDatingPlaces;
        $this->mFlirtingMethods = $mFlirtingMethods;
	}

    public function index(){
    	$getTop5 = $this->mDatingPlaces->getTop5();
    	$getTop1 = $this->mDatingPlaces->getTopOne();
    	$getTop23 = $this->mDatingPlaces->getTop23();
    	$getTop6 = $this->mDatingPlaces->getTop6();
        $getTop5FM = $this->mFlirtingMethods->getTop5();
        $getTop5byDate = $this->mDatingPlaces->getTop5byDate();
        $getTop4byDate = $this->mFlirtingMethods->getTop4byDate();
    	return view('datingtonight.index.index',compact('getTop5','getTop1','getTop23','getTop6','getTop5FM','getTop5byDate','getTop4byDate'));
    }

    public function detail($slug, $id){
		$getItem = $this->mDatingPlaces->getItem($id);
		return view('datingtonight.datingplaces.detail',compact('getItem'));
	}
}
