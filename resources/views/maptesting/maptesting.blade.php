@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/maps.css') }}" />
<!-- Incluir los archivos CSS y JS de Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<style>
    .emoji_icon{
        font-size: 24px;
    }
    .outline{
        text-shadow:
            0 0 1px rgb(0, 0, 0), 
            -1px -1px 1px rgb(0, 0, 0), 
            -1px 1px 1px rgb(0, 0, 0), 
            1px 1px 1px rgb(0, 0, 0), 
            1px -1px 1px rgb(0, 0, 0);
        position: relative;
    }
</style>
<!-- <center>
    <a class="navbar-brand m-0" href="{{ route('home') }}">
        <img style="width:140px" src="{{ asset('images/heritech/ht_logo.png') }}" alt="a simple ht_logo">
    </a>

    X

    <a class="navbar-brand m-0" href="{{ route('home') }}">
        <img style="width:60px" src="{{ asset('images/heritech/arc-logo.png') }}" alt="a simple ht_logo">
    </a>

    X

    <a class="navbar-brand m-0" href="{{ route('home') }}">
        <img style="width:140px" src="{{ asset('images/heritech/mm-logo.png') }}" alt="a simple ht_logo">
    </a>

    X

    <a class="navbar-brand m-0" href="{{ route('home') }}">
        <img style="width:140px" src="{{ asset('images/heritech/ucsc-logo.png') }}" alt="a simple ht_logo">
    </a>
</center> -->

<center>
    <div class="row">
        <!-- <div class="col">
            <a class="navbar-brand m-0" target="_blank" href="{{ route('landingpage') }}">
                <img style="width:140px" src="{{ asset('images/heritech/ht_logo.png') }}" alt="a simple ht_logo">
            </a>
        </div> -->

        <div class="col">
            <a class="navbar-brand m-0" target="_blank" href="https://ucsc.cl/">
                <img style="width:140px" src="{{ asset('images/heritech/ucsc-logo.png') }}" alt="a simple ht_logo">
            </a>
        </div>
    </div>
</center>

<div id="map" style="height: 500px;"></div>

