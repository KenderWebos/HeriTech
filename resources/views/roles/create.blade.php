@extends('layouts.app', ["title_html" => "Crear Rol", "title"=>'Crear Rol', 'breadcrumbs'=>[["nombre"=>"Roles", "ruta"=>"roles.index"], ["nombre"=>"Crear", "ruta"=>"roles.create"]]])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <h5 class="ms-1">Nombre del Rol</h5>
                                {{ Form::text('name', $rol->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Administrador']) }}
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            @include('roles.permissions', compact('permissions'))
                            <div class="box-footer mt20 mt-3">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
