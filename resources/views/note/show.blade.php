@extends('layouts.app', ["title_html" => $note->name ?? 'Ver Apunte', "title"=>$note->name ?? 'Ver Apunte', 'breadcrumbs'=>[["nombre"=>"Apuntes", "ruta"=>"notes.index"]]])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $note->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $note->description }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $note->author }}
                        </div>
                        <div class="form-group">
                            <strong>Images:</strong>
                            {{ $note->images }}
                        </div>
                        <div class="form-group">
                            <strong>Tags:</strong>
                            {{ $note->tags }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
