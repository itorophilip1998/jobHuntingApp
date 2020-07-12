<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class SendEmailController extends Controller
{
        public function sendmail(Request $request){
        $this->validate($request,[
            'topic'=>'required',
            'body'=>'required',
            'email'=>'required|email'
        ]);

        $data = array(
            'topic' => $request->topic,
            'body' => $request->body,
            'email' => $request->email

        );

        Mail::to($request->input('email'))->send(new SendEmail($data));
        return response()->json([
            'message' => 'mail sent successfully!'
        ]);
        
    }
}