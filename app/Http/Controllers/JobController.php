<?php

namespace App\Http\Controllers;

use App\Job;
use Input;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $jobs = Job::latest()->paginate(10);
        return response()->json($jobs, 200);
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
            'job_title' => 'required|string',
            'company' => 'required|string',
            'job_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|text',
            'requirements' => 'required|string',
            'salary_range' => 'required|string',
            'company_email' => 'required|string',

        ));

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->company = $request->input('company');
        $job->job_type = $request->input('job_type');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->requirements = $request->input('requirements');
        $job->salary_range = $request->input('salary_range');
        $job->company_email = $request->input('company_email');
        $job->user_id = Auth::user()->id;
        $job->save();

        return response()->json([
            "message" => "job updated",
            $job
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
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return response()->json($job, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $job = Job::find($id);
        if (is_null($job)) {
            $response = [
                'success' => false,
                'message' => 'Job not found.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'message' => 'job retrieved successfully.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$job)
    {
        $validator = Validator::make(request()->all(),
        array(
            'job_title' => 'required|string',
            'company' => 'required|string',
            'job_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|text',
            'requirements' => 'required|string',
            'salary_range' => 'required|string',
            'company_email' => 'required|string',

        ));

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->company = $request->input('company');
        $job->job_type = $request->input('job_type');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->requirements = $request->input('requirements');
        $job->salary_range = $request->input('salary_range');
        $job->company_email = $request->input('company_email');
        $job->user_id = Auth::user()->id;

        $job->save();

        return response()->json([
            "message" => "job updated",
            $job
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return response()->json([
            "message" => "job deleted",
        ], 200);
    }
}
