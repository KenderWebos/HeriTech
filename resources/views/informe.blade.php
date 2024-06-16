@extends('layouts.app')

@section('template_title')
Informe de eventos
@endsection

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Informe de eventos'])

<div class="card">
    <div class="card-header">

    </div>

    <div class="card-body">
        <form method="GET" action="{{ route('informe') }}">
            <label for="start_date">Fecha de inicio:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}">

            <label for="end_date">Fecha de fin:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}">

            <button type="submit">Filtrar</button>
        </form>
        <table id="datatable" class="display">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Ubicación</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>{{ $event->nombre }}</td>
                    <td>{{ $event->descripcion }}</td>
                    <td>{{ $event->duracion }}</td>
                    <td>{{ $event->ubicacion }}</td>
                    <td>{{ $event->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form method="GET" action="{{ route('pdf') }}">
            <input type="hidden" name="start_date" value="{{ request('start_date') }}">
            <input type="hidden" name="end_date" value="{{ request('end_date') }}">
            <button type="submit">Generar PDF</button>
        </form>
    </div>
</div>

@endsection