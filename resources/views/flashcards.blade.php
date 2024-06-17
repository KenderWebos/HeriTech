@extends('layouts.app')

@section('template_title')
    Flashcards
@endsection

@section('content')

    @include('layouts.navbars.auth.topnav', ['title' => 'Flashcards'])

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Lista de Flashcards
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                <button id="add-flashcard" class="btn btn-primary" data-toggle="modal" data-target="#addFlashcardModal">Agregar Flashcard</button>
                </div>

                <!-- Display Card of Question And Answers Here -->
                <div id="card-con">
                    <div class="card-list-container">
                        @foreach($flashcards as $flashcard)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $flashcard->question }}</h5>
                                <p class="card-text answer-div" id="answer-{{ $flashcard->id }}" style="color: {{ $flashcard->answer_visible ? 'inherit' : 'white' }}">{{ $flashcard->answer }}</p>
                                <a href="#" class="btn btn-info show-hide-btn" data-answer-id="{{ $flashcard->id }}">Mostrar/Ocultar</a>
                                <div class="buttons-con">
                                <button class="btn btn-warning edit" onclick="editFlashcard({{ $flashcard->id }}, '{{ $flashcard->question }}', '{{ $flashcard->answer }}')" data-toggle="modal" data-target="#editFlashcardModal">
    <i class="fas fa-edit"></i> Editar
</button>

                                    

                                    <form method="POST" action="{{ route('flashcards.destroy', $flashcard) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete">
                                            <i class="fas fa-trash-alt"></i> Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Input form for users to fill question and answer -->
        <div class="question-container hide mt-4" id="add-question-card">
            <h2 id="form-title">Agregar Flashcard</h2>
            <div class="wrapper">
                <!-- Error message -->
                <div class="error-con">
                    <span class="hide" id="error">¡Los campos no pueden estar vacíos!</span>
                </div>
                <!-- Close Button -->
                <i class="fas fa-times" id="close-btn"></i>
            </div>

            <form id="flashcard-form" method="POST" action="{{ route('flashcards.store') }}">
                @csrf
                <input type="hidden" id="flashcard-id" name="id">
                <div class="form-group">
                    <label for="question">Pregunta:</label>
                    <textarea class="form-control" id="question" name="question"
                        placeholder="Escribe la pregunta aquí..." rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="answer">Respuesta:</label>
                    <textarea class="form-control" id="answer" name="answer" rows="4"
                        placeholder="Escribe la respuesta aquí..."></textarea>
                </div>
                <button type="submit" class="btn btn-success" id="save-btn">Guardar</button>
            </form>
        </div>

    </div>

    <div class="modal fade" id="addFlashcardModal" tabindex="-1" role="dialog" aria-labelledby="addFlashcardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFlashcardModalLabel">Agregar Flashcard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="flashcard-form" method="POST" action="{{ route('flashcards.store') }}">
                        @csrf
                        <input type="hidden" id="flashcard-id" name="id">
                        <div class="form-group">
                            <label for="question">Pregunta:</label>
                            <textarea class="form-control" id="question" name="question" placeholder="Escribe la pregunta aquí..." rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="answer">Respuesta:</label>
                            <textarea class="form-control" id="answer" name="answer" rows="4" placeholder="Escribe la respuesta aquí..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" id="save-btn">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editFlashcardModal" tabindex="-1" role="dialog" aria-labelledby="editFlashcardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFlashcardModalLabel">Editar Flashcard</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="edit-flashcard-form" method="POST" action="{{ route('flashcards.update', ['flashcard' => '__id__']) }}">
    @csrf
    @method('PUT')
    <input type="hidden" id="edit-flashcard-id" name="id">
    <div class="form-group">
        <label for="edit-question">Pregunta:</label>
        <textarea class="form-control" id="edit-question" name="question" placeholder="Escribe la pregunta aquí..." rows="2"></textarea>
    </div>
    <div class="form-group">
        <label for="edit-answer">Respuesta:</label>
        <textarea class="form-control" id="edit-answer" name="answer" rows="4" placeholder="Escribe la respuesta aquí..."></textarea>
    </div>
    <button type="submit" class="btn btn-success" id="update-btn">Actualizar</button>
</form>

            </div>
        </div>
    </div>
</div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addQuestionCard = document.getElementById("add-question-card");
            const addQuestion = document.getElementById("add-flashcard");
            const closeBtn = document.getElementById("close-btn");

            // Mostrar/Ocultar respuestas
            document.querySelectorAll('.show-hide-btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Botón Mostrar/Ocultar clicado');
                    const answerDivId = button.getAttribute('data-answer-id');
                    const answerDiv = document.getElementById(`answer-${answerDivId}`);
                    answerDiv.style.color = answerDiv.style.color === 'white' ? 'inherit' : 'white';
                });
            });

            addQuestion.addEventListener("click", () => {
                addQuestionCard.classList.remove("hide");
            });

            closeBtn.addEventListener("click", () => {
                addQuestionCard.classList.add("hide");
            });
        });

        function editFlashcard(id, question, answer) {
    const editFlashcardModal = $('#editFlashcardModal');
    const form = document.getElementById('edit-flashcard-form');
    const flashcardIdInput = document.getElementById('edit-flashcard-id');
    const questionInput = document.getElementById('edit-question');
    const answerInput = document.getElementById('edit-answer');

    flashcardIdInput.value = id;
    questionInput.value = question;
    answerInput.value = answer;

    form.action = form.action.replace('__id__', id); // Reemplazar '__id__' con el id del flashcard
    editFlashcardModal.modal('show'); // Utilizar jQuery para abrir el modal
}

    </script>

@endsection
