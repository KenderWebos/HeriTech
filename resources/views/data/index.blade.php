@extends('layouts.app')

@section('template_title')
    Data
@endsection

@section('content')
    
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Data') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('data.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>User Id</th>
										<th>Title</th>
										<th>Content</th>
										<th>Type</th>
										<th>Visibility</th>
										<th>Origin</th>
										<th>Meaning</th>
										<th>Example</th>
										<th>Location</th>
										<th>Start Time</th>
										<th>End Time</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $data->user_id }}</td>
											<td>{{ $data->title }}</td>
											<td>{{ $data->content }}</td>
											<td>{{ $data->type }}</td>
											<td>{{ $data->visibility }}</td>
											<td>{{ $data->origin }}</td>
											<td>{{ $data->meaning }}</td>
											<td>{{ $data->example }}</td>
											<td>{{ $data->location }}</td>
											<td>{{ $data->start_time }}</td>
											<td>{{ $data->end_time }}</td>

                                            <td>
                                                <form action="{{ route('data.destroy',$data->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('data.show',$data->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('data.edit',$data->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                <!-- aqui habia un $data->links -->
            </div>
        </div>
    </div>
@endsection
