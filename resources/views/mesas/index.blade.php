@extends('layouts.app')

@section('template_title')
Mesas
@endsection

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Mesas'])

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
            <h3 class="text-gray-700 font-bold p-3 dark:text-white">{{ __('Listado de Mesas') }}</h3>
        </div>

        <div class="card-body shadow-md rounded-lg pt-4 min-h">
            <div class="flex bg-white pt-2 px-2 flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 dark:bg-gray-800">
                <div class="pt-1 px-4">
                    <a href="{{ route('mesas.create') }}" class="flex-inline text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:from-cyan-500 dark:to-blue-500 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">
                        {{ __('+ Crear Mesa') }}
                    </a>
                </div>
            </div>
            <div class="table-responsive overflow-x-auto">
                <table class="table table-striped table-bordered w-full p-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 w-full dark:bg-gray-900 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">{{__('ID')}}</th>
                            <th scope="col" class="px-6 py-3 text-center">{{__('Materia')}}</th>
                            <th scope="col" class="px-6 py-3 text-center">{{__('Número')}}</th>
                            <th scope="col" class="px-6 py-3 text-center">{{__('Capacidad')}}</th>
                            <th scope="col" class="px-6 py-3 text-center">{{__('Acciones')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mesas as $mesa)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">{{ $mesa->id }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">{{ $mesa->materia }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">{{ $mesa->numero }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">{{ $mesa->capacidad }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="d-flex justify-content-center align-items-center space-x-2">
                                        <a href="{{ route('mesas.show', $mesa->id) }}" class="text-blue-700 hover:text-white border border-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm p-2 text-center dark:border-indigo-500 dark:text-indigo-500 dark:hover:text-white dark:hover:bg-indigo-600 dark:focus:ring-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                        </a>
                                        <a href="{{ route('mesas.edit', $mesa->id) }}" class="text-cyan-700 hover:text-white border border-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm p-2 text-center dark:border-cyan-500 dark:text-cyan-500 dark:hover:text-white dark:hover:bg-cyan-600 dark:focus:ring-cyan-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-700 hover:text-white border border-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" onclick="return confirm('¿Estás seguro de eliminar esta mesa?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {!! $mesas->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
