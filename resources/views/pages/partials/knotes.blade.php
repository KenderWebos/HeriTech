@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'knotes'])

<div class="container">
    <div class="row mt-4 justify-content-center">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-body text-center">

                    <p class="card-title">kNotes</p>

                    <form action="{{ route('guardar_nota') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control bg-dark text-white" name="title" rows="1" placeholder="Título"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control bg-dark text-white" name="content" rows="10" placeholder="Contenido"></textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary">POSTEAR</button>
                    </form>

                </div>

            </div>
        </div>

        <br>
        <div id="alerts-container">
            <!-- Aquí se mostrarán las alertas -->
        </div>

        @foreach($datos as $nota)
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">{{ $nota->user->username }}</h6>

                <hr>

                <h5 class="card-title">{{ $nota->title }}</h5>
                <p class="card-text">{!! nl2br(e($nota->content)) !!}</p>

                <hr>

                <p class="card-text">{{ $nota->created_at->locale('es')->format('l d \d\e F \d\e\l Y - h:i A') }}</p>
                <!-- <p class="card-text">Tags: {{ $nota->tags }}</p> -->

                <!-- <button class="btn btn-primary" onclick="copyToClipboard('{{ $nota->content }}')"><i class="fa fa-bicycle"></i></button> -->

                <button class="btn btn-primary clipboard-btn" data-clipboard-text="{{ $nota->content }}">
                    <i class="fa fa-copy"></i>
                </button>

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