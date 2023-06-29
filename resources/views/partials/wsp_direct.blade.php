@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div>
    <div style="display: block;">
        <center>
            <div style="height:500px; background-color: black; color:white">

                <br>
                <p> > console </p>
                <hr>
                <p> Puedes hablar directamente con un numero de wsp sin tener que agregarlo. </p>
                <hr>
                <p style="display: inline">+569</p>
                <input style="border-radius: 30px" id="wspDirectInput" type="text">
                <button onclick="wspDirect()" type="button" class="btn btn-success"> Contactar </button>
            </div>
        </center>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection

<script>
    function wspDirect() {
        var wspDirectInput = document.getElementById("wspDirectInput").value;
        window.open("https://api.whatsapp.com/send?phone=569" + wspDirectInput + "&text=Hola%20soy%20" + wspDirectInput + "%20y%20quiero%20contactarme%20con%20ustedes%20para%20saber%20mas%20sobre%20sus%20servicios", "_blank");
    }
</script>