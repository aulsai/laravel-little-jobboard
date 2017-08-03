<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Job;

class JobNewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('job_new');
    }

    public function create(Request $request)
    {        

        $data = $request->all();

        // Auto redirect
        Validator::make($data, [
            'title' => 'required|string|max:150',
            'description' => 'required|string'
        ])->validate();        

        $job = new Job;
        $job->title = $data['title'];
        $job->description = $data['description'];
        $job->save();

        return redirect()->route('job');
    }
}
