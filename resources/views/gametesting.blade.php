@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'GameTesting'])
<div style="display: block;">
    <center>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-8 offset-md-2 d-flex flex-column justify-content-center align-items-center bg-black text-white">
                    <p text-light><i class="ni ni-note-03 text-white text-sm opacity-10"></i> RadioRowdie FM</p>
                    <div class="selectable_song_list">
                        <ul class="list-group">

                            <div class="card">
                                <div class="card-body">
                                    <iframe frameborder="0" src="https://itch.io/embed/1326509" width="552" height="167">
                                        <a href="https://kenderwebos.itch.io/infinitychristmas">
                                            Infinity Christmas by KenderWebos
                                        </a>
                                    </iframe>
                                </div>
                            </div>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
@endsection