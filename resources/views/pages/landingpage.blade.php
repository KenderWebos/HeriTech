@extends('layouts.appStatic', ['class' => ''])

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Landing Page - HeriTech</title>
                <!-- Enlace a Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            </head>

            <body>
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
                                <a class="nav-link" href="#clientes">Clientes</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="hero">
                    <center>
                        <img class="img-fluid hero-image" style="max-height: 400px;" src="{{ asset('images/landingpage/hero.jpg') }}" alt="hero">
                    </center>

                    <div class="circle-effect"></div>
                </div>

                <!-- Sección Nosotros -->
                <section id="nosotros" class="py-5">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <h2>Nosotros</h2>
                                <p>Somos una empresa emergente en el campo de la informática.</p>
                                <h3>Misión</h3>
                                <p>Nuestra misión es crear soluciones tecnológicas que permitan a nuestros clientes optimizar y organizar sus procesos.</p>
                                <h3>Visión</h3>
                                <p>Aspiramos a destacar como una empresa líder en el ámbito tecnológico.</p>
                            </div>

                            <!-- Aquí puedes agregar una imagen o elemento visual si deseas -->
                        </div>
                    </div>
                </section>

                <!-- Sección Servicios -->
                <section id="servicios" class="bg-light py-5">
                    <div class="container">
                        <h2 class="text-center mb-4">Servicios</h2>
                        <div class="row">
                            <!-- <div class="col-md-4">
                                <h4>Desarrollo Web</h4>
                                <p>Da a conocer tu marca, empresa, producto o servicio que ofreces.</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Desarrollo Móvil</h4>
                                <p>Aplicaciones.</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Desarrollo a medida</h4>
                                <p>Coméntanos tu problema y te presentamos una solución tecnológica acorde a tus necesidades.</p>
                            </div> -->
                            <!-- Repite este bloque para cada servicio -->

                            @foreach($serviciosInformaticos as $servicio)

                            <div class="col-md-4">
                                <h4> {{$servicio->nombre}} </h4>
                                <p> {{$servicio->descripcion}} </p>
                            </div>

                            <div class="">
                                <a href="#proyecto-transporte" class="btn btn-primary">¡Haz click aquí para saber más!</a>
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
                            <div class="col-md-4">
                                <h4>App NFC</h4>
                                <p>Gestión de mantenciones de equipos industriales por medio de NFC</p>
                            </div>
                            <div class="col-md-4">
                                <h4>Landing Page GlobalTom</h4>
                                <p>Sitio web de aterrizaje</p>
                            </div>
                            <div class="col-md-4">
                                <h4>App RA ODS</h4>
                                <p>App de realidad aumentada para difundir los Objetivos de Desarrollo Sostenible</p>
                            </div>
                            <!-- Repite este bloque para cada proyecto del portafolio -->
                        </div>
                    </div>
                </section>

                <!-- Sección Clientes -->
                <section id="clientes" class="bg-light py-5">
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
                            <!-- Repite este bloque para cada cliente -->
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
            </body>

            </html>


        </div>
    </div>

</div>
@endsection