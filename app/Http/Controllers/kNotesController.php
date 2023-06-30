<?php

namespace App\Http\Controllers;

use App\Models\kNotes;
use Illuminate\Http\Request;

class kNotesController extends Controller
{

    public function index()
    {
        // $datos = kNotes::all();
        $datos = kNotes::with('user')->get();

        return view('pages/partials/knotes', compact('datos'));
    }

    public function guardar()
    {
        $datos = request()->except('_token');

        kNotes::insert($datos);

        return redirect()->route('/');
    }
}
