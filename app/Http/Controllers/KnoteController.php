<?php

namespace App\Http\Controllers;

use App\Models\Knote;
use Illuminate\Http\Request;

/**
 * Class KnoteController
 * @package App\Http\Controllers
 */
class KnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knotes = Knote::paginate();

        return view('knote.index', compact('knotes'))
            ->with('i', (request()->input('page', 1) - 1) * $knotes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $knote = new Knote();
        return view('knote.create', compact('knote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Knote::$rules);

        $knote = Knote::create($request->all());

        return redirect()->route('knotes.index')
            ->with('success', 'Knote created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $knote = Knote::find($id);

        return view('knote.show', compact('knote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knote = Knote::find($id);

        return view('knote.edit', compact('knote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Knote $knote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knote $knote)
    {
        request()->validate(Knote::$rules);

        $knote->update($request->all());

        return redirect()->route('knotes.index')
            ->with('success', 'Knote updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $knote = Knote::find($id)->delete();

        return redirect()->route('knotes.index')
            ->with('success', 'Knote deleted successfully');
    }
}
