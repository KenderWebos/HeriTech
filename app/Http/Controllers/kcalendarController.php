<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evento;

class kCalendarController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();

        return view('pages/partials/kcalendar')->with('eventos', $eventos)->with('success', 'Evento canonico desbloqueado');
    }
}
