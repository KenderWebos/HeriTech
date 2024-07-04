@extends('layouts.app')

@section('template_title')
    Crear Nueva Reserva
@endsection

@section('content')
<div class="container mx-auto p-6">
    <div class="card bg-white dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <h2 class="text-2xl font-semibold mb-4 text-center">Crear Nueva Reserva</h2>

        <form id="reservaForm" action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <input type="hidden" id="horario_id" name="horario_id">
            <input type="hidden" id="num_personas" name="num_personas" required>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="materia" class="block text-sm font-medium text-gray-700">Seleccionar Materia</label>
                    <select id="materia" class="form-select mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="">Seleccionar Materia</option>
                        @foreach ($materias as $materia)
                        <option value="{{ $materia }}">{{ $materia }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Seleccionar Fecha</label>
                    <select id="fecha" class="form-select mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required disabled>
                        <option value="">Seleccionar Fecha</option>
                        <!-- Las opciones de fecha se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>

                <div>
                    <label for="capacidad" class="block text-sm font-medium text-gray-700">Capacidad de la Mesa</label>
                    <select id="capacidad" class="form-select mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required disabled>
                        <option value="">Seleccionar Capacidad</option>
                        <!-- Las opciones de capacidad se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>

                <div>
                    <label for="hora" class="block text-sm font-medium text-gray-700">Seleccionar Hora</label>
                    <select id="hora" name="hora" class="form-select mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required disabled>
                        <option value="">Seleccionar Hora</option>
                        <!-- Las opciones de hora se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>

                <div>
                    <label for="mesa_id" class="block text-sm font-medium text-gray-700">Seleccionar Mesa</label>
                    <select id="mesa_id" name="mesa_id" class="form-select mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required disabled>
                        <option value="">Seleccionar Mesa</option>
                        <!-- Las opciones de mesa se llenarán dinámicamente con JavaScript -->
                    </select>
                </div>

                <div>
                    <label for="cliente_nombre" class="block text-sm font-medium text-gray-700">Nombre del Cliente</label>
                    <input type="text" id="cliente_nombre" name="cliente_nombre" value="{{ $user->name }}" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <div>
                    <label for="cliente_email" class="block text-sm font-medium text-gray-700">Email del Cliente</label>
                    <input type="email" id="cliente_email" name="cliente_email" value="{{ $user->email }}" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required readonly>
                </div>

                <div>
                    <label for="cliente_telefono" class="block text-sm font-medium text-gray-700">Teléfono del Cliente</label>
                    <input type="text" id="cliente_telefono" name="cliente_telefono" class="form-input mt-1 block w-full rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
                Guardar Reserva
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const horarios = @json($horarios);
    const capacidades = @json($capacidades);
    const materiaSelect = document.getElementById('materia');
    const fechaSelect = document.getElementById('fecha');
    const capacidadSelect = document.getElementById('capacidad');
    const horaSelect = document.getElementById('hora');
    const mesaSelect = document.getElementById('mesa_id');
    const reservaForm = document.getElementById('reservaForm');
    const horarioIdInput = document.getElementById('horario_id');
    const numPersonasInput = document.getElementById('num_personas');

    materiaSelect.addEventListener('change', function() {
        const selectedMateria = this.value;
        fechaSelect.disabled = true; // Deshabilitar la selección de fecha hasta que se elija una materia válida
        fechaSelect.innerHTML = '<option value="">Seleccionar Fecha</option>';
        
        if (selectedMateria) {
            Object.keys(capacidades).forEach(fecha => {
                Object.keys(capacidades[fecha]).forEach(mesa_id => {
                    if (capacidades[fecha][mesa_id] == selectedMateria) {
                        const option = document.createElement('option');
                        option.value = fecha;
                        option.textContent = fecha;
                        fechaSelect.appendChild(option);
                    }
                });
            });
            
            fechaSelect.disabled = false; // Habilitar la selección de fecha una vez que se llenen las opciones
        }
    });

    fechaSelect.addEventListener('change', function() {
        const selectedFecha = this.value;
        capacidadSelect.innerHTML = '<option value="">Seleccionar Capacidad</option>';
        horaSelect.innerHTML = '<option value="">Seleccionar Hora</option>';
        mesaSelect.innerHTML = '<option value="">Seleccionar Mesa</option>';

        if (selectedFecha && materiaSelect.value) {
            const capacidadesFecha = capacidades[selectedFecha];
            const capacidadesMateria = Object.values(capacidadesFecha).filter(capacidad => capacidad == materiaSelect.value);
            capacidadesMateria.forEach(function(capacidad) {
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

    horaSelect.addEventListener('change', function() {
        const selectedHora = this.value;

        const mesasDisponibles = obtenerMesasDisponibles(selectedHora);
        llenarMesas(mesasDisponibles);

        mesaSelect.disabled = false;
    });

    function obtenerMesasDisponibles(horaSeleccionada) {
        const selectedFecha = fechaSelect.value;
        const selectedCapacidad = parseInt(capacidadSelect.value);
        return horarios
            .filter(horario => horario.hora === horaSeleccionada && horario.fecha === selectedFecha && horario.mesa.capacidad === selectedCapacidad)
            .map(horario => horario.mesa)
            .filter(mesa => mesa !== undefined); // Filtrar mesas no definidas
    }

    function llenarMesas(mesas) {
        mesaSelect.innerHTML = '<option value="">Seleccionar Mesa</option>';
        mesas.forEach(mesa => {
            const option = document.createElement('option');
            option.value = mesa.id;
            option.textContent = `Mesa: ${mesa.numero}`;
            mesaSelect.appendChild(option);
        });
    }

    reservaForm.addEventListener('submit', function(event) {
        const selectedFecha = fechaSelect.value;
        const selectedHora = horaSelect.value;
        const selectedMesa = mesaSelect.value;

        const selectedHorario = horarios.find(horario => 
            horario.fecha === selectedFecha && 
            horario.hora === selectedHora && 
            horario.mesa.id == selectedMesa 
        );

        if (selectedHorario) {
            horarioIdInput.value = selectedHorario.id;
            numPersonasInput.value = selectedMesa.capacidad;

            // Mostrar alerta y permitir el envío del formulario
            alert('Reserva agregada. Puede ver su correo para más detalles.');
        } else {
            event.preventDefault();
            alert('Por favor, seleccione una combinación válida de fecha, hora y mesa.');
        }
    });
});
</script>

@endsection
