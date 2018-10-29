<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function getAdminLogin(){
    	return view('auth.admin.login');
    }

    public function postAdminLogin(Request $request){

    }

    public function getUserLogin(){
    	return view('auth.users.default');
    }

    public function postUserLogin(){

    }

    // Register Controller lam duoi cho ni
    // -- Code cua Tan

    public function getRegister()
    {
        return view('auth.users.default');
    }
    public function postRegister(Request $request)
    {

    }

}
