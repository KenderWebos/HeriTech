<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ubicaciones;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate();

        return view('evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = new Evento();
        $ubicaciones = Ubicaciones::all();
        return view('evento.create', compact('evento', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evento::$rules);

        $evento = Evento::create($request->all());
        $evento->id_generador = auth()->user()->id;
        return redirect()->route('eventos.index')
            ->with('success', 'Evento Creado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        return view('evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        $ubicaciones = Ubicaciones::all();

        return view('evento.edit', compact('evento', 'ubicaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        request()->validate(Evento::$rules);

        $evento->update($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento deleted successfully');
    }

    public function crear_solicitud()
    {  
        $evento = new Evento();
        $ubicaciones = Ubicaciones::all();
        return view('evento.solicitudes.crear', compact('evento', 'ubicaciones'));
    }
    public function ver_solicitudes(){
        $eventos = Evento::with(['user', 'ubicacion'])->orderBy('revisado', 'ASC')->orderBy('fecha', 'DESC')->paginate()->through(function(Evento $evento){
            if(isset($evento->user->username)){
                $evento->usuario = $evento->user->username;
            }else{
                $evento->usuario = "None";
            }
            isset($evento->ubicacion->nombre)? $evento->nombre_ubicacion = $evento->ubicacion->nombre:$evento->nombre_ubicacion = "No Definido";
            return $evento;
        });
        return view('evento.solicitudes.ver', compact('eventos'))
        ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    public function accion_solicitud(Request $request){
        $evento = Evento::with('user')->find($request->id_evento);
        $evento->revisado = 1;
        $accion = "rechazado";
        if($request->accion == "rechazar"){
            $evento->estado_solicitud = 0;
        }else{
            $evento->estado_solicitud = 1;
            $accion = "aceptada";
        }
        $evento->save();
        return redirect()->route('evento.ver_solicitudes')->with('success', 'La solicitud de evento con título "'.$evento->titulo.'" ha sido '.$accion);
    }

    public function ver_eventos_mapa(){
        Carbon::setLocale('es');
        $eventos = Evento::with('ubicacion')->where('estado_solicitud', '=', true)->whereDate('fecha', '>=', Carbon::now()->toDateTimeString())->where('revisado', '=', true)->orderBy('fecha', 'desc');
        
        $ubicaciones = Ubicaciones::leftJoinSub($eventos, 'eventos_disponibles', function(JoinClause $join){
            $join->on('ubicaciones.id', '=', 'eventos_disponibles.id_ubicacion');
        })->select('ubicaciones.id', 'ubicaciones.nombre', 'ubicaciones.descripcion', 'ubicaciones.latitud', 'ubicaciones.longitud', 'ubicaciones.icono_primario', 'ubicaciones.icono_secundario', 'ubicaciones.icono_terciario', 'ubicaciones.codigo', db::raw('count(eventos_disponibles.id) as cantidad_eventos'))
        ->groupBy('ubicaciones.id', 'ubicaciones.nombre', 'ubicaciones.descripcion', 'ubicaciones.latitud', 'ubicaciones.longitud', 'ubicaciones.icono_primario','ubicaciones.icono_secundario', 'ubicaciones.icono_terciario', 'ubicaciones.codigo')->orderBy('cantidad_eventos', 'DESC')
        ->get()->map(function(Ubicaciones $ubicacion){
            $ubicacion->latitud = floatval($ubicacion->latitud);
            $ubicacion->longitud = floatval($ubicacion->longitud);
            return $ubicacion;
        });
        $eventos = $eventos->get()->map(function(Evento $evento){
            $dt = Carbon::parse($evento->fecha);
            $evento->fecha = $dt->translatedFormat('d \\de F \\de\\l Y');
            $evento->hora = $dt->translatedFormat('h:i A');
            return $evento;
        });
        $gmap = env('GOOGLE_MAPS_API_KEY', false);
        return view('maptesting.maptesting', compact('eventos', 'gmap', 'ubicaciones'));
    }
}
