<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
   public function submit(Request $request)
   {
   		$this->validate($request,[
   			'name' => 'required',
   			'email' => 'required'
   		]);

   		// Create New Message
   		$message = new Message;

   		$message->name = $request->input('name');
   		$message->email = $request->input('email');
   		$message->message = $request->input('message');

   		// Save Message
   		$message->save();

   		// Redirect
   		return redirect('/')->with('success','Message Send Successfully ');

   }

   public function getAllMessages()
   {
   		$messages = Message::all();
   		return view('list_messages')->with('messages',$messages);
   }
}
