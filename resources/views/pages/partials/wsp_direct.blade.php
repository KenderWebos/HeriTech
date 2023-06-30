@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <p class="card-title">Consola de WhatsApp Directo</p>
                    <hr>
                    <p class="card-text">Puedes hablar directamente con un número de WhatsApp sin tener que agregarlo.</p>
                    <hr>

                    <div class="input-group">
                        <span class="input-group-text">+569</span>
                        <input type="number" maxlength="8" class="form-control" id="wspDirectInput" placeholder="Ingresa el número de WhatsApp" min="0" max="99999999" oninput="validity.valid||(value='');">
                        <button onclick="wspDirect()" type="button" class="btn btn-success">Contactar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function wspDirect() {
        var wspDirectInput = document.getElementById("wspDirectInput").value;
        window.open("https://api.whatsapp.com/send?phone=569" + wspDirectInput + "&text=Hola%20soy%20" + wspDirectInput + "%20y%20quiero%20contactarme%20con%20ustedes%20para%20saber%20más%20sobre%20sus%20servicios", "_blank");
    }
</script>