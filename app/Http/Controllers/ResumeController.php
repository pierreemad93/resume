<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SocialLink;

class ResumeController extends Controller
{
    //
    public function index(){
        $socialLinks = SocialLink::all();
        $jobs = Job::all();
        return view('welcome' , compact('socialLinks' , 'jobs'));
    }
}
