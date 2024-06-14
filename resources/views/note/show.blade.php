@extends('layouts.app')

@section('template_title')
    {{ $note->name ?? 'Show Note' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Note</span>
                        </div>
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
