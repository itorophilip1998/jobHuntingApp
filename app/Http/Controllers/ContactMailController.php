<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $data = array(
           'full_name'=>$request->full_name,
           'email'=>$request->email,
           'subject'=>$request->subject,
            'content'=>$request->content
        );
        Mail::to('godswillchuks4@gmail.com')->send(new ContactMail($data));   
        return back()->with('success','Mail sent successfully!');
        // return response()->json(['message'=>'Mail sent successfully!'], 200);
    }
}
