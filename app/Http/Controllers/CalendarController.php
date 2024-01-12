<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evento;
use \App\Models\TipoEvento;

class CalendarController extends Controller
{
    public function index()
    {
        $eventos = Evento::orderBy('fecha')->get();

        $tiposEventos = TipoEvento::all();

        return view('pages/partials/kcalendar', compact('eventos', 'tiposEventos'));
    }

    public function guardar()
    {
        $datos = request()->except('_token');

        Evento::insert($datos);

        return redirect()->route('kcalendar')->with('success', 'Nota guardada con exito');
    }

    public function borrar($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('kcalendar')->with('success', 'Evento eliminado con exito');
    }
}
