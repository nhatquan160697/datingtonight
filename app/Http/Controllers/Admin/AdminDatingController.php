<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDatingController extends Controller
{
    public function index(){
    	return view('admin.datingplaces.index');
    }

    public function getAdd(){
    	return view('admin.datingplaces.add');
    }

    public function postAdd(){
    	
    }
}
