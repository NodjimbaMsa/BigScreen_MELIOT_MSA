<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  
    // public function masterPage()
    // {
    //     return view('layout/master');
    // }
    public function questAdmin()
    {
        return view('questionsTable');
    }
  
    public function resultAdmin()
    {
        return view('resultAdmin');
    }
  
}
