<?php

namespace App\Http\Controllers;

use App\Models\TipoModulo;
use Illuminate\Http\Request;

/**
 * Class TipoModuloController
 * @package App\Http\Controllers
 */
class TipoModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoModulos = TipoModulo::paginate();

        return view('tipo-modulo.index', compact('tipoModulos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoModulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoModulo = new TipoModulo();
        return view('tipo-modulo.create', compact('tipoModulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoModulo::$rules);

        $tipoModulo = TipoModulo::create($request->all());

        return redirect()->route('tipo-modulos.index')
            ->with('success', 'TipoModulo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoModulo = TipoModulo::find($id);

        return view('tipo-modulo.show', compact('tipoModulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoModulo = TipoModulo::find($id);

        return view('tipo-modulo.edit', compact('tipoModulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoModulo $tipoModulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoModulo $tipoModulo)
    {
        request()->validate(TipoModulo::$rules);

        $tipoModulo->update($request->all());

        return redirect()->route('tipo-modulos.index')
            ->with('success', 'TipoModulo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoModulo = TipoModulo::find($id)->delete();

        return redirect()->route('tipo-modulos.index')
            ->with('success', 'TipoModulo deleted successfully');
    }
}
