@extends('layouts.app')

@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>
<main class="main-content mt-0 bg-gradient-dark">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-auto">

                        <div class="card card-plain bg-white p-5 rounded-5">

                            <div class="align-item-center bg-red">
                                <a href="{{ url('landingpage') }}">
                                    <center>
                                        <img style="width:280px" src="{{ asset('images/heritech/ht_logo.png') }}" alt="a simple ht_logo">
                                    </center>
                                </a>
                            </div>

                            <div class="card-header pb-0 text-start">
                                <!-- <h4 class="font-weight-bolder">Iniciar Sesion</h4> -->
                                <!-- <p class="mb-0">Ingresa tu email para Iniciar Sesion</p> -->
                            </div>

                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login.perform') }}">
                                    @csrf
                                    @method('post')
                                    <div class="flex flex-col mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? '' }}" placeholder="admin@gmail.com" aria-label="Email">
                                        @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" placeholder="password" value="">
                                        @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>

                                    <!-- <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                        </div> -->

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Iniciar Sesion</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-1 text-sm mx-auto">
                                    No recuerdas tu contraseña? Reseteala
                                    <a href="{{ route('reset-password') }}" class="text-dark font-weight-bolder text-gradient font-weight-bold">Aqui</a>
                                </p>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    No te has registrado?
                                    <a href="{{ route('register') }}" class="text-dark font-weight-bolder text-gradient font-weight-bold">Registrate aqui</a>
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <!-- <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
              background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"La atencion es la nueva moneda"</h4>
                            <p class="text-white position-relative">Cuanto más fácil se vea la escritura, más
                                esfuerzo es el que el escritor realmente puso en el proceso.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection