@extends('layouts.app')

@section('template_title')
    Crear Nueva Reserva
@endsection

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-white shadow-sm">
            <h2 class="text-center font-weight-bold">{{ __('Crear Nueva Reserva') }}</h2>
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <form id="reservaForm" action="{{ route('reservas.store') }}" method="POST">
                @csrf
                <input type="hidden" id="horario_id" name="horario_id">
                <input type="hidden" id="num_personas" name="num_personas" required>

                <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="fecha">{{ __('Seleccionar Fecha') }}</label>
                    <select id="fecha" class="form-control" required>
                        <option value="">{{ __('Seleccionar Fecha') }}</option>
                        @foreach ($fechas as $fecha)
                        <option value="{{ $fecha }}">{{ \Carbon\Carbon::parse($fecha)->isoFormat('dddd, D [de] MMMM') }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="capacidad">{{ __('Capacidad de la Mesa') }}</label>
                        <select id="capacidad" class="form-control" required disabled>
                            <option value="">{{ __('Seleccionar Capacidad') }}</option>
                            <!-- Las opciones de capacidad se llenarán dinámicamente con JavaScript -->
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="hora">{{ __('Seleccionar Hora') }}</label>
                        <select id="hora" name="hora" class="form-control" required disabled>
                            <option value="">{{ __('Seleccionar Hora') }}</option>
                            <!-- Las opciones de hora se llenarán dinámicamente con JavaScript -->
                        </select>
                    </div>
                </div>

                <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="mesa_id">{{ __('Seleccionar Mesa') }}</label>
                    <select id="mesa_id" name="mesa_id" class="form-control" required disabled>
                        <option value="">{{ __('Seleccionar Mesa') }}</option>
                        <!-- Las opciones de mesa se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cliente_nombre">{{ __('Nombre del Cliente') }}</label>
                        <input type="text" id="cliente_nombre" name="cliente_nombre" value="{{ $user->name }}" class="form-control" required >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cliente_email">{{ __('Email del Cliente') }}</label>
                        <input type="email" id="cliente_email" name="cliente_email" value="{{ $user->email }}" class="form-control" required readonly>
                    </div>
                </div>

                <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="cliente_telefono">{{ __('Teléfono del Cliente') }}</label>
                    <input type="text" id="cliente_telefono" name="cliente_telefono" class="form-control" required>
                </div>

                <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="materia">{{ __('Materia (opcional)') }}</label>
                    <input type="text" id="materia" name="materia" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-4">{{ __('Guardar Reserva') }}</button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const horarios = @json($horarios);
    const mesas = @json($mesas);
    const fechaSelect = document.getElementById('fecha');
    const capacidadSelect = document.getElementById('capacidad');
    const horaSelect = document.getElementById('hora');
    const mesaSelect = document.getElementById('mesa_id');
    const reservaForm = document.getElementById('reservaForm');
    const horarioIdInput = document.getElementById('horario_id');
    const numPersonasInput = document.getElementById('num_personas');

    fechaSelect.addEventListener('change', function() {
        const selectedFecha = this.value;

        capacidadSelect.innerHTML = '<option value="">{{ __('Seleccionar Capacidad') }}</option>';
        horaSelect.innerHTML = '<option value="">{{ __('Seleccionar Hora') }}</option>';
        mesaSelect.innerHTML = '<option value="">{{ __('Seleccionar Mesa') }}</option>';

        if (selectedFecha) {
            const capacidadesSet = new Set();

            horarios.forEach(function(horario) {
                if (horario.fecha === selectedFecha) {
                    const mesa = mesas.find(m => m.id === horario.mesa_id);
                    if (mesa) {
                        capacidadesSet.add(mesa.capacidad);
                    }
                }
            });

            capacidadesSet.forEach(function(capacidad) {
                const option = document.createElement('option');
                option.value = capacidad;
                option.textContent = capacidad;
                capacidadSelect.appendChild(option);
            });

            capacidadSelect.disabled = false;
        } else {
            capacidadSelect.disabled = true;
        }
    });

    capacidadSelect.addEventListener('change', function() {
        const selectedCapacidad = parseInt(this.value);

        horaSelect.innerHTML = '<option value="">{{ __('Seleccionar Hora') }}</option>';
        mesaSelect.innerHTML = '<option value="">{{ __('Seleccionar Mesa') }}</option>';

        const horasDisponibles = obtenerHorasDisponibles(selectedCapacidad);
        llenarHoras(horasDisponibles);

        horaSelect.disabled = false;
    });

    function obtenerHorasDisponibles(capacidad) {
        const horasSet = new Set();
        horarios.forEach(horario => {
            const mesa = mesas.find(m => m.id === horario.mesa_id);
            if (mesa && mesa.capacidad === capacidad && horario.fecha === fechaSelect.value) {
                horasSet.add(horario.hora);
            }
        });
        return Array.from(horasSet); // Convertir el Set a Array
    }

    function llenarHoras(horas) {
        horas.forEach(hora => {
            const option = document.createElement('option');
            option.value = hora;
            option.textContent = hora;
            horaSelect.appendChild(option);
        });
    }

    horaSelect.addEventListener('change', function() {
        const selectedHora = this.value;

        const mesasDisponibles = obtenerMesasDisponibles(selectedHora);
        llenarMesas(mesasDisponibles);

        mesaSelect.disabled = false;
    });

    function obtenerMesasDisponibles(horaSeleccionada) {
        const selectedCapacidad = parseInt(capacidadSelect.value);
        return horarios
            .filter(horario => horario.hora === horaSeleccionada && horario.fecha === fechaSelect.value)
            .map(horario => mesas.find(mesa => mesa.id === horario.mesa_id && mesa.capacidad === selectedCapacidad))
            .filter(mesa => mesa !== undefined); // Filtrar mesas no definidas
    }

    function llenarMesas(mesas) {
        mesaSelect.innerHTML = '<option value="">{{ __('Seleccionar Mesa') }}</option>';
        mesas.forEach(mesa => {
            const option = document.createElement('option');
            option.value = mesa.id;
            option.textContent = `Mesa: ${mesa.numero}`;
            mesaSelect.appendChild(option);
        });
    }

    mesaSelect.addEventListener('change', function() {
        const selectedMesaId = this.value;
        const selectedMesa = mesas.find(mesa => mesa.id == selectedMesaId);

        if (selectedMesa) {
            numPersonasInput.value = selectedMesa.capacidad;
        }
    });

    reservaForm.addEventListener('submit', function(event) {
        const selectedFecha = fechaSelect.value;
        const selectedHora = horaSelect.value;
        const selectedMesa = mesaSelect.value;

        const selectedHorario = horarios.find(horario => 
            horario.fecha === selectedFecha && 
            horario.hora === selectedHora && 
            horario.mesa_id == selectedMesa 
        );

        if (selectedHorario) {
            horarioIdInput.value = selectedHorario.id;

            // Mostrar alerta y permitir el envío del formulario
            alert('{{ __("Reserva agregada. Puede ver su correo para más detalles.") }}');
        } else {
            event.preventDefault();
            alert('{{ __("Por favor, seleccione una combinación válida de fecha, hora y mesa.") }}');
        }
    });
});
</script>

@endsection
