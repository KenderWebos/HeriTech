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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();

        // if($user->hasRole('admin')){
        //     return view('pages.dashboard');
        // }

        return view('pages.dashboard', compact('user'));
    }
}
