@extends('layouts.app', ["title_html" => "Editar Usuario", "title"=>'Editar Usuario', 'breadcrumbs'=>[["nombre"=>"Usuario", "ruta"=>"users.index"], ["nombre"=>"Crear", "ruta"=>"users.edit"]]])

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
