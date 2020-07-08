<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
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
        $jobs = Job::all()->paginate(10);
        // $jobs = DB::table('jobs')->paginate(10);

        $response = [
            'success' => true,
            'jobs' => $jobs,
            'message' => 'jobs retrieved successfully!'
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'job_title' => 'required|string',
            'company' => 'required|string',
            'job_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|text',
            'requirements' => 'required|string',
            'salary_range' => 'required|string',

        ]);

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->company = $request->input('company');
        $job->job_type = $request->input('job_type');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->requirements = $request->input('requirements');
        $job->salary_range = $request->input('salary_range');
        $job->save();

        return response()->json([
            "message" => "new job created",
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
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job, $id)
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
            'message' => 'Job retrieved successfully.'
        ];

        return response()->json($response, 200);
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
    public function update(Request $request, Job $job)
    {
        $this->validate($request,[
            'job_title' => 'required|string',
            'company' => 'required|string',
            'job_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|text',
            'requirements' => 'required|string',
            'salary_range' => 'required|string',

        ]);

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->company = $request->input('company');
        $job->job_type = $request->input('job_type');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->requirements = $request->input('requirements');
        $job->salary_range = $request->input('salary_range');
        $job->update();

        return response()->json([
            "message" => "new job created",
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job, $id)
    {
        $job = Job::find($id);
        $job->delete();

        return response()->json([
            "message" => "job deleted",
        ], 202);
    }
}
