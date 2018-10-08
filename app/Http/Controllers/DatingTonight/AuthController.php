<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getRegister(){
    	return view('datingtonight.auth.register');
    }

    public function postRegister(){
    	
    }
}
