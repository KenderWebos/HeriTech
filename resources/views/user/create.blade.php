@extends('layouts.app', ["title_html" => "Crear Usuario", "title"=>'Crear Usuario', 'breadcrumbs'=>[["nombre"=>"Usuario", "ruta"=>"users.index"], ["nombre"=>"Crear", "ruta"=>"users.create"]]])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Usuario</span>
                    </div>
                    <div class="card-body">
                        <p>La contraseña del usuario sera la misma que la del nombre de usuario.</p>
                        <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
