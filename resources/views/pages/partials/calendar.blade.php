@extends('layouts.app')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Calendar'])

<center>
    <center>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Calendar 📅</h5>
                            <small>
                                <pre>
Agenda eventos para que otros puedan verlos.
                                </pre>
                            </small>

                            <div class="col-4">
                                <form action="{{ route('evento.guardar') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" class="form-control" autocomplete="off" id="descripcion" name="descripcion" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="titulo">Tipo Evento</label>
                                        <select class="form-control" id="titulo" name="titulo" required>
                                            @foreach($tiposEventos as $tipoEvento)
                                            <option value="{{ $tipoEvento->name }}">{{ $tipoEvento->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>

                            <div id="alerts-container">
                                <!-- Aquí se mostrarán las alertas -->
                            </div>

                            <iframe style="width:100%; height:1000px" src="{{ url('calendargo') }}" frameborder="0"></iframe>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>DIAS RESTANTES</th>
                                            <th>FECHA</th>
                                            <th>DESCRIPCION</th>
                                            <th>TIPO EVENTO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $evento)
                                        <?php
                                        $dias_restantes = round((strtotime($evento->fecha) - time()) / (60 * 60 * 24));
                                        setlocale(LC_TIME, 'es_ES');
                                        ?>

                                        <tr>
                                            <td>{{ $dias_restantes }}</td>
                                            <td>{{ strftime("%d de %B", strtotime($evento->fecha)) }}</td>
                                            <td>{{ $evento->descripcion }}</td>
                                            <td>{{ $evento->titulo }}</td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </button> -->
                                                <div class="col-1">
                                                    <form action="{{ route('evento.borrar', $evento->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
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