@extends('layouts.app')

@section('template_title')
    Crear Nueva Mesa
@endsection

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-white shadow-sm">
            <h2 class="text-center font-weight-bold">{{ __('Crear Nueva Mesa') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('mesas.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="materia">{{ __('Materia') }}</label>
                        <input type="text" id="materia" name="materia" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numero">{{ __('Número de Mesa') }}</label>
                        <input type="text" id="numero" name="numero" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="capacidad">{{ __('Capacidad') }}</label>
                    <input type="number" id="capacidad" name="capacidad" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">{{ __('Guardar Mesa') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
