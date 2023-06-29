<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evento;

class TestingController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();    

        return view('index')->with('eventos', $eventos);
    }
}
