@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="container-fluid h-100 d-flex justify-content-center align-items-center">
    <div class="card text-center">
        <div class="card-body">
            <a class="navbar-brand" href="/search">
                <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt="">
            </a>
            <form class="form-inline justify-content-center mt-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar en HeriTech" aria-label="Buscar">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
