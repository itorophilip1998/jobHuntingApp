<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $this->validate([$request,
        'first_name' => 'required|string',
        'other_names' => 'required|string',
        'profile_pics' => 'required|string',
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

        
        $profile = new Profile;
        $profile->first_name = $request->input('first_name');
        $profile->other_names = $request->input('other_names');
        $profile->profile_pic = $request->input('profile_pic');
        $profile->gender = $request->input('gender');
        $profile->phone_no = $request->input('phone_no');
        $profile->email = $request->input('email');
        $profile->social_media_handle = $request->input('social_media_handle');
        $profile->bio = $request->input('bio');
        $profile->technical_skills = $request->input('technical_skills');
        $profile->soft_skills= $request->input('soft_skills');
        $profile->volunteer_experience = $request->input('volunteer_experience');
        $profile->years_of_experience = $request->input('years_of_experience');
        $profile->education = $request->input('education');
        $profile->save();

        return response()->json([
            "message" => "Profile created successfully!"
        ], 201);
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
