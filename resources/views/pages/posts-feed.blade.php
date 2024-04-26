@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand" href="/"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>



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

            <center>
                @foreach ($posts as $post)
                <p>
                    <strong>{{$post->id}}</strong>
                    <a href=""> {{$post->title}} </a>
                    <br>
                </p>
                @endforeach

                {{ $posts->links() }}
            </center>

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