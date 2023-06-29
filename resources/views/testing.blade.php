@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div>
        <h1>Hooola Carlita</h1>

        @include('layouts.footers.auth.footer')
    </div>
@endsection