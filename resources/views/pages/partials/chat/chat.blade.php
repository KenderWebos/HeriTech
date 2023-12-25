@extends('layouts.appStatic', ['class' => ''])

@section('content')

<div class="container mt-4">
    <a href="#" class="btn btn-primary" onclick="history.go(-1)">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
    </a>
</div>

<div class="chat-container">

    <div class="container mt-5">
        <div class="chat-container border rounded shadow-sm p-3 bg-white">
            <div class="chat-header text-white p-2 rounded-top">
                <h2>Chat en tiempo real</h2>
            </div>

            <div class="chat-body border-bottom" id="chatBody">
                <!-- Aquí se mostrarán los mensajes -->
            </div>

            <div class="input-container d-flex">
                <input type="text" class="form-control me-2" id="messageInput" placeholder="Escribe un mensaje...">
                <button class="btn btn-dark" id="sendMessage">Enviar</button>
            </div>
        </div>
    </div>

</div>

<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>

@endsection