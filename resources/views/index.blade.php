@extends('layouts.app')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'KenderWebos'])

<center>
    <center>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">

                    <div class="container">
                        <div class="leftSide">
                            <div class="list-group">
                                <a href="index.php?p=wsp_direct" class="list-group-item list-group-item-action">wspDirect()</a>
                                <a href="index.php?p=/modules/databases/kcalendar" class="list-group-item list-group-item-action">kCalendarEdit()</a>
                                <a href="index.php?p=radiorowdie" class="list-group-item list-group-item-action">radioRowdie()</a>
                                <a href="index.php?p=games" class="list-group-item list-group-item-action">games()</a>
                                <a href="index.php?p=knotes" class="list-group-item list-group-item-action">kNotes()</a>
                                <a href="index.php?p=contactos" class="list-group-item list-group-item-action">contactos()</a>
                                <a href="index.php?p=terminal" class="list-group-item list-group-item-action">terminal()</a>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid py-4">
                        <h1>Aqui viene la magia!!</h1>
                    </div>

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


    </center>
</center>

@endsection