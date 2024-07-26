@extends('layouts.app', ["title_html" => "Crear Evento", "title"=>'Crear Evento', 'breadcrumbs'=>[["nombre"=>"Eventos", "ruta"=>"eventos.index"], ["nombre"=>"Crear", "ruta"=>"eventos.create"]]])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('evento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
