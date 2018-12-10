<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\flirtingmethods;
use Session;

class FlirtingMethodsController extends Controller
{
    public function __construct(flirtingmethods $mFlirtingmethods){
        $this->mFlirtingmethods = $mFlirtingmethods;
    }

    public function index(){
    	$flirtingmethods=flirtingmethods::paginate(6);
        $getAllType = $this->mFlirtingmethods->getAllType();
        $arrType = array();
        foreach($getAllType as $type){
            $countType = $this->mFlirtingmethods->countIdType($type->id);
            array_push($arrType, array('idt' => $type->id,'gender'=>$type->gender,'icon'=>$type->icon,'count'=>$countType));
        }
        $mostView = $this->mFlirtingmethods->mostView();
        $lastestNews = $this->mFlirtingmethods->lastestNews();
    	return view('datingtonight.flirtingmethods.index',compact('flirtingmethods','mostView','lastestNews','arrType'));
    }

    public function detail($slug, $id){
        $getIdItem = $this->mFlirtingmethods->getIdItem($id);
        $getAllType = $this->mFlirtingmethods->getAllType();
        $arrType = array();
        foreach($getAllType as $type){
            $countType = $this->mFlirtingmethods->countIdType($type->id);
            array_push($arrType, array('idt' => $type->id,'gender'=>$type->gender,'icon'=>$type->icon,'count'=>$countType));
        }
        $mostView = $this->mFlirtingmethods->mostView();
        $sessionKey = $id;
        $sessionView = Session::get($sessionKey); // tạo 1 mảng sessionView
        if(!$sessionView) {
            Session::put($sessionKey,1);
            $getIdItem->increment('count_number');
        }
        $relatedNews = $this->mFlirtingmethods->relatedNews($id, $getIdItem->id_gender);
    	return view('datingtonight.flirtingmethods.detail',compact('getIdItem','arrType','mostView','relatedNews'));
    }

    public function categories($cslug, $cid){
        $getIdType = $this->mFlirtingmethods->getIdType($cid);
        $getAllIdCat = $this->mFlirtingmethods->getAllIdCat($cid);
        $getAllType = $this->mFlirtingmethods->getAllType();
        $mostView = $this->mFlirtingmethods->mostView();
        $lastestNews = $this->mFlirtingmethods->lastestNews();
        $arrType = array();
        foreach($getAllType as $type){
            $countType = $this->mFlirtingmethods->countIdType($type->id);
            array_push($arrType, array('idt' => $type->id,'gender'=>$type->gender,'icon'=>$type->icon,'count'=>$countType));
        }
        return view('datingtonight.flirtingmethods.cat',compact('getIdType','getAllIdCat','arrType','mostView','lastestNews'));
    }
}
