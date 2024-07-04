@extends('layouts.app')

@section('template_title')
Mesas
@endsection

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Mesas'])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-white shadow-sm">
            <h3 class="text-dark font-weight-bold p-3">{{ __('Listado de Mesas') }}</h3>
        </div>

        <div class="card-body shadow-sm rounded-lg pt-4">
            <div class="d-flex justify-content-between align-items-center pb-4">
                <div>
                    <a href="{{ route('mesas.create') }}" class="btn btn-primary">
                        {{ __('+ Crear Mesa') }}
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">{{__('ID')}}</th>
                            <th scope="col">{{__('Materia')}}</th>
                            <th scope="col">{{__('Número')}}</th>
                            <th scope="col">{{__('Capacidad')}}</th>
                            <th scope="col">{{__('Acciones')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mesas as $mesa)
                            <tr>
                                <td>{{ $mesa->id }}</td>
                                <td>{{ $mesa->materia }}</td>
                                <td>{{ $mesa->numero }}</td>
                                <td>{{ $mesa->capacidad }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('mesas.show', $mesa->id) }}" class="btn btn-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta mesa?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {!! $mesas->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
