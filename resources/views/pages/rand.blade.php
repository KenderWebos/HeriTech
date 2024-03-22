@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand" href="#"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>

            <center>
                <div class="card">
                    <div class="card-head">
                        <h1 id="number">Null</h1> <!-- Se añade un ID al elemento h1 para actualizar su contenido -->
                    </div>
                </div>
            </center>

            <!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>

</div>