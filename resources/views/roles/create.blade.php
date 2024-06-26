@extends('layouts.app')

@section('template_title')
    Create User
@endsection

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Crear Rol'])
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Rol</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                {{ Form::label('Nombre del Rol') }}
                                {{ Form::text('name', $rol->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Administrador']) }}
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            @include('roles.permissions', compact('permissions'))
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
