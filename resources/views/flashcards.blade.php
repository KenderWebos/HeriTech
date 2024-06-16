@extends('layouts.app')
<div class="container">
    <div class="add-flashcard-con">
        <button id="add-flashcard">Add Flashcard</button>
    </div>

    <!-- Display Card of Question And Answers Here -->
    <div id="card-con">
        <div class="card-list-container">
            @foreach($flashcards as $flashcard)
                <div class="card">
                    <p class="question-div">{{ $flashcard->question }}</p>
                    <p class="answer-div hide">{{ $flashcard->answer }}</p>
                    <a href="#" class="show-hide-btn">Show/Hide</a>
                    <div class="buttons-con">
                        <button class="edit" onclick="editFlashcard({{ $flashcard->id }})">
                            <i class="fas fa-pen-to-square"></i>
                        </button>
                        <form method="POST" action="{{ route('flashcards.destroy', $flashcard) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Input form for users to fill question and answer -->
<div class="question-container hide" id="add-question-card">
    <h2>Add Flashcard</h2>
    <div class="wrapper">
        <!-- Error message -->
        <div class="error-con">
            <span class="hide" id="error">Input fields cannot be empty!</span>
        </div>
        <!-- Close Button -->
        <i class="fas fa-times" id="close-btn"></i>
    </div>

    <form id="flashcard-form" method="POST" action="{{ route('flashcards.store') }}">
        @csrf
        <label for="question">Question:</label>
        <textarea class="input" id="question" name="question" placeholder="Type the question here..." rows="2"></textarea>
        <label for="answer">Answer:</label>
        <textarea class="input" id="answer" name="answer" rows="4" placeholder="Type the answer here..."></textarea>
        <button type="submit" id="save-btn">Save</button>
    </form>
</div>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    .add-flashcard-con {
        margin-bottom: 20px;
        text-align: right;
    }

    .card-list-container {
        display: grid;
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .question-div {
        font-weight: bold;
    }

    .answer-div {
        display: none;
    }

    .show-hide-btn {
        color: blue;
        cursor: pointer;
        font-size: 14px;
    }

    .buttons-con {
        margin-top: 10px;
        display: flex;
        justify-content: flex-end;
    }

    .edit,
    .delete {
        background-color: transparent;
        border: none;
        cursor: pointer;
        margin-left: 10px;
    }

    .edit:hover,
    .delete:hover {
        color: #ff0000;
    }

    .input {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .error-con {
        color: red;
        text-align: center;
        margin-bottom: 10px;
    }

    .hide {
        display: none;
    }

    .question-container {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    #close-btn {
        cursor: pointer;
        float: right;
    }
</style>

