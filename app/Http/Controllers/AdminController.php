<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs = Job::paginate(2);
        return view('admin',compact('jobs'));
    }
}
