<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindingSuitablePerson extends Controller
{
    //
    public function index()
    {
    	return view('datingtonight.findingperson.formFinding');
    }
}
