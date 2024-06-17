@extends('layouts.appStatic', ['class' => ''])

@section('content')
<!-- Encabezado de la página -->
<style>
    body {
        margin: 0px;
        padding: 0px;
    }

    .background-repeat-up {
        background-image: url("{{ asset('images/mimateria/students-up.jpg') }}");
        /* Asegúrate de poner la ruta correcta a tu imagen */
        background-repeat: repeat-x;
        background-size: contain;
        width: 100%;
        height: 200px;
    }

    .background-repeat-down {
        background-image: url("{{ asset('images/mimateria/students-down.jpg') }}");
        /* Asegúrate de poner la ruta correcta a tu imagen */
        background-repeat: repeat-x;
        background-size: contain;
        width: 100%;
        height: 200px;
    }
</style>

<section class="text-center">
    <div class="container">
        <div class="header-image background-repeat-up">
            <!-- <img src="" alt=""> -->
        </div>

        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h1 class="display-4">Gestiona tu estudio en</h1>
                <a class="w-10" href="#"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>
                <p class="lead mb-4">Organiza tus apuntes, tiempos de estudio y flashcards de manera eficiente con nuestra plataforma fácil de usar.</p>

                <!-- <img src="{{ asset('images/heritech/ht_logo.png') }}" alt=""> -->

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <hr>
                                <div id="calendar"></div>
                                <hr>
                            </div>
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="container">
                                    <h2 class="mb-4">Regístrate en mimateria.cl</h2>
                                    <div class="row">
                                        <div class="col-lg-6 mx-auto">
                                            <!-- <p>¡Únete a mimateria.cl y lleva tu estudio al siguiente nivel!</p> -->
                                            <div class="">
                                                <a href="{{ url('register') }}" class="btn btn-success btn-lg">Regístrate Ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <img style="width:80%" src="{{asset('images/mimateria/students-studing.jpg')}}" alt="">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Herramientas para tu estudio</h2>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card p-4">

                    <form method="POST" action="{{ route('notes.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            {{ Form::label('description') }}
                            {{ Form::textarea('description', 'HolaMundo!', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'id' => 'descriptionTextArea', 'placeholder' => 'Description']) }}
                            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Características Principales -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Características Principales</h2>
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-book fa-4x mb-3"></i>
                    <h3>Gestión de Apuntes</h3>
                    <p>Organiza todos tus apuntes en un solo lugar. Accede a ellos desde cualquier dispositivo.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-clock fa-4x mb-3"></i>
                    <h3>Tiempo de Estudio</h3>
                    <p>Planifica tus sesiones de estudio y maximiza tu productividad con nuestro gestor de tiempo.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-clipboard-list fa-4x mb-3"></i>
                    <h3>Flashcards</h3>
                    <p>Crea, organiza y repasa flashcards para tus materias. Mejora tu retención y comprensión.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <i class="fas fa-calendar-alt fa-4x mb-3"></i>
                    <h3>Calendario</h3>
                    <p>Sincroniza tus eventos y tareas académicas con nuestro calendario integrado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonios o Opiniones -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Testimonios</h2>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card p-4">
                    <p class="lead">"¡MiMateria.cl ha transformado mi forma de estudiar! Es una herramienta esencial para cualquier estudiante."</p>
                    <p class="text-right">- Juan Pérez</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registro en la Plataforma -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Regístrate en MiMateria.cl</h2>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <p>¡Únete a MiMateria.cl y lleva tu estudio al siguiente nivel!</p>
                <div class="mt-4">
                    <a href="{{ url('register') }}" class="btn btn-primary btn-lg">Regístrate Ahora</a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-image background-repeat-down"></div>
</section>

<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <!-- Información de Contacto -->
        <div class="row mt-3">
            <h5>Información de Contacto</h5>
            <p>Correo Electrónico: mimateria.cl@gmail.com</p>
            <p>Teléfono: +123456789</p>
            <p>Dirección: Alonso de Ribera 2850, Concepción</p>
        </div>
        <!-- Enlaces a Redes Sociales -->
        <div class="row mt-3">
            <div class="col-md-12">
                <h5>Enlaces a Redes Sociales</h5>
                <p>
                    <a href="#" class="text-light mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light mr-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light mr-2"><i class="fab fa-linkedin"></i></a>
                </p>
            </div>
        </div>
        <!-- Créditos o Derechos de Autor -->
        <div class="row mt-3">
            <div class="col-md-12">
                <p>&copy; {{ date('Y') }} MiMateria.cl. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script src='fullcalendar/core/index.global.js'></script>
<script src='fullcalendar/core/locales/es.global.js'></script>

<script>
    ClassicEditor
        .create(document.querySelector('#descriptionTextArea'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    Toast.fire({
        icon: "success",
        title: "Carga exitosa"
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            firstDay: 1,
            events: @json($events),

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            eventClick: function(info) {
                Swal.fire({
                    title: info.event.title,
                    text: info.event.extendedProps.extra,
                    html: 'Más información <a href="https://mimateria.cl/eventos">Aquí</a>.',
                    icon: "info"
                });

                info.el.style.borderColor = 'red';
            },

            eventMouseEnter: function(mouseEnterInfo) {
                mouseEnterInfo.el.style.borderColor = 'black';
            },

            eventMouseLeave: function(mouseLeaveInfo) {
                mouseLeaveInfo.el.style.borderColor = 'white';
            },

            locale: 'es'
        });

        calendar.render();
    });
</script>
@endpush