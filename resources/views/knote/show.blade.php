@extends('layouts.app')

@section('template_title')
    {{ $knote->name ?? 'Show Knote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Knote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('knotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $knote->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $knote->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $knote->content }}
                        </div>
                        <div class="form-group">
                            <strong>Tags:</strong>
                            {{ $knote->tags }}
                        </div>
                        <div class="form-group">
                            <strong>Attachments:</strong>
                            {{ $knote->attachments }}
                        </div>
                        <div class="form-group">
                            <strong>Reminder:</strong>
                            {{ $knote->reminder }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $knote->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
