<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Horario;

class MesaController extends Controller
{
   
    public function index()
    {
        $mesas = Mesa::paginate(10);
        return view('mesas.index', compact('mesas'));
    }

    public function create()
    {
        
        return view('mesas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|string|unique:mesas',
            'capacidad' => 'required|integer',
            'materia' => 'required|string',
            
        ]);

        $mesa = Mesa::create($request->all());

        // Generar horarios para los próximos 7 días
        $horas = ['13:00:00', '15:00:00'];
        for ($i = 0; $i < 7; $i++) {
            $fecha = Carbon::now()->addDays($i)->toDateString();
            foreach ($horas as $hora) {
                Horario::create([
                    'mesa_id' => $mesa->id,
                    'fecha' => $fecha,
                    'hora' => $hora,
                ]);
            }
        }

        return redirect()->route('mesas.index')->with('success', 'Mesa creada correctamente.');
    }

    public function edit(Mesa $mesa)
    {
        
        return view('mesas.edit', compact('mesa'));
    }

    public function update(Request $request, Mesa $mesa)
    {
        $request->validate([
            'numero' => 'required|string|unique:mesas,numero,'.$mesa->id,
            'capacidad' => 'required|integer',
            'materia' => 'required|string',
        ]);

        $mesa->update($request->all());

        return redirect()->route('mesas.index')->with('success', 'Mesa actualizada correctamente.');
    }

    public function destroy(Mesa $mesa)
    {
        $mesa->delete();

        return redirect()->route('mesas.index')->with('success', 'Mesa eliminada correctamente.');
    }
}
