<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMails;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function index(){
        return view('sendemail');
    }

    public function contactus(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);
        $data = new ContactMails;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->content = $request->content;
        $data->save();
        Mail::to('godswillchuks4@gmail.com')->send(new ContactMail($data));
        return response()->json(['message'=>'Mail sent successfully!',$data ], 200);
    }
}
