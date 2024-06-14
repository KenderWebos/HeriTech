@extends('layouts.appStatic')

@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email 🔒 ✉️') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Revisa tu email y verifica tu cuenta para acceder al contenido.') }}
                    {{ __('Si no recibiste el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haz click aquí') }}</button>.
                    </form>
                    <form class="mt-4" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection