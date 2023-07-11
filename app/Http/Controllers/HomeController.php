<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Carbon\Carbon;

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
        $current_date = date('d-m-y');

        $events = Evento::all();
        $events_count = Evento::all()->count();

        $current_time = Carbon::now()->format('h:i A');

        $data = get_defined_vars();

        return view('pages.dashboard', $data);
    }
}
