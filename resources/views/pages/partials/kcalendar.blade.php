@extends('layouts.app')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'kCalendar'])

<center>
    <center>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">kCalendar</h5>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Descripción</th>
                                            <th>Título</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $evento)
                                        <tr>
                                            <td>{{ $evento->fecha }}</td>
                                            <td>{{ $evento->descripcion }}</td>
                                            <td>{{ $evento->titulo }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary">Editar</button>
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </center>
</center>

@endsection