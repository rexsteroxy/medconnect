<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


   
    public function create()
    {
        
        return view('jobs.job');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "job_title"=>"required",
            "description"=>'required',
            "requirement"=>'required',
            "location"=>'required',
            "price"=>"required"   
        ]);

        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->description = $request->input('description');
        $job->requirement= $request->input('requirement');
        $job->location = $request->input('location');
        $job->price= $request->input('price');
        $job->save();

        return redirect('/admin')->with('response','Job uploaded  successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
