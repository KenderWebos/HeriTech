@extends('layouts.appStatic', ['class' => ''])

@section('content')
<!-- Encabezado de la página -->
<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Descubre eventos cercanos con Calendar Go</h1>
                <p class="lead mb-4">Explora eventos emocionantes y actividades cerca de ti con nuestra app fácil de usar.</p>

                <hr>
                <div id="calendar"></div>
                <hr>

                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-lg">¡Descargar Ahora!</a>
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
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-calendar fa-4x mb-3"></i>
                    <h3>Organización de Eventos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod ligula vitae lectus feugiat.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-bell fa-4x mb-3"></i>
                    <h3>Recordatorios</h3>
                    <p>Integer ac lectus eget metus placerat consectetur. Sed nec justo et risus congue efficitur.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <i class="fas fa-sync fa-4x mb-3"></i>
                    <h3>Sincronización con Calendarios</h3>
                    <p>Etiam vulputate mi non nisi luctus, eget sodales enim sollicitudin. Curabitur quis vehicula nulla.</p>
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
                    <p class="lead">"¡Calendar Go ha revolucionado cómo organizo mis eventos! ¡Altamente recomendado!"</p>
                    <p class="text-right">- David Gomez</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Descarga de la Aplicación -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Descarga la Aplicación</h2>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <p>¡Descarga Calendar Go ahora y empieza a organizar tus eventos!</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-lg">Descargar para Android</a>
                    <a href="#" class="btn btn-secondary btn-lg">Descargar para iOS</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capturas de Pantalla / Demo -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Capturas de Pantalla</h2>

        <div class="container row shadow-lg">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1597.4341595365818!2d-73.0564543144277!3d-36.797707489595325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5d061cae83d%3A0x8f2da2e9988cc125!2sUniversidad%20Cat%C3%B3lica%20de%20la%20Sant%C3%ADsima%20Concepci%C3%B3n!5e0!3m2!1ses!2scl!4v1705005085808!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>

<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <!-- Información de Contacto -->
        <div class="row mt-3">
            <h5>Información de Contacto</h5>
            <p>Correo Electrónico: calendargo.project@gmail.com</p>
            <p>Teléfono: +123456789</p>
            <p>Dirección: Alonso de Ribera 2850, Concepcion</p>
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
                <p>&copy; {{ date('Y') }} CalendarGO. Todos los derechos reservados.</p>
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
                    html: 'Mas informacion <a href="www.kevincampos.cl/calendargo">Aqui</a>.',
                    icon: "question"
                });

                // change the border color just for fun
                info.el.style.borderColor = 'red';
            },

            eventMouseEnter: function(mouseEnterInfo) {
                mouseEnterInfo.el.style.borderColor = 'black';
                // mouseEnterInfo.el.style.backgroundColor = 'blue';

            },

            eventMouseLeave: function(mouseLeaveInfo) {
                mouseLeaveInfo.el.style.borderColor = 'white';
                // mouseLeaveInfo.el.style.backgroundColor = 'black';
            },

            locale: 'es'
        });

        calendar.render();
    });
</script>
@endpush