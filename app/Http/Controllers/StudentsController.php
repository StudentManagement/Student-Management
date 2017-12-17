<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
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
        public function dashboard()
    {
        return view('students.dashboard');
    }
        public function profile()
    {
        return view('students.profile');
    }
        public function media()
    {
        return view('students.media');
    }
}
