<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\flirtingmethods;

class FlirtingMethodsController extends Controller
{
    public function index()
    {
    	$flirtingmethods=flirtingmethods::paginate(4);
    	return view('datingtonight.flirtingmethods.index',['flirtingmethods'=>$flirtingmethods]);
    }

    public function detail($slug, $id)
    {
    	$flirtingmethods=flirtingmethods::find($id);
    	return view('datingtonight.flirtingmethods.detail',['flirtingmethods'=>$flirtingmethods]);
    }
}
