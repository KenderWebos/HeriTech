<?php

namespace App\Http\Controllers;

use App\Models\kNotes;
use Illuminate\Http\Request;

class kNotesController extends Controller
{

    public function index()
    {
        // $datos = kNotes::all();
        $datos = kNotes::with('user')->orderByDesc('created_at')->get();

        return view('pages/partials/knotes', compact('datos'));
    }

    public function guardar()
    {
        $datos = request()->except('_token');

        kNotes::insert($datos);

        return redirect()->route('knotes')->with('success', 'Nota guardada con exito');
    }

    public function borrar($id)
    {
        $nota = kNotes::findOrFail($id);
        $nota->delete();

        // luego enviamos un mensaje de confirmación
        return redirect()->route('knotes')->with('success', 'Nota eliminada con exito');
    }
}
