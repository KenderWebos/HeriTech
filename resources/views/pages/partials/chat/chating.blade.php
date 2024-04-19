@extends('layouts.appStatic', ['class' => 'dark-mode']) <!-- Asumiendo que 'dark-mode' es la clase para el tema oscuro -->

@section('content')

<div class="container mt-4">
    <a href="{{ url('/') }}" class="btn btn-primary" onclick="">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
    </a>
</div>

<div class="d-flex justify-content-center align-items-center">
    <a href="{{ url('/') }}">
        <img class="navbar-icon text-center" src="{{ asset('images/heritech/ht_logo.png') }}" alt="some ht logo">
    </a>
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-body" id="chat-box" style="background-color: black; color: white; overflow-y: scroll; height: 300px;">
            <!-- <p>Loading chat...</p> -->
        </div>
        <div class="card-footer bg-transparent">
            <div class="input-group">
                <input type="text" class="form-control" id="message" placeholder="Escribe un mensaje..." onkeydown="handleKeyPress(event)">

                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="sendMessage()">
                        <i class="fas fa-paper-plane"></i> Enviar
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    const socket = new WebSocket('ws://localhost:3030'); // Cambia localhost y el puerto según tu configuración

    // Manejar eventos WebSocket
    socket.onopen = function() {
        console.log('Conexión WebSocket establecida');
    };

    socket.onmessage = function(event) {
        const message = event.data;

        const ip = '1.1.1.1';
        const chatBox = document.getElementById('chat-box');
        
        // chatBox.innerHTML += '<p class="mb-1">' + message + '</p>';
        chatBox.innerHTML += `
        <p class="mb-1">
            ${message}
        </p>`;
        chatBox.scrollTop = chatBox.scrollHeight; // Desplazar hacia abajo para mostrar el último mensaje
    };

    // Función para enviar mensajes
    function sendMessage() {
        const messageInput = document.getElementById('message');
        const message = messageInput.value.trim();

        const username = "{{ Auth::check() ? Auth::user()->username : 'Anónimo';}}";

        if (message !== '') {
            socket.send("@"+username+": "+message);

            const ip = '1.1.1.1';
            const chatBox = document.getElementById('chat-box');            

            chatBox.innerHTML += `         
                <span class="text-info">@${username}: </span>${message}
            </p>`;
            chatBox.scrollTop = chatBox.scrollHeight;

            messageInput.value = ''; // Limpiar el campo de entrada después de enviar el mensaje
        }
    }

    // Función para manejar el envío al presionar Enter
    function handleKeyPress(event) {
        if (event.keyCode === 13) {
            sendMessage();
        }
    }
</script>

@endsection