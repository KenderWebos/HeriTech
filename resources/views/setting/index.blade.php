@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
    Setting
@endsection

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Productos'])

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
    
                            <span id="card_title">
                                {{ __('Setting') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('settings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Company Name</th>
										<th>Location</th>
										<th>Logo</th>
										<th>Description</th>
										<th>Color Primary</th>
										<th>Color Secondary</th>
										<th>Color Tertiary</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $setting->company_name }}</td>
											<td>{{ $setting->location }}</td>
											<td>{{ $setting->logo }}</td>
											<td>{{ $setting->description }}</td>
											<td>{{ $setting->color_primary }}</td>
											<td>{{ $setting->color_secondary }}</td>
											<td>{{ $setting->color_tertiary }}</td>

                                            <td>
                                                <form action="{{ route('settings.destroy',$setting->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('settings.show',$setting->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('settings.edit',$setting->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $settings->links() !!}
            </div>
        </div>
    </div>
@endsection