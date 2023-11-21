@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'kNotes'])

<div class="container">
    <div class="row mt-4 justify-content-center">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">

                    <p class="card-title">kNotes</p>

                    <form action="{{ route('guardar_nota') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="title" rows="1" placeholder="Título"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="10" placeholder="Contenido"></textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary">POSTEAR</button>
                    </form>

                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">

                    <p class="card-title">
                        <i class="fas fa-bolt"></i>
                        Nota rapida
                        <i class="fas fa-bolt"></i>
                    </p>

                    <form action="{{ route('guardar_nota') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" style="display:none;" name="title" rows="1" placeholder="Título">*</textarea>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="8" placeholder="Contenido"></textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-bolt"></i>
                            POSTEAR
                            <i class="fas fa-bolt"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>

        <br>
        <div id="alerts-container">
            <!-- Aquí se mostrarán las alertas -->
        </div>

        @foreach($datos as $nota)
        <div class="card mb-3 m-4">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">{{ $nota->user->username }}</h6>

                <hr>

                <h5 class="card-title">{{ $nota->title }}</h5>
                <p class="card-text">{!! nl2br(e($nota->content)) !!}</p>

                <hr>

                <p class="card-text">{{ $nota->created_at->locale('es')->format('l d \d\e F \d\e\l Y - h:i A') }}</p>

                <!-- <p class="card-text">Tags: {{ $nota->tags }}</p> -->

                <!-- <button class="btn btn-primary" onclick="copyToClipboard('{{ $nota->content }}')"><i class="fa fa-bicycle"></i></button> -->

                <div class="row">
                    <div class="col-1">
                        <button class="btn btn-primary clipboard-btn" data-clipboard-text="{{ $nota->content }}">
                            <i class="fa fa-copy"></i>
                        </button>
                    </div>
                    <div class="col-1">
                        <form action="{{ route('notas.destroy', $nota->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

<script>
    function copyToClipboard(text) {
        const el = document.createElement('textarea');
        el.value = text;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
        alert('Texto copiado al portapapeles');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var clipboardBtns = document.querySelectorAll('.clipboard-btn');
        var clipboard = new ClipboardJS(clipboardBtns);

        clipboard.on('success', function(e) {
            e.clearSelection();
            showToast('Texto copiado al portapapeles');
        });

        function showToast(message) {
            var toast = document.createElement('div');
            toast.className = 'toast';
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(function() {
                document.body.removeChild(toast);
            }, 2000);
        }
    });
</script>