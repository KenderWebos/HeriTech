@section('content')
    <center>

        <div class="module">
            <h2>Terminal</h2>
            
            <form action="view\public\js\functions.js">
                <textarea class="terminal" name="terminal" id="terminal" cols="30" rows="10" spellcheck=”false“></textarea>
            </form>

            <div style="width:50%" class="alert alert-secondary" role="alert">
                <p><h3><strong>SISTEMA OPERATIVO</strong></h3> Un sistema operativo es el conjunto de programas de un sistema informático que gestiona los recursos de hardware y provee servicios a los programas de aplicación de software. Estos programas se ejecutan en modo privilegiado respecto de los restantes.​</p>
            </div>
        </div>


        <div class="decorations">
            <img id="anime_dance" class="terminal-image" src="view\public\images\cd.gif" alt="">
        </div>

    </center>
    
    <script src="view/public/js/js_modules.js"></script>
    <script src="view/public/js/terminal.js"></script>
@endsection