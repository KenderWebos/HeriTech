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

                <table class="table">
                    <tbody>
                        @foreach($roles as $rol)
                        <tr>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheck{{ $loop->index }}" checked>
                                    <label class="form-check-label" for="flexSwitchCheck{{ $loop->index }}">{{ $rol }}</label>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @else
                <p>No se encontraron roles.</p>
                @endif

            </div>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection