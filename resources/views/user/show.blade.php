@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}">Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $user->username }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $user->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $user->address }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $user->city }}
                        </div>
                        <div class="form-group">
                            <strong>País:</strong>
                            {{ $user->country }}
                        </div>
                        <div class="form-group">
                            <strong>Postal:</strong>
                            {{ $user->postal }}
                        </div>
                        <div class="form-group">
                            <strong>Acerca:</strong>
                            {{ $user->about }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
