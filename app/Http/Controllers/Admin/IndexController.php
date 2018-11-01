<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * IndexController constructor
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
    	return view('admin.index.index');
    }
}
