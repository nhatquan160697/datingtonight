<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\flirtingmethods;

class FlirtingMethodsController extends Controller
{
    public function index()
    {
    	$flirtingmethods=flirtingmethods::paginate(8);
    	return view('datingtonight.flirtingmethods.index',['flirtingmethods'=>$flirtingmethods]);
    }

    public function detail($id)
    {
    	$flirtingmethods=flirtingmethods::find($id);
    	return view('datingtonight.flirtingmethods.detail',['flirtingmethods'=>$flirtingmethods]);
    }
}
