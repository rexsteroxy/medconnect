<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
    public function getJobListingPage()
    {
        return view('joblisting');
    }
    public function getAboutPage()
    {
        return view('about');
    }
    public function getContactPage()
    {
        return view('contact');
    }
    public function getAdminDashBoard()
    {
        return view('admin.index');
    }
    
}
