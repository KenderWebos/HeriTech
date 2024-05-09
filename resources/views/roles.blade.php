@extends('layouts.app')

@section('title', 'HeriTech')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Roles'])

<div class="col-3">
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('roles.index') }}" method="GET" class="form-inline">
                <div class="input-group mb-2">
                    <input class="form-control" type="text" name="search" placeholder="calendargo, notas..." aria-label="Buscar">
                </div>
            </form>


            <div class="m-4">
                @if(count($roles) > 0)
                <p>Lista de Roles:</p>
                <ul>
                    @foreach($roles as $rol)
                    <li>{{$rol}}</li>

                    @endforeach
                </ul>
                @else
                <p>No se encontraron roles.</p>
                @endif

                @if(count($permissions) > 0)
                <p>Lista de Permisos:</p>
                <ul>
                    @foreach($permissions as $permission)
                    <li>{{$permission}}</li>

                    @endforeach
                </ul>
                @else
                <p>No se encontraron permisos.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection