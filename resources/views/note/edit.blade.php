@extends('layouts.app', ["title_html" => "Editar Apunte", "title"=>'Editar Apunte', 'breadcrumbs'=>[["nombre"=>"Apuntes", "ruta"=>"notes.index"], ["nombre"=>"Editar", "ruta"=>"notes.edit"]]])

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('notes.update', $note->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
