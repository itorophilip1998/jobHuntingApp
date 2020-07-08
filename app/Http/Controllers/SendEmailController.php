<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class SendEmailController extends Controller
{
    public function sendmail(){
        $data = array(
            'topic' => $request->topic,
            'body' => $request->body
        );

        Mail::to($request->input($user->email))->send(new SendEmail($data));
        return response()->json([
            'message' => 'mail sent successfully!'
        ]);
    }
}
