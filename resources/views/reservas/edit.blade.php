<!-- resources/views/reservas/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reserva</h1>
    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="mesa_id">Mesa</label>
            <select name="mesa_id" id="mesa_id" class="form-control">
                @foreach($mesas as $mesa)
                <option value="{{ $mesa->id }}" {{ $reserva->mesa_id == $mesa->id ? 'selected' : '' }}>{{ $mesa->numero }} (Capacidad: {{ $mesa->capacidad }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cliente_nombre">Nombre del Cliente</label>
            <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" value="{{ $reserva->cliente_nombre }}" required>
        </div>
        <div class="form-group">
            <label for="cliente_email">Email del Cliente</label>
            <input type="email" name="cliente_email" id="cliente_email" class="form-control" value="{{ $reserva->cliente_email }}" required>
        </div>
        <div class="form-group">
            <label for="cliente_telefono">Teléfono del Cliente</label>
            <input type="text" name="cliente_telefono" id="cliente_telefono" class="form-control" value="{{ $reserva->cliente_telefono }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_hora">Fecha y Hora de la Reserva</label>
            <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" value="{{ $reserva->fecha_hora->format('Y-m-d\TH:i') }}" required>
        </div>
        <div class="form-group">
            <label for="num_personas">Número de Personas</label>
            <input type="number" name="num_personas" id="num_personas" class="form-control" value="{{ $reserva->num_personas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
    </form>
</div>
@endsection
