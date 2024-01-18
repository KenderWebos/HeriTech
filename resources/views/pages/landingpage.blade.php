@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand" href="#"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portafolio">Portafolio</a>
                        </li>

                        <li class="nav-item">
                            <span class="navbar-text mx-2">|</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Iniciar Sesion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('register') }}" style="background-color: black; color: white;">Registrarse</a>
                        </li>

                    </ul>
                </div>

            </nav>

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/landingpage/hero01.jpg') }}" class="d-block w-100 hero-image" alt="some carrousel image">

                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h4>HeriTech</h4>
                            <p>Transformando el Futuro con Innovación Tecnológica.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/landingpage/hero02.jpg') }}" class="d-block w-100 hero-image" alt="some carrousel image">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Sección Nosotros -->
            <section id="nosotros" class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="text-center text-md-left">
                                <h2>¿Quienes somos? </h2>
                                <p class="lead">Somos un grupo de Ingenieros Civiles en Informatica.</p>
                                <h3>¿Que estamos haciendo?</h3>
                                <p>Creamos soluciones tecnológicas que permiten a nuestros clientes optimizar y organizar sus procesos.</p>
                                <h3>¿Hacia donde apuntamos?</h3>
                                <p>Aspiramos a destacar como una empresa líder en desarrollo y mantencion de sistemas para empresas.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="text-center">
                                <div class="circle-container">
                                    <div class="outer-circle">
                                        <div class="inner-circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>


            <!-- Sección Servicios -->
            <section id="servicios" class="bg-light py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Servicios</h2>
                    <div class="row">

                        @foreach($serviciosInformaticos as $servicio)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1><i class="fa {{$servicio->icono}}"></i></h1>
                                    <h4 class="card-title">{{$servicio->nombre}}</h4>
                                    <p class="card-text">{{$servicio->descripcion}}</p>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>


            <!-- Sección Portafolio -->
            <section id="portafolio" class="py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Portafolio</h2>
                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <a target="_blank" href="{{ url('calendargo') }}" class="card-link text-center text-decoration-none">
                                <div class="card p-3 border-0 shadow">
                                    <i class="far fa-calendar-alt fa-3x"></i>
                                    <div class="card-body mt-3">
                                        <h5 class="card-title">CalendarGO</h5>
                                        <p class="card-text">Aplicacion de gestion de eventos geograficos</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 mb-4">
                            <a target="_blank" href="{{ url('dashboard') }}" class="card-link text-center text-decoration-none">
                                <div class="card p-3 border-0 shadow">
                                    <i class="far fa-clock fa-3x"></i>
                                    <div class="card-body mt-3">
                                        <h5 class="card-title">DailyU</h5>
                                        <p class="card-text">Aplicacion de gestion y organizacion del dia a dia</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 mb-4">
                            <a target="_blank" href="{{ url('games') }}" class="card-link text-center text-decoration-none">
                                <div class="card p-3 border-0 shadow">
                                    <i class="fas fa-gamepad fa-3x"></i>
                                    <div class="card-body mt-3">
                                        <h5 class="card-title">Games</h5>
                                        <p class="card-text">Desarrollo de Videojuegos</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Sección Clientes -->

            <!-- <section id="clientes" class="bg-light py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Clientes</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Cliente 1</p>
                        </div>
                        <div class="col-md-4">
                            <p>Cliente 2</p>
                        </div>
                        <div class="col-md-4">
                            <p>Cliente 3</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Footer -->
            <footer class="bg-dark text-white text-center py-3">
                <p>© Copyright HeriTech. All Rights Reserved</p>
            </footer>

            <!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>

</div>
@endsection