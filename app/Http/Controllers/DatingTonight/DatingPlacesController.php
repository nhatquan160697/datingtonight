<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatingPlacesController extends Controller
{
  	public function index(){
  		return view('datingtonight.datingplaces.index');
  	}
}
