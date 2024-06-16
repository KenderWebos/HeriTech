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
        $this->authorize('delete', $flashcard);
        $flashcard->delete();

        return redirect()->route('flashcards.index');
    }

    public function update(Request $request, Flashcard $flashcard)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $this->authorize('update', $flashcard);

        $flashcard->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('flashcards.index');
    }
}
