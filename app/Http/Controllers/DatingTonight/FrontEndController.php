<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\DemoPusherEvent;

class FrontEndController extends Controller
{
    public function getPusher(){
     // gọi ra trang view demo-pusher.blade.php
     return view("demo-pusher");
    }
    public function fireEvent(){
     // Truyền message lên server Pusher
     event(new DemoPusherEvent("Hi, I'm Ford. Thanks for reading my article!"));
     return "Message has been sent.";
    }
}
