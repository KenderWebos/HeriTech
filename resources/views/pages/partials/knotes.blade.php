@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])

<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-body text-center">

                    <p class="card-title">kNotes</p>

                    <form action="{{ route('guardar_nota') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control bg-dark text-white" name="title" rows="1" placeholder="Título"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control bg-dark text-white" name="content" rows="10" placeholder="Contenido"></textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary">POSTEAR</button>
                    </form>

                </div>

            </div>

            
        </div>

        <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Autor</th>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $nota)
                            <tr>
                                <td>{{ $nota->user->username }}</td>
                                <td>{{ $nota->title }}</td>
                                <td>{{ $nota->content }}</td>
                                <td>{{ $nota->created_at }}</td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
</div>
@endsection