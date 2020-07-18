<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\JobMails;
use App\ContactMails;
use App\Mail\JobMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{ 

    public function admin()
    {
        if(Auth::check() && Auth::user()->role=='admin'){
        return view('admin');
        }
        else{
            abort(404, 'Page not found');
        }

    }

    public function allUsers(){
        $users = User::latest()->paginate(10);
        return response()->json($users, 200);
    }

    public function allJobs(){
        $jobs = Job::latest()->paginate(10);
        return response()->json($jobs, 200);
    }

    public function allJobSeekers(){
        $jobseekers = DB::table('users')->where('role', 'jobseeker')->paginate(10);
        return response()->json($jobseekers, 200);
    }

    public function allEmployers(){
        $employers = DB::table('users')->where('role', 'employer')->paginate(10);
        return response()->json($employers, 200);
    }

    public function allContactMails(){
        $contactmails = ContactMails::latest()->paginate(10);
        return response()->json($contactmails, 200);
    }

    public function allJobMails(){
        $jobmails = JobMails::latest()->paginate(10);
        return response()->json($jobmails, 200);

    }
    public function deleteuser($id){
        $jobmails = User::find($id);
        $jobmails->name='blocked'.$id;
        $jobmails->password='blocked'.$id;
        $jobmails->email='blocked'.$id;
        $jobmails->role='blocked'.$id;
        $jobmails->save();
        return response()->json(['message'=>'Blocked',$jobmails], 200);
    }


    public function adminProfile(){
        $user = Auth::user();
        $user = Auth::user()->where('role', 'admin')->first();
        return response()->json($user, 200);
    }
    public function deletecontactus($id){
        $user=ContactMails::find($id);
        $user->delete();
        return response()->json(['message'=>'Successfully deleted'], 200);
    }

    public function changepassword()
    {
        return view('changepassword');
    }

    public function passwordchanged(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required','string','min:10','max:15','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/',],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return response()->json('password changed successfully', 200);
    }
    public function login(Request $request){
        if(Auth::check())
        {
            Auth::logout();
        }
        return response()->json(['message'=>'Successfully logout'], 200);

    }


}

