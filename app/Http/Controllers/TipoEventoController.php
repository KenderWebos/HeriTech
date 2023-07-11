<?php

namespace App\Http\Controllers;

use App\Models\TipoEvento;
use Illuminate\Http\Request;

/**
 * Class TipoEventoController
 * @package App\Http\Controllers
 */
class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoEventos = TipoEvento::paginate();

        return view('tipo-evento.index', compact('tipoEventos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoEventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEvento = new TipoEvento();
        return view('tipo-evento.create', compact('tipoEvento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoEvento::$rules);

        $tipoEvento = TipoEvento::create($request->all());

        return redirect()->route('tipo-eventos.index')
            ->with('success', 'TipoEvento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoEvento = TipoEvento::find($id);

        return view('tipo-evento.show', compact('tipoEvento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoEvento = TipoEvento::find($id);

        return view('tipo-evento.edit', compact('tipoEvento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoEvento $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEvento $tipoEvento)
    {
        request()->validate(TipoEvento::$rules);

        $tipoEvento->update($request->all());

        return redirect()->route('tipo-eventos.index')
            ->with('success', 'TipoEvento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoEvento = TipoEvento::find($id)->delete();

        return redirect()->route('tipo-eventos.index')
            ->with('success', 'TipoEvento deleted successfully');
    }
}
