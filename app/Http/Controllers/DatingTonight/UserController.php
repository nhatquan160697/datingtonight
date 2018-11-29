<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;

class UserController extends Controller
{
	public function __construct(Users $mUser){
		$this->mUser = $mUser;
	}

    public function index(){
    	if(session()->has('checkUser')){
    		$id_user = session()->get('checkUser')[0]->id;
    	}
    	$getInfoUser = $this->mUser->getInfoUser($id_user);
    	return view('datingtonight.user.index',compact('getInfoUser'));
    }

    public function edit($id){
    	return view('datingtonight.user.edit');
    }
}
