<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlirtingMethodsController extends Controller
{
    public function index(){
    	return view('datingtonight.flirtingmethods.index');
    }
}
