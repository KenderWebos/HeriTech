@extends('layouts.app')

@section('title', 'HeriTech')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Roles'])

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Roles') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Crear nuevo rol') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                    <div class="card-body">
                        <form action="{{ route('roles.index') }}" method="GET" class="form-inline">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" name="search" placeholder="calendargo, notas..." aria-label="Buscar" value="{{$search}}">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Nombre</th>
                                        <th>Permisos</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $role->name }}</td>
                                            <td>@foreach ($role->permisos as $permiso)
                                                <span class="badge rounded-pill bg-primary">{{$permiso->name}}</span>
                                            @endforeach</td>
                                            <td>
                                                <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            {!! $roles->links() !!}
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection