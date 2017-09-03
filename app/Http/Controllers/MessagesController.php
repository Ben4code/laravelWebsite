<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required'
        ]);
        //Create New Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->messages = $request->input('message');
        //Save Message
        $message->save();
        //Redirect
        return redirect('/contact')->with('success', 'Message Sent.');
    } 


    public function getEmails(){
        $emails = Message::all();

        //return data in key value pair
        return view('emails')->with('emails',$emails);

    }
}
