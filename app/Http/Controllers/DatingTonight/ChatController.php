<?php

namespace App\Http\Controllers\DatingTonight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Model\users;
use App\Model\message;
use App\Events\DemoPusherEvent;

class ChatController extends Controller
{
    public function index($id)
    {
    	$fromID=Session::get('userID');
    	$toID=$id;
    	$message=message::all();
    	$toUser=users::find($toID);
    	$fromUser=users::find($fromID);
    	return view('datingtonight.chat.index',[
    		'fromID'=>$fromID,
    		'toID'=>$toID,
    		'message'=>$message,
    		'toUser'=>$toUser,
    		'fromUser'=>$fromUser
    	]);
    }

    public function sendMessage($id,Request $request)
    {
    	//event(new DemoPusherEvent($request->content));
    	$fromID=Session::get('userID');
    	$toID=$id;
    	if($request->content!=null)
    	{
    		$message=new message;
    		$message->touser=$toID;
    		$message->fromuser=$fromID;
    		$message->content=$request->content;
    		$message->save();
    	}
    	
    	$message=message::all();
    	return redirect()->back();
    }
}
