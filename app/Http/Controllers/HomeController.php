<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\kNotes;
use App\Models\User;
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

        // Obtener la fecha de hoy
        $today = Carbon::today();
        // Obtener la fecha de ayer
        $fecha_ayer = Carbon::yesterday();
        // Obtener la fecha de un mes desde ayer
        $fecha_un_mes_despues = $fecha_ayer->copy()->addMonth();

        // Consulta para obtener los eventos en el rango de fechas deseado
        $events = Evento::where('fecha', '>', $fecha_ayer)
            ->where('fecha', '<=', $fecha_un_mes_despues)
            ->orderBy('fecha', 'asc')
            ->get();

        foreach ($events as $event) {
            $fecha_evento = Carbon::parse($event->fecha);

            // Calcular los días restantes para el evento
            $days_left = $today->diffInDays($fecha_evento, false);

            # hacemos que el titulo de los eventos tenga un maximo largo de 20 caracteres
            $event->descripcion = substr($event->descripcion, 0, 20)."...";

            if ($days_left === 0) {
                $event->days_left = 'Hoy';
            } elseif ($days_left === 1) {
                $event->days_left = 'Mañana';
            } elseif ($days_left > 1) {
                $event->days_left = $days_left . ' días restantes';
            } elseif ($days_left < 0) {
                $event->days_left = 'Evento pasado';
            }

            $event->days_left = $event->days_left;

            $fecha = $fecha_evento->locale('es');
            $fecha_formateada = $fecha->isoFormat('dddd D/MM');
            $event->fecha = $fecha_formateada;
        }

        // Contar la cantidad de eventos en ese rango
        $events_count = $events->count();

        $current_time = Carbon::now()->format('h:i A');

        $data = get_defined_vars();

        //NOTAS
        // $datos = kNotes::with('user')->orderByDesc('created_at')->get();
        // nuevas notas *

        $days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

        //Para obtener los eventos de la semana

        $start_of_week = Carbon::now()->startOfWeek();
        $end_of_week = Carbon::now()->endOfWeek();

        // Consulta para obtener los eventos en el rango de la semana actual
        $events_this_week = Evento::where('fecha', '>=', $start_of_week)
            ->where('fecha', '<=', $end_of_week)
            ->orderBy('fecha', 'asc')
            ->get();

        $grouped_events = $events_this_week->groupBy(function ($event) {
            return Carbon::parse($event->fecha)->toDateString();
        });

        $userCount = User::count();

        return view('pages.dashboard', compact('data', 'events', 'events_count', 'current_date', 'current_time', 'days', 'grouped_events', 'userCount'));
        // return kNotes::all();
    }
}
