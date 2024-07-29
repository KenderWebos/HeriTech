@extends('layouts.app', ["title_html" => "Editar Tipo de Evento", "title"=>'Editar Tipo de Evento', 'breadcrumbs'=>[["nombre"=>"Tipos de Evento", "ruta"=>"tipo-eventos.index"], ["nombre"=>"Editar", "ruta"=>"tipo-eventos.edit"]]])



@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-eventos.update', $tipoEvento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo-evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
