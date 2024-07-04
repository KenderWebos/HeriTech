<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Reserva;
use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
{
    // Obtener todas las mesas
    $mesas = Mesa::all();

    // Obtener horarios disponibles que no están reservados a partir de hoy
    $horarios = Horario::where('reservado', false)
                       ->where('fecha', '>=', Carbon::today()->format('Y-m-d'))
                       ->get();

    // Obtener materias disponibles
    $materias = Mesa::distinct()->pluck('materia');

    // Agrupar capacidades por fecha y materia para mostrar en la vista
    $capacidades = [];
    foreach ($horarios as $horario) {
        if (!isset($capacidades[$horario->fecha])) {
            $capacidades[$horario->fecha] = [];
        }

        // Verificar que la materia de la mesa coincida con la materia seleccionada
        if ($horario->mesa->materia == request()->get('materia')) {
            $capacidades[$horario->fecha][$horario->mesa_id] = $horario->mesa->capacidad;
        }
    }

    $user = Auth::user();

    return view('reservas.create', compact('materias', 'mesas', 'horarios', 'capacidades', 'user'));
}


    public function store(Request $request)
    {
        $request->validate([
            'horario_id' => 'required|exists:horarios,id',
            'cliente_nombre' => 'required|string|max:255',
            'cliente_email' => 'required|email|max:255',
            'cliente_telefono' => 'required|string|max:15',
            'num_personas' => 'required|integer|min:1',
        ]);

        $horario = Horario::findOrFail($request->horario_id);
        $horario->reservado = true;
        $horario->save();

        Reserva::create([
            'mesa_id' => $horario->mesa_id,
            'cliente_nombre' => $request->cliente_nombre,
            'cliente_email' => $request->cliente_email,
            'cliente_telefono' => $request->cliente_telefono,
            'fecha_hora' => "{$horario->fecha} {$horario->hora}",
            'num_personas' => $request->num_personas,
        ]);

        return redirect()->back()->with('success', 'Reserva creada con éxito');
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $mesas = Mesa::all();
        return view('reservas.edit', compact('reserva', 'mesas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mesa_id' => 'required|exists:mesas,id',
            'cliente_nombre' => 'required|string|max:255',
            'cliente_email' => 'required|email|max:255',
            'cliente_telefono' => 'required|string|max:15',
            'fecha_hora' => 'required|date',
            'num_personas' => 'required|integer|min:1',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada con éxito');
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada con éxito');
    }

    public function rechazar($id)
    {
        $reserva = Reserva::findOrFail($id);

        // Obtener el horario asociado a la reserva
        $horario = Horario::where('mesa_id', $reserva->mesa_id)
                          ->where('fecha', Carbon::parse($reserva->fecha_hora)->format('Y-m-d'))
                          ->firstOrFail();

        // Cambiar el estado de reservado a 0 en Horario
        $horario->reservado = false;
        $horario->save();

        // Eliminar la reserva
        $reserva->delete();

        // Redirigir a la página de user-actions
        return redirect()->route('user-actions')->with('success', 'Reserva rechazada con éxito');
    }
}
