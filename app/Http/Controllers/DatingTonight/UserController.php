<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
    	return view('datingtonight.user.index');
    }

    public function edit($id){
    	return view('datingtonight.user.edit');
    }
}
