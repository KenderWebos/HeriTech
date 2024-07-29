@extends('layouts.app', ["title_html" => "Crear Solicitud de Evento", "title"=>'Crear Solicitud de Evento', 'breadcrumbs'=>[["nombre"=>"Crear Solicitud de Evento", "ruta"=>"evento.crear_solicitudes"]]])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventos.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
