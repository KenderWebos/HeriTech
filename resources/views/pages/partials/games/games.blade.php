@extends('layouts.appStatic', ['class' => ''])

@section('content')

<div class="container mt-4">
    <a href="#" class="btn btn-primary" onclick="history.go(-1)">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
    </a>
</div>

<div class="container p-5">
    <h1 class="text-center mb-4">Juegos hechos en Unity</h1>

    <p class="text-center">
        Explora nuestro portafolio de juegos desarrollados en el motor gráfico <b><a target="_blank" href="https://unity.com/es">Unity</a></b>.
    </p>

    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="row">

                @foreach ($games as $game)

                <div class="col-md-4 mb-4">
                    <a target="_blank" href="{{ $game->link }}" class="card-link text-center text-decoration-none">
                        <div class="card p-3 border-0 shadow">
                            <img class="game-image" src="{{ $game->mainImage }}" alt="some icon image">
                            <i class="fas fa-gamepad fa-3x"></i>
                            <div class="card-body mt-3">
                                <h5 class="card-title">{{ $game->name}}</h5>
                                <p class="card-text">{{ $game->description}}
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>

@endsection