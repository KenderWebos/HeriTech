@extends('layouts.app')

@section('template_title')
    {{ $tipoModulo->name ?? "{{ __('Show') Tipo Modulo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Modulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-modulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $tipoModulo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $tipoModulo->slug }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
