<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;

class UserController extends Controller
{
	public function __construct(Users $mUsers){
		$this->mUsers = $mUsers;
	}

    public function index(){
    	$getUser = $this->mUsers->getItems();
    	return view('admin.user.index',compact('getUser'));
    }
}
