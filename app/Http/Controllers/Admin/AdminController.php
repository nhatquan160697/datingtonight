<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Administrator;

class AdminController extends Controller
{
	public function __construct(Administrator $mAdministrator){
		$this->mAdministrator = $mAdministrator;
	}

    public function index(){
    	$getItems = $this->mAdministrator->getItems();
    	return view('admin.admin.index',compact('getItems'));
    }

    public function getAdd(){
    	$getNameRoles = $this->mAdministrator->getNameRoles();
    	return view('admin.admin.add',compact('getNameRoles'));
    }

    public function postAdd(Request $request){
    	$txtUsername = trim($request->txtUsername);
		$txtPassword = bcrypt($request->txtPassword);
		$txtFullname = trim($request->txtFullname);
		$slcRole = $request->slcRole;
		$arItem = array(
			'username' => $txtUsername,
			'password' => $txtPassword,
			'fullname' => $txtFullname,
			'id_role' => $slcRole,
		);
		// add to the database
		if($this->mAdministrator->addItem($arItem)) {
			return redirect(route('admin.admin.index'))->with('msg','Add successfully');
		} else {
			return redirect(route('admin.admin.index'))->with('msg','Add failed');
		}
    }

    public function getEdit($id){
    	$getNameRoles = $this->mAdministrator->getNameRoles();
    	$getItem = $this->mAdministrator->getItem($id);
    	return view('admin.admin.edit',compact('getItem','getNameRoles'));
    }

    public function postEdit($id, Request $request){
    	$getItem = $this->mAdministrator->getItem($id);
    	$txtUsername = trim($request->txtUsername);
		$txtPassword = bcrypt($request->txtPassword);
		$txtFullname = trim($request->txtFullname);
		$slcRole = $request->slcRole;
		$arItem = array(
			'username' => $txtUsername,
			'password' => $txtPassword,
			'fullname' => $txtFullname,
			'id_role' => $slcRole,
		);
		// add to the database
		if($this->mAdministrator->editItem($id, $arItem)) {
			return redirect(route('admin.admin.index'))->with('msg','Edit successfully');
		} else {
			return redirect(route('admin.admin.index'))->with('msg','Edit failed');
		}
    }

    public function del($id){
		if($this->mAdministrator->delItem($id)){
			return redirect()->route('admin.admin.index')->with('msg','Delete successfully');
		} else {
			return redirect()->route('admin.admin.index')->with('msg','Delete failed');
		}
	}
}
