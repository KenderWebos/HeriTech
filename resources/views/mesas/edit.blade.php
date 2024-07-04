@extends('layouts.app')

@section('template_title')
    Editar Mesa
@endsection

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4 text-center">Editar Mesa</h2>
    <form action="{{ route('mesas.update', $mesa->id) }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


        <div class="mb-4">
                <label for="materia" class="block text-sm font-medium text-gray-700 dark:text-white">Materia</label>
                <input type="text" id="materia" name="materia" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white" value="{{ $mesa->materia }}" required>
            </div>
            <div class="mb-4">
                <label for="numero" class="block text-sm font-medium text-gray-700 dark:text-white">Número de Mesa</label>
                <input type="text" id="numero" name="numero" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white" value="{{ $mesa->numero }}" required>
            </div>
            <div class="mb-4">
                <label for="capacidad" class="block text-sm font-medium text-gray-700 dark:text-white">Capacidad</label>
                <input type="number" id="capacidad" name="capacidad" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white" value="{{ $mesa->capacidad }}" required>
            </div>
           
        </div>
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
            Actualizar Mesa
        </button>
    </form>
</div>
@endsection
