<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <!-- <img src="{{ asset('images/heritech/ht_logo.png') }}" alt="HeriTech Logo"> -->
        </a>
    </div>
</nav>

<!-- Content -->
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h1>Kevin Campos</h1>
        </div>
        <div class="card-body">
            <h2>Perfil Profesional</h2>
            <p>Aquí puedes incluir una breve descripción sobre tus habilidades, experiencia y objetivos profesionales.</p>
            <h2>Educación</h2>
            <ul>
                <li>Nombre del título - Universidad, Año</li>
                <!-- Repite para cada título -->
            </ul>
            <h2>Experiencia Laboral</h2>
            <p>Nombre del Puesto - Empresa, Fecha de inicio - Fecha de finalización (o "Presente" si aún trabajas allí)</p>
            <ul>
                <li>Responsabilidad 1</li>
                <li>Responsabilidad 2</li>
                <!-- Repite para cada puesto -->
            </ul>
        </div>
    </div>
</div>

<!-- Footer -->
<!-- <footer class="bg-dark text-white text-center py-3">
    <p>© Copyright HeriTech. All Rights Reserved 2024</p>
</footer> -->

<!-- Bootstrap JS y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
