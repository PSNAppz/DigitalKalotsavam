<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
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
        return view('home');
    }

    /**
     * Show the Team Management Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $stud = Student::where('house',2)->get();
        return view('manage')->withStud($stud);
    }
}
