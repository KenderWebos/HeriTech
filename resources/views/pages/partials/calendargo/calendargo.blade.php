@extends('layouts.appStatic', ['class' => ''])

@section('content')
<!-- Encabezado de la página -->
<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Descubre eventos cercanos con Calendar Go</h1>
                <p class="lead mb-4">Explora eventos emocionantes y actividades cerca de ti con nuestra app fácil de usar.</p>
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
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Agrega aquí imágenes o videos de la aplicación en acción -->
                <!-- Puedes usar un carrusel, galería o un video corto -->
            </div>
        </div>
    </div>
</section>

<!-- FAQ o Preguntas Frecuentes -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
        <div class="accordion" id="faqAccordion">
            <!-- Agrega aquí preguntas frecuentes y sus respuestas -->
        </div>
    </div>
</section>

<!-- Contacto / Soporte -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Contacto / Soporte</h2>
        <p>Para consultas o soporte adicional, contáctanos:</p>
        <p>Correo Electrónico: info@calendargo.com</p>
        <p>Redes Sociales: <a href="#">Facebook</a>, <a href="#">Twitter</a>, <a href="#">Instagram</a></p>
    </div>
</section>

<footer class="bg-secondary text-light text-center py-3">
    <div class="container">
        <!-- Enlaces de Navegación -->
        <div class="row">
            <div class="col-md-4">
                <h5>Enlaces de Navegación</h5>

                <ul class="list-unstyled">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <!-- Información de Contacto -->
            <div class="col-md-4">
                <h5>Información de Contacto</h5>
                <p>Correo Electrónico: info@calendargo.com</p>
                <p>Teléfono: +123456789</p>
                <p>Dirección: 123 Calle Principal, Ciudad</p>
            </div>
            <!-- Enlaces Legales -->
            <div class="col-md-4">
                <h5>Enlaces Legales</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Aviso Legal</a></li>
                </ul>
            </div>
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
                <p>&copy; {{ date('Y') }} Calendar Go. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>


@endsection