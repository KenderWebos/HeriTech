@extends('layouts.app')

@section('template_title')
    Evento
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Solicitud de Eventos'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ver Solicitudes de Eventos') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Fecha</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Duracion</th>
                                        <th>Ubicacion</th>
                                        <th>Estado</th>
                                        <th>Usuario</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $evento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $evento->fecha }}</td>
                                            <td>{{ $evento->titulo }}</td>
                                            <td>{{ $evento->descripcion }}</td>
                                            <td>{{ $evento->duracion }}</td>
                                            <td>{{ $evento->ubicacion }}</td>
                                            <td>
                                                @if ($evento->revisado == 1 && $evento->estado_solicitud == 0)
                                                    Rechazado
                                                @elseif ($evento->revisado == 1 && $evento->estado_solicitud == 1)
                                                    Aceptado
                                                @elseif ($evento->revisado == 0)
                                                    Por definir
                                                @endif
                                            </td>
                                            <td>{{ $evento->usuario }}</td>
                                            <td>
                                                @if ($evento->revisado == 0)
                                                    <form action="{{ route('evento.accion_solicitud') }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" id="id_evento" name="id_evento" value="{{$evento->id}}" >
                                                        <button type="submit" class="btn btn-outline-success btn-sm" id="accion" name="accion" value="aceptar">Aceptar</button>
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" id="accion" name="accion" value="rechazar">Rechazar</button>
                                                    </form>
                                                    
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $eventos->links() !!}
            </div>
        </div>
    </div>
@endsection
