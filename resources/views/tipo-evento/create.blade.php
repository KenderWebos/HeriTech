@extends('layouts.app', ["title_html" => "Crear Tipo de Evento", "title"=>'Crear Tipo de Evento', 'breadcrumbs'=>[["nombre"=>"Tipos de Evento", "ruta"=>"tipo-eventos.index"], ["nombre"=>"Crear", "ruta"=>"tipo-eventos.create"]]])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-eventos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
