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

    public function deleteUser($id){
    	if($this->mUsers->delUser($id)){
			return redirect()->route('admin.user.index')->with('msg','Delete successfully');
		} else {
			return redirect()->route('admin.user.index')->with('msg','Delete failed');
		}
    }
}
