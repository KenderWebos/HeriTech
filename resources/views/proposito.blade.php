@extends('layouts.app')

@section('title', 'HeriTech')

@section('content')

@include('layouts.navbars.auth.topnav', ['title' => 'Proposito'])

<div class="col-6">
    <div class="card text-center">
        <div class="card-body">

            <form action="{{ route('roles.index') }}" method="GET" class="form-inline">
                <div class="input-group mb-2">
                    <input class="form-control" type="text" name="search" placeholder="tu nombre" aria-label="Buscar">
                </div>
            </form>


            <pre>
                Que quieres aportar?
                > que es lo que mejor sabes hacer?, que dones tienes para compartir con los demas?, piensa en las cosas que tus amigso, familiares y colegas destacan de ti.
                **
                dar ideas avanzadas
                hacer crecer proyectos
                analizar informacion
                empoderar a otros
                entregar alegria
                ayudar a superar obstaculos
                construir objetos
                enseñar a otras personas
                generar dialogo
                investigar sobre temas
                generar confianza
                hacer que las cosas fucionen
                diseñar objetos
                organizar cosas
                encontrar recursos
                resolver problemas
                **

                ---

                que te apasiona?
                > que le da significado a tu vida?, que es lo que mas te inspira?
                **
                ciencia
                comida
                cultura
                vida social
                musica
                sentimientos
                crear objetos
                arte
                literatura
                deporte
                bienestar
                naturaleza
                finanzas
                innovacion
                **

                ___

                donde quieres impactar?
                > donde te gustaria generar un cambio?
                **
                la situacion de los niños
                tu comunidad
                el medio ambiente
                tus amigos
                los menos afortunados
                tu familia
                el cuidado de los animales
                tu trabajo
                tu pais
                el desarrollo personal
                **

                ---

                que te importa?
                > conocer lo que valoras te permite dedicar tiempo y energia a lo que realmente importa
                **
                pertenencia
                excelencia
                compasion
                optimismo
                generosidad
                relaciones humanas
                valores familiares
                satisfacer la curiosidad
                libertad
                salud personal
                honestidad
                seguridad
                exito
                vivir contento
                **

                ---

                como te quieres sentir?
                > como te gustaria sentirte en lo que hagas dia a dia?
                **
                apreciado
                emprendedor
                desafiado
                escuchado
                consciente
                cretivo
                contento
                querido
                conectado
                menos sobrepasado
                cooperador
                ser menos negativo
                **

                ---

                declaracion de proposito
                > reconocer tus ones, las cosas que te apasionan, tus valores y hacia donde quieres llegar te ha ayudado a conocerte mejor.

                ahora completa esta declaracion escogiendo los tres conceptos mas importantes de los que seleccionaste para responder cada pregunta

                **
                Quiero aportar a la sociedad en __ y __
                ya que me apasiona __ y __
                ademas, quiero generar un impacto en __ y __
                porque valoro y me importa __ y __
                esto me permitira sentirme __ y __
            </pre>

        </div>
    </div>
</div>

@endsection