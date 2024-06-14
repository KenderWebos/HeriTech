<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

/**
 * Class NoteController
 * @package App\Http\Controllers
 */
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::paginate();

        return view('note.index', compact('notes'))
            ->with('i', (request()->input('page', 1) - 1) * $notes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $note = new Note();
        return view('note.create', compact('note'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Note::$rules);

        $note = Note::create($request->all());

        return redirect()->route('notes.index')
            ->with('success', 'Note created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);

        return view('note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);

        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Note $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        request()->validate(Note::$rules);

        $note->update($request->all());

        return redirect()->route('notes.index')
            ->with('success', 'Note updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $note = Note::find($id)->delete();

        return redirect()->route('notes.index')
            ->with('success', 'Note deleted successfully');
    }
}
