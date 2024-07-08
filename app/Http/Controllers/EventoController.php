<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('evento.create', compact('evento'));
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

        return view('evento.edit', compact('evento'));
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
        return view('evento.solicitudes.crear', compact('evento'));
    }
    public function ver_solicitudes(){
        $eventos = Evento::with('user')->orderBy('revisado', 'ASC')->paginate()->through(function(Evento $evento){
            if(isset($evento->user->username)){
                $evento->usuario = $evento->user->username;
            }else{
                $evento->usuario = "None";
            }
            
            return $evento;
        });
        return view('evento.solicitudes.ver', compact('eventos'))
        ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    public function accion_solicitud(Request $request){
        $evento = Evento::find($request->id_evento);
        $evento->revisado = 1;
        $accion = "rechazado";
        if($request->accion == "rechazar"){
            $evento->estado_solicitud = 0;
        }else{
            $evento->estado_solicitud = 1;
            $accion = "aceptada";
        }
        $evento->save();
        return redirect()->route('evento.ver_solicitudes')
        ->with('success', 'Solicitud de evento '.$accion);
    }
}
