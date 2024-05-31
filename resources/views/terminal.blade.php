@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<style>
    .terminal {
        width: 50%;
        height: 500px;
        background-color: black;
        color: rgb(49, 253, 49);

        /* background-image: url("view\public\images\heritech\wallpaper_heritech.png"); */
    }

    .terminal-image {
        /* background-color: red; */
        /* top: 50%; */
        opacity: 50%;
        translate: 0%;
        /* position: fixed; */
        display: block;
    }

    .switch-container {
        width: 20%;
    }

    .login_container {
        padding: 80px;
        background-color: black;
    }

    .view_image {
        width: 50%;
    }

    .db_module_container {
        display: flex;
        padding: 20px;
    }

    .db_module_container_element {
        padding: 50px;
    }

    .simplecube {
        border-radius: 8px;
        width: 8px;
        height: 500px;
        background-color: rgb(50, 50, 50);
    }

    .presentation {
        color: white;
        padding: 40px;
        background-color: rgb(44, 44, 44);
    }

    .knote_container {
        padding: 20px;
        background-color: gray;
    }

    .kImg {
        width: 40%;
    }

    .kSidebar {
        background-color: red;
        width: 10%;
        top: 0px;
        display: inline-block;
    }

    .page_container {
        width: 80%;
        display: inline-block;
    }

    .userpanel {
        display: flex;
        background-color: rgb(44, 44, 44);
        border-radius: 8px;
        padding: 8px;
        color: white;
    }

    .userpanel_image {
        width: 50px;
        height: 50px;
        border: 3px solid white;
        border-radius: 50%;
    }
</style>

<center>

    <div class="module">
        <h2>Terminal</h2>

        <form action="view\public\js\functions.js">
            <textarea class="terminal" name="terminal" id="terminal" cols="30" rows="10" spellcheck=”false“></textarea>
        </form>

        <div style="width:50%" class="alert alert-secondary" role="alert">
            <p>
            <h3><strong>SISTEMA OPERATIVO</strong></h3> Un sistema operativo es el conjunto de programas de un sistema informático que gestiona los recursos de hardware y provee servicios a los programas de aplicación de software. Estos programas se ejecutan en modo privilegiado respecto de los restantes.​</p>
        </div>
    </div>


    <div class="decorations">
        <img id="anime_dance" class="terminal-image" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/eab6cc47-e9ea-4310-88ed-ba829f8f32f1/d953i0n-98b3962e-cd58-489e-9352-05a719095f10.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2VhYjZjYzQ3LWU5ZWEtNDMxMC04OGVkLWJhODI5ZjhmMzJmMVwvZDk1M2kwbi05OGIzOTYyZS1jZDU4LTQ4OWUtOTM1Mi0wNWE3MTkwOTVmMTAuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.IhqHC2HDTVeHTbKZVo4JjUlecBddrUHowsg3lDS-Nr8" alt="">
    </div>

</center>

<script>
    console.log("running script {terminal.js}");

    terminal = document.getElementById("terminal");

    // terminal.value += "Heritech Windows [Versión 10.0.19044.2130]\n(c) Heritech Corporation. Todos los derechos reservados.\nC:>";

    terminal.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();

            console.log("Nueva linea");
            var command = terminal.value;
            command = command.split("\n");

            command = command[command.length - 2];
            console.log('el comando es: ' + command);

            interpreter(command);
        }
    });

    arrayCommands = ["wsp", "calendar", "shoping", "dance", "help", "cls"];
    anime_dance = true;

    function interpreter(argument) {
        terminal.value += "> ";
        switch (argument) {
            case "wsp":
                terminal.value += `abriendo ${argument}`;
                window.open("http://localhost/index.php?p=wsp_direct");
                break;
            case "calendar":
                terminal.value += `abriendo ${argument}`;
                window.open("http://localhost/index.php?p=/modules/databases/kcalendar");
                break;
            case "shoping":
                terminal.value += `abriendo ${argument}`;
                window.open("https://www.facebook.com/marketplace/?ref=app_tab");
                window.open("https://new.yapo.cl/biobio/computadores_electronica?ca=9_s&l=0&w=1&cmn=");
                break;
            case "dance":
                terminal.value += `dance: ${!anime_dance}`;
                anime_dance = !anime_dance;
                console.log(`dance: ${anime_dance}`);
                if (anime_dance) {
                    document.getElementById("anime_dance").style.display = "block";
                } else {
                    document.getElementById("anime_dance").style.display = "none";
                }
                break;
            case "help":
                terminal.value += `comandos disponibles: \n`;
                printCommands();
                break;
            case "cls":
                terminal.value = '';
                break;
            case "clear":
                terminal.value = '';
                break;
            default:
                terminal.value += `"${argument}" no se reconoce como un comando interno o externo.`;
        }

        if (argument != "cls" && argument != "clear") {
            terminal.value += "\n"
        };
    }

    function printCommands() {
        for (let index = 0; index < arrayCommands.length; index++) {
            terminal.value += "        " + arrayCommands[index] + "\n";
        }
    }
</script>

@endsection