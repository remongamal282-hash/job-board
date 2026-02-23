<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobcontroller extends Controller
{
    //function to show the job listing page
    public function index()
    {
        return view('job/index');
    }
}
