@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $evento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $evento->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $evento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $evento->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $evento->ubicacion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $evento->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $evento->longitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
