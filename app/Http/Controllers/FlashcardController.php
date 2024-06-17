<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flashcard;
use Illuminate\Support\Facades\Auth;

class FlashcardController extends Controller
{
    public function index()
    {
        $flashcards = Flashcard::where('user_id', Auth::id())->get();
        return view('flashcards', compact('flashcards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Flashcard::create([
            'user_id' => Auth::id(),
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('flashcards.index');
    }

    public function destroy(Flashcard $flashcard)
{
    // Verificar si el usuario autenticado es el propietario del flashcard
    if (auth()->id() !== $flashcard->user_id) {
        abort(403, 'Unauthorized action.');
    }

    // Eliminar el flashcard
    $flashcard->delete();

    // Redirigir al usuario de vuelta a la página de flashcards
    return redirect()->route('flashcards.index');
}

public function update(Request $request, Flashcard $flashcard)
{
    // Verificar si el usuario autenticado es el propietario del flashcard
    if (auth()->id() !== $flashcard->user_id) {
        abort(403, 'Unauthorized action.');
    }

    // Validar los datos recibidos del formulario
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string',
    ]);

    // Actualizar los datos del flashcard
    $flashcard->update([
        'question' => $request->question,
        'answer' => $request->answer,
    ]);

    // Redirigir al usuario de vuelta a la página de flashcards
    return redirect()->route('flashcards.index');
}
}
