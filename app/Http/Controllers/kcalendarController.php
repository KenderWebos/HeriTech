<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kcalendarController extends Controller
{
    public function index()
    {
        return view('partials/kcalendar');
    }
}
