<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $user -> hasRole('Admin');
//        dd($user -> hasRole('Sketcher'));
//        dd($user -> hasRole('Designer'));
//        dd($user -> hasRole('Client'));
//        dd($user -> can('Create User'));

        return view('home');
    }
}
