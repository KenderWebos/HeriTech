<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
</head>
<body>
    <h1>PDF</h1>
    <p>Informe</p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>PDF de Eventos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>PDF de Eventos</h1>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Duración</th>
                <th>Ubicación</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->fecha }}</td>
                    <td>{{ $event->descripcion }}</td>
                    <td>{{ $event->duracion }}</td>
                    <td>{{ $event->ubicacion }}</td>
                    <td>{{ $event->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
