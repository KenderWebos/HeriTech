@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])

<div class="row mt-4">
    <div class="col-lg-1">
        <div style="height:500px"></div>
    </div>
    <div class="col-lg-10">

        <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">

                    <div class="carousel-item h-100 active" style="background-image: url('./img/carousel-1.jpg');background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <!-- <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                                </div> -->
                            <h5 class="text-white mb-1">Primer slide</h5>
                            <p>never ever.</p>
                        </div>
                    </div>

                    <div class="carousel-item h-100" style="background-image: url('./img/carousel-2.jpg');background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <!-- <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                                </div> -->
                            <h5 class="text-white mb-1">Segundo Slide</h5>
                            <p>That’s my skill. I’m not really specifically talented at anything except for the
                                ability to learn.</p>
                        </div>
                    </div>

                    <div class="carousel-item h-100" style="background-image: url('./img/carousel-3.jpg');background-size: cover;">
                        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                            <!-- <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-trophy text-dark opacity-10"></i>
                                                </div> -->
                            <h5 class="text-white mb-1">T3rC3r Slid3</h5>
                            <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>

</div>

@endsection