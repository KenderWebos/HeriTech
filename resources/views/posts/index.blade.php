@extends('layouts.appStatic', ['class' => ''])

@section('title', 'HeriTech')

@section('content')

<div class="">
    <div class="">
        <div class="">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <a class="navbar-brand" href="/"> <img class='navbar-icon' src="{{asset('images/heritech/ht_logo.png')}}" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>

            <center>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="#">{{$post->title}}</a></td>
                            <td>{{$post->user->username}}</td>
                            <td><button class="btn btn-outline-secondary">EDITAR</button></td>
                            <td>
                                <form action=" {{ route('posts.destroy', $post->id) }} " method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="ELIMINAR" onclick="return confirm('Desea eliminar?')" class="btn btn-outline-danger"></input>
                                </form>

                                
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </center>

            <!-- Footer -->
            <footer class="bg-dark text-white text-center py-3">
                <p>© Copyright HeriTech. All Rights Reserved</p>
            </footer>

            <!-- Enlace a Bootstrap JS y jQuery (Requeridos para el funcionamiento de Bootstrap) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>

</div>