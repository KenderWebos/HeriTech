@extends('layouts.app')

@section('template_title')
    Evento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Evento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('eventos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Duracion</th>
										<th>Ubicacion</th>
										<th>Latitud</th>
										<th>Longitud</th>

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
											<td>{{ $evento->latitud }}</td>
											<td>{{ $evento->longitud }}</td>

                                            <td>
                                                <form action="{{ route('eventos.destroy',$evento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('eventos.show',$evento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('eventos.edit',$evento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
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
