@extends('layouts.app',  ["title_html" => "Tipos de Evento", "title"=>'Tipos de Evento', 'breadcrumbs'=>[["nombre"=>"Tipos de Evento", "ruta"=>"tipo-evento.index"]]])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Tabla') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('tipo-eventos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear') }}
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
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Name</th>
                                    <th>Slug</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoEventos as $tipoEvento)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $tipoEvento->name }}</td>
                                    <td>{{ $tipoEvento->slug }}</td>

                                    <td>
                                        <form action="{{ route('tipo-eventos.destroy',$tipoEvento->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('tipo-eventos.show',$tipoEvento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('tipo-eventos.edit',$tipoEvento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $tipoEventos->links() !!}
        </div>
    </div>
</div>
@endsection