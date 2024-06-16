

<h1>Informe de Eventos</h1>
    <form method="GET" action="{{ route('informe') }}">
        <label for="start_date">Fecha de inicio:</label>
        <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}">
        
        <label for="end_date">Fecha de fin:</label>
        <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}">

        <button type="submit">Filtrar</button>
    </form>
    <table id="eventsTable" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Duración</th>
                <th>Ubicación</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->nombre }}</td>
                    <td>{{ $event->descripcion }}</td>
                    <td>{{ $event->duracion }}</td>
                    <td>{{ $event->ubicacion }}</td>
                    <td>{{ $event->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form method="GET" action="{{ route('pdf') }}">
        <input type="hidden" name="start_date" value="{{ request('start_date') }}">
        <input type="hidden" name="end_date" value="{{ request('end_date') }}">
        <button type="submit">Generar PDF</button>
    </form>


    <!-- Incluye las bibliotecas CSS y JS de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Inicializa DataTables -->
    <script>
        $(document).ready(function() {
            $('#eventsTable').DataTable();
        });
    </script>
