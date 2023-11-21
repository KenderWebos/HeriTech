@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Inicio'])
<div class="container-fluid py-4">
    <!-- <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                                    <h5 class="font-weight-bolder">
                                        $53,000
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                    <h5 class="font-weight-bolder">
                                        2,300
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
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
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                    <h5 class="font-weight-bolder">
                                        +3,462
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                        since last quarter
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
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
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="row mt-4">
        <div class="col-3">
            <div class="card mb-4">
                <div class="card-body text-center d-flex justify-content-center">
                    <div>
                        <h3><i class="ni ni-time-alarm"></i></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
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
            </div>
        </div>

        <div class="col-3">
            <div class="card mb-4">
                <div class="card-body text-center d-flex justify-content-center">
                    <div>
                        <h3><i class="ni ni-time-alarm"></i></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">

        @foreach($days as $day)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$day}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{20}}/11/2023</h6>

                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- Encabezados de la tabla, si los necesitas -->
                                <th>Días</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($days as $day)
                            <tr>
                                <td>{{$day}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <!-- Botón verde con ícono de palomita -->
                    <a href="http://www.google.com" class="btn btn-success">
                        <i class="fas fa-check-circle"></i>
                    </a>

                    <!-- Botón rojo con ícono de X -->
                    <a href="http://www.youtube.com" class="btn btn-danger">
                        <i class="fas fa-times-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Objetivo de la semana</h5>

                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="objetivo" placeholder="Escribe tu objetivo de la semana aquí..." rows="4"></textarea>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notas de la semana</h5>

                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título de la nota:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título de la nota">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Escribe la descripción de la nota..." rows="4"></textarea>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                    </form>
                </div>
            </div>

        </div>

    </div>



    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Eventos
                    </h1>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{$event->fecha}}</td>
                                    <td>{{$event->descripcion}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">

                    @foreach($datos as $nota)
                    <div class="card mb-3 m-4">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">{{ $nota->user->username }}</h6>

                            <hr>

                            <h5 class="card-title">{{ $nota->title }}</h5>
                            <p class="card-text">{!! nl2br(e($nota->content)) !!}</p>

                            <hr>

                            <p class="card-text">{{ $nota->created_at->locale('es')->format('l d \d\e F \d\e\l Y - h:i A') }}</p>

                            <!-- <p class="card-text">Tags: {{ $nota->tags }}</p> -->

                            <!-- <button class="btn btn-primary" onclick="copyToClipboard('{{ $nota->content }}')"><i class="fa fa-bicycle"></i></button> -->

                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary clipboard-btn" data-clipboard-text="{{ $nota->content }}">
                                        <i class="fa fa-copy"></i>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('notas.destroy', $nota->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
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

        <div class="col-6">
            <div class="card">
                <div class="card-body text-center">

                    <p class="card-title">
                        <i class="fas fa-bolt"></i>
                        Nota rapida
                        <i class="fas fa-bolt"></i>
                    </p>

                    <form action="{{ route('guardar_nota') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" style="display:none;" name="title" rows="1" placeholder="Título">*</textarea>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="8" placeholder="Contenido"></textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-bolt"></i>
                            POSTEAR
                            <i class="fas fa-bolt"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Utilidades
                    </h5>
                    <a class="btn btn-dark" target="_blank" href="https://www.youtube.com/watch?v=FPXRB6UOyYA&list=PLhqQblXS9-ETQ6uxIXL_FB4T4XSp3x44S&index=56"><i class="fas fa-dumbbell"></i> Musica para hacer ejercicio</a>
                    <a class="btn btn-dark" target="_blank" href="https://www.youtube.com/embed/5nrt2CgKtak?start=30"><i class="fas fa-dumbbell"></i> Pausa activa</a>

                </div>
            </div>
        </div>
    </div>

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
@endpush

@push('js')
<script>
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
</script>
@endpush