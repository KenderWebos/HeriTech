@extends('layouts.app')

@section('template_title')
    {{ $setting->name ?? 'Show Setting' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Setting</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('settings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Company Name:</strong>
                            {{ $setting->company_name }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $setting->location }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $setting->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $setting->description }}
                        </div>
                        <div class="form-group">
                            <strong>Color Primary:</strong>
                            {{ $setting->color_primary }}
                        </div>
                        <div class="form-group">
                            <strong>Color Secondary:</strong>
                            {{ $setting->color_secondary }}
                        </div>
                        <div class="form-group">
                            <strong>Color Tertiary:</strong>
                            {{ $setting->color_tertiary }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
