<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\EmpProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;

class EmpProfileController extends Controller
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
            'phone_no' => 'required|string',
            'email' => 'required|string',
            'social_media_handle' => 'required|string',
            'location' => 'required|string',
        ));

        
        $empprofile = new EmpProfile;
        $empprofile->first_name = $request->input('first_name');
        $empprofile->other_names = $request->input('other_names');
        $empprofile->phone_no = $request->input('phone_no');
        $empprofile->email = $request->input('email');
        $empprofile->social_media_handle = $request->input('social_media_handle');
        $empprofile->location = $request->input('location');
        $empprofile->user_id = Auth::user()->id;

        if($request->has('profile_pic')){
            $file = $request->file('profile_pic');
            $file->move(public_path(). '/storage/', $file->getClientOriginalName());
            $url = URL::to( '/storage/'. $file->getClientOriginalName());
            $empprofile->profile_pic = $url;
            }
        $empprofile->save();

        return response()->json([
            "message" => "Employer profile created successfully!"
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
     * @param  \App\EmpProfile  $empprofile
     * @return \Illuminate\Http\Response
     */
    public function show(EmpProfile $empprofile)
    {
        $empprofile = EmpProfile::find($id);
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
     * @param  \App\EmpProfile  $empprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpProfile $empprofile)
    {
        $empprofile = EmpProfile::find($id);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpProfile  $empprofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpProfile $empprofile)
    {
        $this->validate($request,[
            'first_name' => 'required|string',
            'other_names' => 'required|string',
            'profile_pics' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'phone_no' => 'required|string',
            'email' => 'required|string',
            'social_media_handle' => 'required|string',
            'location' => 'required|string',

        ]);

        $empprofile = new EmpProfile;
        $empprofile->first_name = $request->input('first_name');
        $empprofile->other_names = $request->input('other_names');
        $empprofile->phone_no = $request->input('phone_no');
        $empprofile->email = $request->input('email');
        $empprofile->social_media_handle = $request->input('social_media_handle');
        $empprofile->location = $request->input('location');
        $empprofile->user_id = Auth::user()->id;

        if($request->has('profile_pic')){
            $file = $request->file('profile_pic');
            $file->move(public_path(). '/storage/', $file->getClientOriginalName());
            $url = URL::to( '/storage/'. $file->getClientOriginalName());
            $empprofile->profile_pic = $url;
            }
        $empprofile->update();

        return response()->json([
            "message" => "employer profile updated",
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpProfile  $empprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpProfile $empprofile)
    {
        $empprofile = EmpProfile::find($id);
        $empprofile->delete();

        return response()->json([
            "message" => "profile deleted",
        ], 202);
    }
}
