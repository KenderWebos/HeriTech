<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

/**
 * Class DataController
 * @package App\Http\Controllers
 */
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::paginate();

        return view('data.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * $data->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Data();
        return view('data.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Data::$rules);

        $data = Data::create($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data::find($id);

        return view('data.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data::find($id);

        return view('data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Data $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        request()->validate(Data::$rules);

        $data->update($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Data updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $data = Data::find($id)->delete();

        return redirect()->route('data.index')
            ->with('success', 'Data deleted successfully');
    }
}
