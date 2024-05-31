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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    <!-- <div class="container">
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
                </ul>
                <h2>Experiencia Laboral</h2>
                <p>Nombre del Puesto - Empresa, Fecha de inicio - Fecha de finalización (o "Presente" si aún trabajas allí)</p>
                <ul>
                    <li>Responsabilidad 1</li>
                    <li>Responsabilidad 2</li>
                </ul>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="card">
            <img src="{{ asset('images/portafolio/kevincampos_cv.png') }}" alt="some curriculum vitae image">

            <div class="list-group mt-4">
                <a href="#" class="list-group-item list-group-item-action active bg-secondary border-secondary">
                    Referencias
                </a>
                <a href="https://github.com/KenderWebos?tab=repositories" target="_blank" class="list-group-item list-group-item-action">GitHub</a>
                <a href="http://kevincampos.cl/" target="_blank" class="list-group-item list-group-item-action">Proyectos Personales</a>
            </div>

        </div>
    </div>

    <div class="container border p-5">
        <div class="row">
            <div class="col-3">
                <h2>Kevin Campos Venegas</h2>
                <img class="rounded-circle" style="width:250px" src="{{ asset('img/team-2.jpg') }}" alt="some personal profile image">

                <h3><strong>Detalles Personales</strong></h3>

                <div class="info-item">
                    <h4><strong>Nombre</strong></h4>
                    <h4>Kevin Campos Venegas</h4>
                </div>

                <div class="info-item">
                    <h4><strong>Correo</strong></h4>
                    <h4>kcamposing@gmail.com</h4>
                </div>

                <h3><strong>Especialidades</strong></h3>
                <h4><strong>Habilidad 01</strong></h4>
                <h4><strong>Habilidad 02</strong></h4>
                <h4><strong>Habilidad 03</strong></h4>

            </div>
            <div class="col-9">
                <p>Estudiante de Ingenieria Civil Informatica en la Universidad Catolica de la Santisima Concepcion,
                    con una solida formacion en desarrollo de software y una pasion por la resolucion de problemas. Poseo
                    habilidades interpersonales que me permiten colaborar eficazmente en equipos multidiciplinarios. Busco
                    oportunidades que me permitan aplicar y ampliar mis conocimientos, asi como contribuir al crecimiento personal
                    y profesional.</p>
                <hr>

                <h3><strong>Estudios y certificaciones</strong></h3>

                <div class="info-item-time">
                    <h4>Title</h4>
                    <p>12 - 11 - 1998</p>
                    <p>institucion</p>
                </div>

                <hr>

                <h3><strong>Experiencia laboral</strong></h3>

                <div class="info-item-time">
                    <h4>Title</h4>
                    <p>12 - 11 - 1998</p>
                    <p>institucion</p>
                </div>

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