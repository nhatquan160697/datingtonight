<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Administrator;

class AuthAdminController extends Controller
{
	public function __construct(Administrator $mAdministrator){
		$this->mAdministrator = $mAdministrator;
	}

    public function getLogin(){
    	return view('auth.admin.login');
    }

    public function postLogin(Request $request){
    	$username = trim($request->username);
    	$password = md5($request->password);
    	$getAdmin = $this->mAdministrator->getIdAdmin($username);
    	if($this->mAdministrator->checkLogin($username,$password)){
    		$request->session()->put('checkAdmin',$getAdmin);
    		if(session()->has('checkAdmin')){
    			$id_role = session()->get('checkAdmin')[0]->id_role;
    		}
    		return redirect()->route('admin.index.index');
    	} else {
    		return redirect()->route('auth.admin.login')->with('msg','Username or Password is invalid');
    	}
    }

    public function logOut(Request $request){
    	$request->session()->flush();
    	return redirect()->route('auth.admin.login');
    }
}
