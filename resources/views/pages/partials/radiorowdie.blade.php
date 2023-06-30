@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'RadioRowdie FM'])
<div style="display: block;">
    <center>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-8 offset-md-2 d-flex flex-column justify-content-center align-items-center bg-black text-white">
                    <p text-light><i class="ni ni-note-03 text-white text-sm opacity-10"></i> RadioRowdie FM</p>
                    <div class="selectable_song_list">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="https://open.spotify.com/album/3CrWNG2oqbEBHKAqfZP6CO?si=swWC9Yh2QRuwIHLY8XWE6w" target="_blank">Sunset Mission</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/0UAzybip8EgY8rU6r15Sdd?si=3sZZfVqLTjKbQfImysnAYw" target="_blank">Mushroom Jazz 6</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/3LGqUhFfPQ26PLU4Ok6ZpU?si=_cwc6_B8RZ-WQB-Ap17xZg" target="_blank">Clin Doeil</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/6AmmrlB9qABCgBdr8SCLZt?si=sj-o2wS7S3a1XzP02_ZCSQ" target="_blank">On</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/7bTWcq02llIYtAF5PCFYfY?si=MopOddCrRiWBfy7S5oo6pw" target="_blank">Memorabilia</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/6KR221pzfRPqepjEffkAQP?si=OogHe6GqQTOndOOGItEoyw" target="_blank">Ancora</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/2rIdWbXPjcq8K7BCccBhhC?si=JEY9Kug_TKagaGs1wLmaMg" target="_blank">Bocanada</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/album/4gUbxHmLI5e9ygyg1iLynP?si=K8kM2M9WTemKFgaJtwj73Q" target="_blank">Headroom</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/track/1ujxjsoNvh4XgS2fUNwkZ2?si=d8a746fbf75c4780" target="_blank">Space Song</a></li>
                            <li class="list-group-item"><a href="https://open.spotify.com/artist/1TIbqr0x8HoKzKBNtNN8wf?si=fwexBORfRK2OKJZRMLLiDA" target="_blank">...</a></li>
                        </ul>
                    </div>
                    <button onclick="pickRandomList()" type="button" class="btn btn-success mt-3">RANDOM</button>
                </div>
            </div>
        </div>

        <script>
            function pickRandomList() {
                // tomaremos todos los elementos de la lista que cumplan que son hijos de la clase selectable_song_list
                var list = document.getElementsByClassName("selectable_song_list")[0].children[0].children;
                // tomaremos un numero aleatorio entre 0 y el numero de elementos de la lista
                var random = Math.floor(Math.random() * list.length);
                // tomaremos el elemento de la lista que corresponda al numero aleatorio
                var randomElement = list[random];
                // tomaremos el link del elemento aleatorio
                var link = randomElement.children[0].href;
                // abriremos el link en una nueva pestaña
                window.open(link, '_blank');
            }
        </script>
    </center>
</div>
@endsection