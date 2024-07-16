@extends('layouts.appStatic', ['class' => ''])

@section('content')
<!-- Encabezado de la página -->
<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">

                <div class="row">
                    <div class="col">
                        <hr>
                        <div id="calendar"></div>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

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