@extends('layouts.app')

@section('template_title')
    Knote
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Knote') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('knotes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Tags</th>
										<th>Attachments</th>
										<th>Reminder</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($knotes as $knote)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $knote->user_id }}</td>
											<td>{{ $knote->title }}</td>
											<td>{{ $knote->content }}</td>
											<td>{{ $knote->tags }}</td>
											<td>{{ $knote->attachments }}</td>
											<td>{{ $knote->reminder }}</td>
											<td>{{ $knote->status }}</td>

                                            <td>
                                                <form action="{{ route('knotes.destroy',$knote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('knotes.show',$knote->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('knotes.edit',$knote->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $knotes->links() !!}
            </div>
        </div>
    </div>
@endsection
