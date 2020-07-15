<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\JobMail;
use App\JobMails;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\User;

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
            'attachment' => 'required',
            'to' => 'required|email'
        ]);

        $data = new JobMails;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->content = $request->content;
        $data->attachment = $request->attachment;
        $data->to = $request->to;
        $data->user_id = Auth::user()->id;
        $data->save();
        

        Mail::to($request->to)->send(new JobMail($data));
        return back()->with('success','Mail sent successfully!');
        // return response()->json(['message','Mail sent successfully!'], 200);
    }
}
