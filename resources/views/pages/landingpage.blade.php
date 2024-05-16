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

                        @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Iniciar Sesión</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('register') }}" style="background-color: black; color: white;">Registrarse</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-link" href="{{ url('dashboard') }}">Panel de Usuario</a>
                        </li>

                        <li class="nav-item">
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Cerrar Sesión</button>
                            </form>
                        </li>
                        @endif


                    </ul>
                </div>

            </nav>

            <video class="video" id="videoHome" style="width:100%;height:auto; display:block;" loop="" autoplay="" playsinline="" disableremoteplayback="" muted="">
                <source src="{{asset('assets/videos/home.mp4')}}" type="video/mp4">
            </video>

            <!-- Sección Nosotros -->
            <section id="nosotros" class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="text-center text-md-left text-animation">
                                <h2>¿Quienes somos? </h2>
                                <p>Somos un grupo de Ingenieros Civiles en Informatica.</p>
                                <h3>¿Que estamos haciendo?</h3>
                                <p>Creamos soluciones tecnológicas que permiten a nuestros clientes optimizar y organizar sus procesos, con enfoque en reducir los problemas y aumentar los <b>ingresos</b> de nuestros clientes.</p>
                                <h3>¿Hacia donde apuntamos?</h3>
                                <p>Aspiramos a destacar como una empresa líder en desarrollo y mantencion de sistemas para empresas.</p>
                            </div>
                        </div>

                        <div class="col-md-6 text-animation">
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
                        <div class="col-md-4 mb-4 dinamic-card">
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

                        <div class="col-md-4 mb-4 dinamic-card">
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

                        <div class="col-md-4 mb-4 dinamic-card">
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

                        <div class="col-md-4 mb-4 dinamic-card">
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

                        <div class="card">
                            <div class="card-body">
                                <iframe frameborder="0" src="https://itch.io/embed/1326509" width="552" height="167">
                                    <a href="https://kenderwebos.itch.io/infinitychristmas">
                                        Infinity Christmas by KenderWebos
                                    </a>
                                </iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

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