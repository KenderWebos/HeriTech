@extends('layouts.app', ["title_html" => "Configurar Página", "title"=>'Configurar Página', 'breadcrumbs'=>[["nombre"=>"Configurar Página", "ruta"=>"roles.settings.edit"]]])


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Configurar Página</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('settings.update', $setting->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('setting.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