<div class="container p-5 bg-dark">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">🗺️ Ubicaciones</h5>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="buscar_ubicacion" oninput="find_ubicacion(this.value)" placeholder="Buscar" aria-label=".form-control-sm example">
                    </div>
                    <div class="list-group list-group-flush" id="div_ubicaciones">
                        @foreach ($ubicaciones as $ubicacion)

                        <button type="button" class="list-group-item list-group-item-action ubicaciones_button" id="ubicacion_{{ $ubicacion->id }}" nombre="{{strtolower($ubicacion->nombre)}}" codigo="{{$ubicacion->codigo}}" onclick="clickUbicacion({{ $ubicacion }})">{{ $ubicacion->nombre }}<span class="outline"> {{ $ubicacion->icono_primario }}{{ $ubicacion->icono_secundario }} </span>

                            @if ($ubicacion->cantidad_eventos > 0)
                            <span class="badge badge-dark badge-pill rounded-pill bg-danger">
                                {{$ubicacion->cantidad_eventos}}
                            </span>
                            @endif

                        </button>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">📣 Eventos</h5>
                    <span class="d-none" id="no_eventos">No hay Eventos</span>
                    <div class="list-group list-group-flush">
                        @foreach ($eventos as $evento)
                        <button type="button" class="list-group-item list-group-item-action evento_button ubicacion_{{ $evento->ubicacion->id }}" id="evento_{{ $evento->id }}" onclick="clickEvento({{ $evento }},{{ $evento->id_ubicacion }})">📍 {{ $evento->titulo }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">🧾 Detalles</h5>
                    <span id="info_message">Seleccione un evento para obtener su información</span>
                    <div class="d-none" id="info_div">
                        <h6 class="text-center"><span id="info_titulo">Título</span></h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">📣 <span id="info_descripcion">Descripción</span></li>
                            <li class="list-group-item">📅 Fecha: <span class="fecha_hora_info" id="fecha_info">12-07-2024</span></li>
                            <li class="list-group-item">⌚ Hora: <span class="fecha_hora_info" id="hora_info">00:00 AM</span></li>
                            <li class="list-group-item">⏲️ Duracion: <span id="duracion_info">120</span> minutos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let map;
    let markers = [];
    let currentPopup;
    let markerPosition = [];
    var emojiIcon = L.divIcon({
        className: 'custom-div-icon',
        html: '<div class="bg-primary" style="font-size: 24px;">😘</div>',
        iconSize: [30, 42],
        iconAnchor: [15, 20]
    });

    function initMap() {
        map = L.map('map').setView([-36.79760196604004, -73.05678963913543], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19
        }).addTo(map);

        initMarkers();
    }

    function initMarkers() {
        const ubications = @json($ubicaciones);
        ubications.forEach((element, index) => {
            const marker = L.marker([element.latitud, element.longitud], {
                icon: L.divIcon({
                    className: 'custom-div-icon',
                    html: '<span class="emoji_icon outline">' + element.icono_primario + '</span>',
                    iconSize: [30, 42],
                    iconAnchor: [15, 20]
                })
            }).addTo(map);
            

            const popupContent = `
            <center>
            <div id="content">
                <h4 id="firstHeading" class="firstHeading">${element.nombre}</h4>
                <div id="bodyContent">
                    <span class="badge badge-dark badge-pill rounded-pill bg-danger">
                        ${element.cantidad_eventos} eventos
                    </span>
                    <hr>
                    <p>${element.descripcion}</p>
                </div>
            </div>
            </center>`;

            marker.bindPopup(popupContent);

            marker.on('click', () => {
                if (currentPopup) {
                    currentPopup.closePopup();
                }
                currentPopup = marker;
                clickMarkerEvent(element);
            });
            marker.getPopup().on("remove", function () {
                $(".ubicaciones_button").removeClass("active");
                $("#no_eventos").addClass("d-none");
                $(".evento_button").removeClass("active");
                $(".evento_button").removeClass("d-none");
                $("#info_message").removeClass("d-none");
                $("#info_div").addClass("d-none");
            });
            markers.push(marker);
            markerPosition.push(element.id)
        });
    }

    function find_ubicacion(value){
        value_number = parseInt(value)
        value_text = value.toLowerCase();
        console.log(value_text + " " + value_number)
        console.log("isnan? " + !isNaN(value_number))
        var buttons = document.querySelectorAll(".ubicaciones_button");
        buttons.forEach(elem => {
            elem.classList.remove('d-none')
            if((!isNaN(value_number) && (parseInt(elem.getAttribute("codigo")) != value_number)) ||  (isNaN(value_number) && elem.getAttribute("nombre").normalize('NFD').replace(/[\u0300-\u036f]/g, '').indexOf(value_text.normalize('NFD').replace(/[\u0300-\u036f]/g, '')) ==-1)){
                elem.classList.add('d-none')
            }
        })
    }

    function clickMarkerEvent(element) {
        $(".ubicaciones_button").removeClass("active");
        $("#no_eventos").addClass("d-none");
        $("#ubicacion_" + element.id).addClass("active");
        $(".evento_button").removeClass("active");
        $(".evento_button").removeClass("d-none");
        $("#info_message").removeClass("d-none");
        $("#info_div").addClass("d-none");
        markers[markerPosition.indexOf(element.id)].openPopup();
        $(".evento_button").not(".ubicacion_" + element.id).addClass("d-none");
        if (element.cantidad_eventos == 0) {
            $("#no_eventos").removeClass("d-none");
        }
    }

    function clickEvento(evento, ubicacion) {
        if (!$("#ubicacion_" + ubicacion).hasClass('active')) {
            clickMarkerEvent(evento.ubicacion);
        }
        if (!$("#info_message").hasClass("d-none")) {
            $("#info_message").addClass("d-none");
            $("#info_div").removeClass("d-none");
        }
        $(".evento_button").removeClass("active");
        $("#evento_" + evento.id).addClass("active");
        $("#info_titulo").html(evento.titulo);
        $("#info_descripcion").html(evento.descripcion);
        $("#duracion_info").html(evento.duracion);
        $("#fecha_info").html(evento.fecha);
        $("#hora_info").html(evento.hora);
    }


    function clickUbicacion(element) {
        markers[markerPosition.indexOf(element.id)].openPopup();
        $(".ubicaciones_button").removeClass("active");
        $("#ubicacion_" + element.id).addClass("active");
        $("#no_eventos").addClass("d-none");
        $(".evento_button").removeClass("active");
        $(".evento_button").removeClass("d-none");
        $("#info_message").removeClass("d-none");
        $("#info_div").addClass("d-none");
        $(".evento_button").not(".ubicacion_" + element.id).addClass("d-none");

        if (element.cantidad_eventos == 0) {
            $("#no_eventos").removeClass("d-none");
        }
    }

    initMap();
</script>
<script src="{{ asset('assets/js/maps.js') }}"></script>
<style>
    .card {
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .card-title {
            font-size: 1.2rem;
        }

        .card-body {
            padding: 1rem;
        }
    }
</style>
@endsection