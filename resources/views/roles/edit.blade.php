@extends('layouts.app', ["title_html" => "Editar Rol", "title"=>'Editar Rol', 'breadcrumbs'=>[["nombre"=>"Roles", "ruta"=>"roles.index"], ["nombre"=>"Editar", "ruta"=>"roles.edit"]]])

@section('title')
    Editar Rol
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.update', $role->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="form-group">
                                <h5 class="ms-1">Nombre del Rol</h5>
                                {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Administrador']) }}
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            @include('roles.permissions', compact('permissions', 'permission_role'))
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
