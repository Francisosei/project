<?php

namespace project\Http\Controllers;

use Illuminate\Http\Request;

use project\Http\Requests;

class DashboardController extends Controller
{
    
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
        return view('dashboard');
    }
}
