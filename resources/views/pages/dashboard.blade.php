@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Inicio'])
<div class="container-fluid py-4">

    @role('administrador')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Eventos Registrados</p>
                                <h5 class="font-weight-bolder">
                                    {{ $events_count }}
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+{{ $events_count }}</span>
                                    desde el inicio
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="ni ni-bullet-list-67 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Usuarios Registrados</p>
                                <h5 class="font-weight-bolder">
                                    {{ $userCount }}
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+{{ $userCount }}</span>
                                    desde el inicio
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-danger text-center rounded-circle">
                                <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                <h5 class="font-weight-bolder">
                                    +8
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+4%</span>
                                    since last quarter
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-success text-center rounded-circle">
                                <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder">
                                    $88
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-warning text-center rounded-circle">
                                <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    @endrole

    <div class="row mt-4">
        <div class="col-xl-6 col-sm-12 mb-4">
            <!-- EVENTOS -->
            <div class="row">

            </div>
            <div class="card">
                <div class="card-body text-center">

                    <p class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Eventos
                        <i class="far fa-calendar-alt"></i>
                    </p>

                    <div class="text-end">
                        <span> <a target="_blank" href="{{ route('calendargo') }}">Ir al Calendario</a> </span>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Dias restantes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{$event->fecha}}</td>
                                    <td>{{$event->titulo}}</td>
                                    <td>{{$event->days_left}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 mb-4">
            <div class="row">
                <!-- RELOJ -->
                <div class="card mb-4">
                    <div class="card-body text-center d-flex justify-content-center">
                        <div>
                            <h3><i class="ni ni-time-alarm"></i></h3>
                            <h3 id="current-time">
                                {{ $current_date }}
                            </h3>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" id="current-time-bar" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="row">
                        <div class=" col-5 d-flex text-center d-flex justify-content-center">
                            <i class="fas fa-arrow-up"></i>
                        </div>

                        <div class="col-2 d-flex text-center d-flex justify-content-center">
                            <i class="fas fa-arrow-up"></i>
                        </div>

                        <div class=" col-5 d-flex text-center d-flex justify-content-center">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 mb-5">
            <a href="http://167.99.128.137/info-test/7" class="card h-100 text-decoration-none ">

                <div class="card-header text-center" cursorshover="true">
                    <i class="fas fa-solid fa-code" data-toggle="tooltip" title="Vista Web"></i>
                    <p class="card-text" cursorshover="true"> Ejecucion externa</p>
                </div>

                <div class="card-body text-center" cursorshover="true">

                    <h2 class="card-title mt-3" cursorshover="true">2 -
                        Metacognition</h2>
                    <p class="card-text"> Perceptual Discrimination</p>
                    <p class="card-text"><i class="fas fa-clock"></i> Duración estimada:
                        15 minutos</p>
                    <div class="card-footer ">
                        <p class="card-text"><i class="fa-solid fa-globe"></i> Fuente:
                            GitHub</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-5">
            <a href="http://167.99.128.137/info-test/7" class="card h-100 text-decoration-none ">

                <div class="card-header text-center" cursorshover="true">
                    <i class="fas fa-solid fa-code" data-toggle="tooltip" title="Vista Web"></i>
                    <p class="card-text" cursorshover="true"> Ejecucion externa</p>
                </div>

                <div class="card-body text-center" cursorshover="true">

                    <h2 class="card-title mt-3" cursorshover="true">2 -
                        Metacognition</h2>
                    <p class="card-text"> Perceptual Discrimination</p>
                    <p class="card-text"><i class="fas fa-clock"></i> Duración estimada:
                        15 minutos</p>
                    <div class="card-footer ">
                        <p class="card-text"><i class="fa-solid fa-globe"></i> Fuente:
                            GitHub</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-5">
            <a href="http://167.99.128.137/info-test/7" class="card h-100 text-decoration-none ">

                <div class="card-header text-center" cursorshover="true">
                    <i class="fas fa-solid fa-code" data-toggle="tooltip" title="Vista Web"></i>
                    <p class="card-text" cursorshover="true"> Ejecucion externa</p>
                </div>

                <div class="card-body text-center" cursorshover="true">

                    <h2 class="card-title mt-3" cursorshover="true">2 -
                        Metacognition</h2>
                    <p class="card-text"> Perceptual Discrimination</p>
                    <p class="card-text"><i class="fas fa-clock"></i> Duración estimada:
                        15 minutos</p>
                    <div class="card-footer ">
                        <p class="card-text"><i class="fa-solid fa-globe"></i> Fuente:
                            GitHub</p>
                    </div>
                </div>
            </a>
        </div>
        
    </div>



    <!-- WSP DIRECT -->

    <!-- <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center justify-content-center">
                        <div class="col-8">
                            <h3>wsp directo</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text">+569</span>
                                <input type="number" maxlength="8" class="form-control" id="wspDirectInput" autocomplete="off" placeholder="Ingresa el número" aria-label="Ingresa el número de WhatsApp" aria-describedby="button-addon2" min="0" max="99999999" oninput="validity.valid||(value='');">
                                <button onclick="wspDirect()" class="btn btn-success mb-0" type="button">
                                    Contactar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>
@endsection

@push('js')
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#fb6340",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>

<script>
    actualizarHora();
    var idActualizar = setInterval(actualizarHora, 1000);

    // actualizarHorasBarra();
    // setInterval(actualizarHorasBarra, 60000);


    function actualizarHora() {
        var fecha = new Date();
        var Mañana = false;

        var pHora = document.getElementById("current-time");
        var pMensaje = document.getElementById("current-date-info");

        var hora = fecha.getHours() % 12 > 12 ? fecha.getHours() % 12 - 12 : fecha.getHours() % 12;
        var minutos = fecha.getMinutes();
        var segundos = fecha.getSeconds();

        hora = hora === 0 ? 12 : hora;

        hora = hora < 10 ? "0" + hora : hora;
        minutos = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;

        pHora.textContent = "| " + hora + " :  " + minutos + " : " + segundos + " |";

        /*
        if (fecha.getHours() % 24 >= 12) {
            pMensaje.textContent = "Recuerda que es de tarde.";
            Mañana = false;
        } else {
            pMensaje.textContent = "Recuerda que es de mañana.";
            Mañana = true;
        }

        if (fecha.getHours() % 12 >= 10 && fecha.getHours() % 12 <= 12 && !Mañana) {
            pMensaje.textContent += (" [a mimir...]");
        }
        */
    }

    // Define las constantes para el inicio y fin del día (en horas)
    const START_OF_DAY = 8; // 8 AM
    const END_OF_DAY = 24; // 10 PM

    function calcularProgresoHorario() {
        var fecha = new Date();

        // Calcula el progreso desde el inicio del día hasta la hora actual
        var horasTranscurridas = fecha.getHours() - START_OF_DAY;
        var progresoHoras = (horasTranscurridas / (END_OF_DAY - START_OF_DAY)) * 100;

        // Calcula el progreso adicional basado en los minutos dentro de la hora actual
        var progresoMinutos = (fecha.getMinutes() / 60) * (100 / (END_OF_DAY - START_OF_DAY));

        // Calcula el progreso total
        var progresoTotal = progresoHoras + progresoMinutos;
        progresoTotal = Math.min(Math.max(progresoTotal, 0), 100);

        if (progresoTotal == 0) {
            progresoTotal = 100;
        }

        return progresoTotal;
    }

    function actualizarBarraDeProgreso() {
        var progreso = calcularProgresoHorario();

        // Actualiza la barra de progreso
        document.getElementById("current-time-bar").style.width = progreso + "%";
    }

    actualizarBarraDeProgreso();
    // Llama a la función para actualizar la barra de progreso cada minuto
    setInterval(actualizarBarraDeProgreso, 60000);

    // function actualizarHorasBarra() {
    //     var fecha = new Date();
    //     var tiempo = (((fecha.getHours() - 8) / 14) * 100) > 100 ? 100 : (((fecha.getHours() - 8) / 14) * 100);
    //     tiempo = (((fecha.getHours() - 8) / 14) * 100) < 0 ? 0 : (((fecha.getHours() - 8) / 14) * 100);
    //     var precision = ((fecha.getMinutes() / 60) / 14) * 100;

    //     document.getElementById("current-time-bar").style.width = (tiempo + precision);
    // }

    // function actualizarHorasBarra() {
    //     var fecha = new Date();
    //     var tiempo = ((fecha.getHours() - 8) / 14) * 100;
    //     var precision = (fecha.getMinutes() / 60) * (100 / 14);

    //     var value = tiempo + precision;
    //     value = value > 100 ? 100 : value;
    //     value = value < 0 ? 0 : value;

    //     document.getElementById("current-time-bar").style.width = value + "%";
    // }
</script>

<script>
    function wspDirect() {
        var wspDirectInput = document.getElementById("wspDirectInput").value;
        window.open("https://api.whatsapp.com/send?phone=569" + wspDirectInput + "&text=Hola%20soy%20" + wspDirectInput + "%20y%20quiero%20contactarme%20con%20ustedes%20para%20saber%20más%20sobre%20sus%20servicios", "_blank");
    }
</script>

<script>
    // function youtube_search() {
    //     query = document.getElementById("input-youtube-search").value;
    //     var url = "https://www.youtube.com/results?search_query=" + query; //+ "&max-results=1&v=2&alt=jsonc"

    //     window.open(url);
    //     document.getElementById("input-youtube-search").value = "";
    // }

    document.getElementById('btn-youtube-search').addEventListener('click', function() {
        var query = document.getElementById('input-youtube-search').value;
        if (query) {
            var url = 'https://www.youtube.com/results?search_query=' + encodeURIComponent(query);
            window.open(url, '_blank');
        }
    });
</script>
@endpush

@push('js')
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            events: [
                // Add your events here
                // Example event:
                {
                    title: 'Event 1',
                    start: '2023-10-15'
                },
                // Add more events as needed
            ]
        });

        calendar.render();
    });
</script> -->
@endpush