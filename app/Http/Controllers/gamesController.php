<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gamesController extends Controller
{
    public function index()
    {
        $games = collect([
            (object)[
                'name' => 'Infinity Meteors',
                'mainImage' => asset('images/games/IconInfinity.png'),
                'link' => 'https://play.google.com/store/apps/details?id=com.heritech.Infinity',
                'description' => 'Esquiva meteoritos y gana medallas.'
            ],

            (object)[
                'name' => 'Infinity Christmas',
                'mainImage' => asset('images/games/inf_chris_01.png'),
                'link' => 'https://kenderwebos.itch.io/infinitychristmas',
                'description' => 'Ayuda a hacer los preparativos de la celebración de navidad.'
            ],

            (object)[
                'name' => 'DUUD',
                'mainImage' => asset('images/games/duud.png'),
                'link' => 'https://v3.globalgamejam.org/2022/games/duud-1',
                'description' => 'Utiliza mecánicas de atraccion y repulsion para llegar a la meta final.'
            ],

            (object)[
                'name' => 'Cubu-beta-PC',
                'mainImage' => asset('images/games/cubu_01.png'),
                'link' => 'https://simmer.io/@KenderMan/cubu',
                'description' => 'Multiplica pollos.'
            ],

            (object)[
                'name' => 'Infinity-beta-PC',
                'mainImage' => asset('images/games/IconInfinity.png'),
                'link' => 'https://simmer.io/@KenderMan/infinity',
                'description' => 'Esquiva meteoritos y gana medallas.'
            ],

        ]);

        return view( 'pages.partials.games.games', compact('games') );
    }
}
