@extends('layouts.app')

@section('template_title')
    Reservas
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Reservas'])

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Lista de Reservas</h1>
        </div>
        <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Crear Nueva Reserva</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Mesa</th>
                            <th>Materia</th>
                            <th>Cliente</th>
                            <th>Fecha y Hora</th>
                            <th>Número de Personas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservas as $reserva)
                        <tr>
                            <td>{{ $reserva->id }}</td>
                            
                            <td>{{ $reserva->mesa->numero }}</td>
                            <td>{{ $reserva->mesa->materia }}</td>
                            <td>{{ $reserva->cliente_nombre }}</td>
                            <td>{{ $reserva->fecha_hora }}</td>
                            <td>{{ $reserva->num_personas }}</td>
                            <td>
                                <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
