@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/maps.css') }}" />

<center>
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
</center>



<div id="map"></div>
<!-- <script
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCO_Zx_iF1QjOrya0m1l_2xZva81tVpAFQ&map_ids=3a95192313ba8145&callback=initMap">
    </script>
                                                                                                          -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow overflow-auto mb-3" style="height: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Ubicaciones</h5>
                    <div class="list-group list-group-flush">
                        @foreach ($ubicaciones as $ubicacion)
                        <button type="button" class="list-group-item list-group-item-action ubicaciones_button" id="ubicacion_{{ $ubicacion->id }}" onclick="clickUbicacion({{ $ubicacion->id }})">{{ $ubicacion->nombre }}
                            <span class="badge badge-dark badge-pill">{{$ubicacion->cantidad_eventos}}</span>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">

                <div class="card-body overflow-auto mb-3" style="height: 18rem;">
                    <h5 class="card-title">Eventos</h5>
                    <span class="d-none" id="no_eventos">No hay Eventos</span>
                    <div class="list-group list-group-flush">
                        @foreach ($eventos as $evento)
                        <button type="button" class="list-group-item list-group-item-action evento_button ubicacion_{{ $evento->ubicacion->id }}" id="evento_{{ $evento->id }}" onclick="clickEvento({{ $evento }},{{ $evento->id_ubicacion }})">{{ $evento->titulo }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow overflow-auto mb-3" style="height: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Información del Evento</h5>
                    <span id="info_message">Seleccione un evento para obtener información</span>
                    <div class="d-none" id="info_div">
                        <h6 class="text-center"><span id="info_titulo">Titulo</span></h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span id="info_descripcion">Descripcion</span></li>
                            <li class="list-group-item">Duración: <span id="duracion_info">120</span> minutos</li>
                            <li class="list-group-item">Fecha: <span id="fecha_info">12-07-2024</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ((g) => {
        var h,
            a,
            k,
            p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set(),
            e = new URLSearchParams(),
            u = () =>
            h ||
            (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g)
                    e.set(
                        k.replace(/[A-Z]/g, (t) => "_" + t[0].toLowerCase()),
                        g[k]
                    );
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => (h = n(Error(p + " could not load.")));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a);
            }));
        d[l] ?
            console.warn(p + " only loads once. Ignoring:", g) :
            (d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)));
    })({
        key: "{{ $gmap }}",
        v: "weekly",
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
    });

    let map, activeWindows, markers = [];
    let current_window;
    async function initMap() {
        const {
            Map
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerElement,
            PinElement
        } = await google.maps.importLibrary(
            "marker",
        );

        const pinGlyph = new PinElement({
            glyphColor: "white",
        });

        map = new Map(document.getElementById("map"), {
            center: {
                lat: -36.798217652937225,
                lng: -73.05635759079199
            },
            zoom: 18,
            mapId: '3a95192313ba8145'
        });
        initMarker()
    }

    function initMarker() {

        const ubications = <?php echo json_encode($ubicaciones); ?>;
        ubications.forEach(element => {

            const iconImage = document.createElement("img");
            iconImage.src =
                "https://cdn-icons-png.freepik.com/256/9353/9353832.png";
            iconImage.style = "width:35px; height:auto;"


            const marker = new google.maps.marker.AdvancedMarkerElement({
                position: {
                    lat: element.latitud,
                    lng: element.longitud
                },
                map,
                content: iconImage,
                title: element.nombre,
            });
            markers.push(marker)
            const infowindow = new google.maps.InfoWindow({
                maxWidht: 50,
                content: '<div id="content">' +
                    '<div id="siteNotice">' +
                    "</div>" +
                    '<h4 id="firstHeading" class="firstHeading">' + element.nombre + '</h4>' +
                    '<div id="bodyContent">' +
                    "<h5> Cantidad de Eventos: " + element.cantidad_eventos + " </h5><br>" +
                    "<p>" + element.descripcion + "</p>" +
                    "</div>",
                ariaLabel: element.name,
            });
            google.maps.event.addListener(marker, 'click', function() {
                if (current_window) {
                    current_window.close();
                }
            });
            marker.addListener("click", () => {
                current_window = infowindow;
                infowindow.open({
                    anchor: marker,
                    map,
                });
                clickMarker_event(element);
            });
            google.maps.event.addListener(infowindow, 'closeclick', function() {
                clickClose_InfoWindow();
            });

        });
    }


    function clickClose_InfoWindow() {
        $(".evento_button").removeClass("d-none");
        $(".ubicaciones_button").removeClass("active");
        $("#no_eventos").addClass("d-none")
    }

    function clickMarker_event(element) {
        $(".ubicaciones_button").removeClass("active");
        $("#no_eventos").addClass("d-none")
        $("#ubicacion_" + element.id).addClass("active");
        $(".evento_button").removeClass("active");
        $(".evento_button").removeClass("d-none");
        $("#info_message").removeClass("d-none")
        $("#info_div").addClass("d-none")
        $(".evento_button").not(".ubicacion_" + element.id).addClass("d-none");
        if (element.cantidad_eventos == 0) {
            $("#no_eventos").removeClass("d-none")
        }
    }
    initMap();

    function clickEvento(evento, ubicacion) {
        if (!$("#ubicacion_" + ubicacion).hasClass('active')) {
            clickUbicacion(ubicacion)
        }
        if (!$("#info_message").hasClass("d-none")) {
            $("#info_message").addClass("d-none")
            $("#info_div").removeClass("d-none")
        }
        $(".evento_button").removeClass("active");
        $("#evento_" + evento.id).addClass("active");

        $("#info_titulo").html(evento.titulo);
        $("#info_descripcion").html(evento.descripcion);
        $("#duracion_info").html(evento.duracion);
        $("#fecha_info").html(evento.fecha);
    }

    function clickUbicacion(id) {
        google.maps.event.trigger(markers[id - 1], 'click');
    }
</script>
<script src="{{ asset('assets/js/maps.js') }}"></script>
@endsection