<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;
use App\Model\gender;
use App\Model\city;

class AuthUserController extends Controller
{
	public function __construct(Users $mUser){
		$this->mUser = $mUser;
	}

    public function getLogin(){
        $gender = gender::all();
        $city = city::all();
    	return view('auth.users.default',[
            'city'=>$city,
            'gender'=>$gender
        ]);
    }

    public function postLogin(Request $request){
    	$username = trim($request->username);
    	$password = trim($request->password);
    	$getUsername = $this->mUser->getUsername($username);
        $getUserID = $this->mUser->getUserID($username);
    	if($this->mUser->checkUserLogin($username,$password)){
    		$request->session()->put('checkUser',$getUsername);
            $request->session()->put('userID',$getUserID);
    		return redirect()->route('datingtonight.index.index');
    	} else {
    		return redirect()->route('auth.users.default')->with('alert','Username or Password is invalid');
    	}
    }

    public function logOut(Request $request){
    	$request->session()->flush();
    	return redirect()->route('auth.users.default');
    }


    public function postSignUp(Request $request)
    {
        if($this->mUser->checkUserExist($request->username  )){
            return redirect()->route('auth.users.default')->with('alert','Username has been taken');
        }
        $users = new users;
        $users->username=$request->username;
        $users->Fullname=$request->fullname;
        $users->email=$request->email;
        $users->gender=$request->gender;
        $users->city=$request->city;
        $users->phone_number=$request->phone_number;
        $users->Facebook=$request->facebook;
        $users->Birthdate=$request->birthday;
        $users->password=$request->password;
        $users->save();
        return redirect()->route('auth.users.default')->with('alert','Register Successful');
    }
}
