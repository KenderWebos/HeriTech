@extends('layouts.app', ["title_html" => "Crear Apunte", "title"=>'Crear Apunte', 'breadcrumbs'=>[["nombre"=>"Apuntes", "ruta"=>"notes.index"], ["nombre"=>"Crear", "ruta"=>"notes.create"]]])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('notes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('note.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#descriptionTextArea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection