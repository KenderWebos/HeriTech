@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">{{ __('Enviar Correo Electrónico') }}</div>

                    <div class="card-body">
                        <form method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="destinatario">{{ __('Destinatario') }}</label>
                                <input id="destinatario" type="email" class="form-control" name="destinatario" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="asunto">{{ __('Asunto') }}</label>
                                <input id="asunto" type="text" class="form-control" name="asunto" required>
                            </div>

                            <div class="form-group">
                                <label for="mensaje">{{ __('Mensaje') }}</label>
                                <textarea id="mensaje" class="form-control" name="mensaje" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection