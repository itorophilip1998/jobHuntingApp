<?php

namespace App\Http\Controllers;

use App\SeekerProfile;
use Input;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;

class SeekerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make(request()->all(),
        array(
            'first_name' => 'required|string',
            'other_names' => 'required|string',
            'profile_pics' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'gender' => 'required|string',
            'phone_no' => 'required|string',
            'email' => 'required|string',
            'social_media_handle' => 'required|string',
            'bio' => 'required|text',
            'technical_skills' => 'required|text',
            'soft_skills' => 'required|text',
            'volunteer_experience' => 'required|text',
            'years_of_experience' => 'required|string',
            'education' => 'required|text',
        ));

        
        $seekerprofile = new SeekerProfile;
        $seekerprofile->first_name = $request->input('first_name');
        $seekerprofile->other_names = $request->input('other_names');
        $seekerprofile->gender = $request->input('gender');
        $seekerprofile->phone_no = $request->input('phone_no');
        $seekerprofile->email = $request->input('email');
        $seekerprofile->social_media_handle = $request->input('social_media_handle');
        $seekerprofile->bio = $request->input('bio');
        $seekerprofile->technical_skills = $request->input('technical_skills');
        $seekerprofile->soft_skills= $request->input('soft_skills');
        $seekerprofile->volunteer_experience = $request->input('volunteer_experience');
        $seekerprofile->years_of_experience = $request->input('years_of_experience');
        $seekerprofile->education = $request->input('education');
        $seekerprofile->user_id = Auth::user()->id;

        if($request->has('profile_pic')){
            $file = $request->file('profile_pic');
            $file->move(public_path(). '/storage/', $file->getClientOriginalName());
            $url = URL::to( '/storage/'. $file->getClientOriginalName());
            $seekerprofile->profile_pic = $url;
            }
        $seekerprofile->save();

        return response()->json([
            "message" => "SeekerProfile created successfully!"
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeekerProfile  $seekerprofile
     * @return \Illuminate\Http\Response
     */
    public function show(SeekerProfile $seekerprofile)
    {
        $seekerprofile = SeekerProfile::find($id);
        if (is_null($empprofile)) {
            $response = [
                'success' => false,
                'message' => 'profile not found.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'message' => 'profile retrieved successfully.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeekerProfile  $seekerprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(SeekerProfile $seekerprofile)
    {
        $seekerprofile = SeekerProfile::find($id);
        if (is_null($seekerprofile)) {
            $response = [
                'success' => false,
                'message' => 'profile not found.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'message' => 'profile retrieved successfully.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeekerProfile  $seekerprofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeekerProfile $seekerprofile)
    {
        $this->validate($request,[
            'first_name' => 'required|string',
            'other_names' => 'required|string',
            'profile_pics' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'gender' => 'required|string',
            'phone_no' => 'required|string',
            'email' => 'required|string',
            'social_media_handle' => 'required|string',
            'bio' => 'required|text',
            'technical_skills' => 'required|text',
            'soft_skills' => 'required|text',
            'volunteer_experience' => 'required|text',
            'years_of_experience' => 'required|string',
            'education' => 'required|text',
        ]);

        
        $seekerprofile = new SeekerProfile;
        $seekerprofile->first_name = $request->input('first_name');
        $seekerprofile->other_names = $request->input('other_names');
        $seekerprofile->gender = $request->input('gender');
        $seekerprofile->phone_no = $request->input('phone_no');
        $seekerprofile->email = $request->input('email');
        $seekerprofile->social_media_handle = $request->input('social_media_handle');
        $seekerprofile->bio = $request->input('bio');
        $seekerprofile->technical_skills = $request->input('technical_skills');
        $seekerprofile->soft_skills= $request->input('soft_skills');
        $seekerprofile->volunteer_experience = $request->input('volunteer_experience');
        $seekerprofile->years_of_experience = $request->input('years_of_experience');
        $seekerprofile->education = $request->input('education');
        $seekerprofile->user_id = Auth::user()->id;


        if($request->has('profile_pic')){
            $file = $request->file('profile_pic');
            $file->move(public_path(). '/storage/', $file->getClientOriginalName());
            $url = URL::to( '/storage/'. $file->getClientOriginalName());
            $seekerprofile->profile_pic = $url;
            }
        $seekerprofile->save();

        return response()->json([
            "message" => "SeekerProfile updated successfully!"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeekerProfile  $seekerprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeekerProfile $seekerprofile)
    {
        $seekerprofile = SeekerProfile::find($id);
        $seekerprofile->delete();

        return response()->json([
            "message" => "profile deleted",
        ], 202);
    }
}
