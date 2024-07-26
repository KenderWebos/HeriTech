@extends('layouts.app', ["title_html" => "Ranking", "title"=>'Ranking', 'breadcrumbs'=>[["nombre"=>"Ranking", "ruta"=>"top"]]])
@section('content')

<div class="card">
    <div class="card-body">
        <div class="container my-5">
            <h2 class="text-center mb-4">TOP Educadores 🥇</h2>
            <small><pre>
                TOP Educadores:
                Seccion que lista a los estudiantes que a nuestro criterio mas han aportado a la comunidad mimateria.cl
            </pre></small>
            <div class="row">
                @foreach($users as $user)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- <img src="{{ "Foto" }}" class="card-img-top" alt="Imagen de {{ $user->username }}"> -->

                        <div class="card-body">

                            <div class="row">
                                <div class="col-3">
                                    <div class="avatar avatar-xl position-relative">
                                        <img src="https://ui-avatars.com/api/?name={{$user->username}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                                    </div>
                                </div>

                                <div class="col-9">
                                    <h5 class="card-title">{{ $user->username }}</h5>
                                    <p class="card-text">{{ $user->email }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Puntos: {{ 8 }}</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection