<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\JobMail;
use Illuminate\Support\Facades\Mail;

class JobMailController extends Controller
{
    public function index(){
        return view('jobemail');
    }

    public function jobcv(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
            'attachment' => 'required'
        ]);

        $data = array(
           'full_name'=>$request->full_name,
           'email'=>$request->email,
           'subject'=>$request->subject,
            'content'=>$request->content,
            'attachment'=>$request->attachment
        );

        Mail::to('gideongarcia11@gmail.com')->send(new JobMail($data));
        // return back()->with('success','Mail sent successfully!');
        return response()->json( 'mail sent successfully', 200);
    }
}
