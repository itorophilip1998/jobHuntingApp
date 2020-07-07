<?php

namespace App\Http\Controllers;

use App\CV;
use Illuminate\Http\Request;

class CVController extends Controller
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
        'last_name' => 'required|string',
        'phone_no' => 'required|string',
        'email' => 'required|string',
        'social_media_handle' => 'required|string',
        'bio' => 'required|text',
        'technical_skills' => 'required|text',
        'soft_skills' => 'required|text',
        'volunteer_experience' => 'required|text',
        'education' => 'required|text',
        ]);

        
        $cv = new CV;
        $cv->first_name = $request->input('first_name');
        $cv->last_name = $request->input('last_name');
        $cv->phone_no = $request->input('phone_no');
        $cv->email = $request->input('email');
        $cv->social_media_handle = $request->input('social_media_handle');
        $cv->bio = $request->input('bio');
        $cv->technical_skills = $request->input('technical_skills');
        $cv->soft_skills= $request->input('soft_skills');
        $cv->volunteer_experience = $request->input('volunteer_experience');
        $cv->education = $request->input('education');
        $cv->save();

        return response()->json([
            "message" => "cv created successfully!"
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
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CV  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CV $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $cv)
    {
        //
    }
}
