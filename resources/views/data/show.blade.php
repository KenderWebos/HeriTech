@extends('layouts.app')

@section('template_title')
    {{ $data->name ?? 'Show Data' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Data</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('data.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $data->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $data->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $data->content }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $data->type }}
                        </div>
                        <div class="form-group">
                            <strong>Visibility:</strong>
                            {{ $data->visibility }}
                        </div>
                        <div class="form-group">
                            <strong>Origin:</strong>
                            {{ $data->origin }}
                        </div>
                        <div class="form-group">
                            <strong>Meaning:</strong>
                            {{ $data->meaning }}
                        </div>
                        <div class="form-group">
                            <strong>Example:</strong>
                            {{ $data->example }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $data->location }}
                        </div>
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $data->start_time }}
                        </div>
                        <div class="form-group">
                            <strong>End Time:</strong>
                            {{ $data->end_time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
