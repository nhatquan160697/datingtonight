<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminFlirtingController extends Controller
{
    public function index(){
    	return view('admin.flirtingmethods.index');
    }

    public function getAdd(){
    	return view('admin.flirtingmethods.add');
    }

    public function postAdd(){
    	
    }

    public function getEdit(){
    	return view('admin.flirtingmethods.edit');
    }

    public function postEdit(){
    	
    }

    public function del(){
    	return view('admin.flirtingmethods.delete');
    }
}
