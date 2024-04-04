@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!-- Navbar -->
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand" href="/"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav> -->

            <div style="width:100%; height:100%;" class="container-fluid h-100 d-flex justify-content-center align-items-center">
                <h1 class="display-1">

                    <?php
                    $randomNum = rand(0, 100);
                    echo $randomNum;

                    if ($randomNum == 8) {
                        echo " ¡Eso sí es suerte!";
                        echo '<button type="button" class="btn btn-primary" onclick="window.open(\'/chating\', \'_blank\')"> Reclamar Recompensa</button>';
                    }

                    if ($randomNum == 11 || $randomNum == 69 || $randomNum == 13){
                        echo " ( ͡° ͜ʖ ͡°)";
                    }

                    if ($randomNum == 4 || $randomNum == 44){
                        echo " ¡Sublime!";
                    }

                    if ($randomNum == 100 || $randomNum == 0){
                        echo "%";
                    }

                    if ($randomNum == 18){
                        echo " +";
                    }

                    if ($randomNum == 99){
                        echo "% y ERROR!";
                    }

                    if ($randomNum == 2 || $randomNum == 16 || $randomNum == 32 || $randomNum == 64){
                        echo " = ".( log($randomNum, 2) )."(Bits)";
                    }

                    if ($randomNum == 3){
                        echo " tritre trigre 🐯🐯🐯";
                    }

                    if ($randomNum == 1){
                        echo " UNO!";
                    }

                    if ($randomNum == 5){
                        echo " Minutos! 🍣";
                    }

                    if ($randomNum == 31){
                        echo " Minutos";
                    }

                    if ($randomNum == 40){
                        echo " 4 Not Found";
                    }

                    if ($randomNum == 24){
                        echo " Horas";
                    }

                    if ($randomNum == 21){
                        echo " 👨🏻‍✈️👨🏻‍✈️";
                    }

                    if ($randomNum == 66){
                        echo " 6 😈";
                    }

                    if ($randomNum == 6){
                        echo " Six";
                    }

                    if ($randomNum == 10){
                        echo " /10 👌";
                    }

                    if ($randomNum == 22){
                        echo " ssh";
                    }

                    if ($randomNum == 77){
                        echo " ¬¬";
                    }

                    if ($randomNum == 42){
                        echo " 0 👀";
                    }

                    if ($randomNum == 20){
                        echo " 0✅";
                    }

                    if ($randomNum == 33){
                        echo " ⛏️";
                    }

                    if ($randomNum == 7){
                        echo " ⬆️";
                    }

                    if ($randomNum == 50){
                        echo " Me / dia";
                    }

                    if ($randomNum == 60){
                        echo " Segundos";
                    }

                    if ($randomNum == 88){
                        echo " ♾️";
                    }

                    ?>

                </h1>
            </div>

            <!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>

</div>