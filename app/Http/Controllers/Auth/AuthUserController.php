<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;

class AuthUserController extends Controller
{
	public function __construct(Users $mUser){
		$this->mUser = $mUser;
	}

    public function getLogin(){
    	return view('auth.users.default');
    }

    public function postLogin(Request $request){
    	$username = trim($request->username);
    	$password = trim($request->password);
    	$getUsername = $this->mUser->getUsername($username);
    	if($this->mUser->checkUserLogin($username,$password)){
    		$request->session()->put('checkUser',$getUsername);
    		return redirect()->route('datingtonight.index.index');
    	} else {
    		return redirect()->route('auth.users.default')->with('alert','Username or Password is invalid');
    	}
    }

    public function logOut(Request $request){
    	$request->session()->flush();
    	return redirect()->route('auth.users.default');
    }
}
