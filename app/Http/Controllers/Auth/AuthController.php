<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getAdminLogin(){
    	return view('auth.admin.login');
    }

    public function postAdminLogin(){

    }

    public function getUserLogin(){
    	return view('auth.users.default');
    }

    public function postUserLogin(){

    }

    // Register Controller lam duoi cho ni
    // -- Code cua Tan
}
