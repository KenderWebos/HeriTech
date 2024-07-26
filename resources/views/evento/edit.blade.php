@extends('layouts.app', ["title_html" => "Editar Evento", "title"=>'Editar Evento', 'breadcrumbs'=>[["nombre"=>"Eventos", "ruta"=>"eventos.index"], ["nombre"=>"Editar", "ruta"=>"eventos.edit"]]])

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventos.update', $evento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
