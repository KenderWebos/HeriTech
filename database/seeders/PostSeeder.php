<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Infinity',
                'description' => 'Esquiva meteoritos y gana medallas completando misiones. ( ͡° ͜ʖ ͡°)',
                'url' => 'https://play.google.com/store/apps/details?id=com.heritech.Infinity',
                'image_url' => 'view\public\images\games\infinity_meteors.webp',
                'category_id' => 1, // Cambia esto según la categoría correspondiente en tu base de datos
                'tags' => json_encode(['game', 'mission', 'medals']),
                'publication_date' => now(),
                'rating' => 4.5,
                'price' => 0.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Infinity Christmas',
                'description' => 'Ayuda a preparar la navidad realizando misiones para conseguir lo que necesites. (｡>﹏<｡)',
                'url' => 'https://kenderwebos.itch.io/infinitychristmas',
                'image_url' => 'view\public\images\games\infinity_christmas.png',
                'category_id' => 1, // Cambia esto según la categoría correspondiente en tu base de datos
                'tags' => json_encode(['game', 'christmas', 'missions']),
                'publication_date' => now(),
                'rating' => 4.2,
                'price' => 0, // Cambia el precio si es gratuito
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cubu',
                'description' => 'Multiplica pollos. (・へ・).',
                'url' => 'https://simmer.io/@KenderMan/cubu',
                'image_url' => 'view\public\images\games\IconCubu.png',
                'category_id' => 1, // Cambia esto según la categoría correspondiente en tu base de datos
                'tags' => json_encode(['game', 'chicken', 'strategy']),
                'publication_date' => now(),
                'rating' => 3.8,
                'price' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Roboto',
                'description' => 'Utiliza las mecanicas de serpararse y unirse para resolver los puzzles, gamejam: enlaces. (ㆆ_ㆆ)',
                'url' => '#',
                'image_url' => 'view\public\images\games\IconRoboto.png',
                'category_id' => 1, // Cambia esto según la categoría correspondiente en tu base de datos
                'tags' => json_encode(['game', 'puzzle', 'unity']),
                'publication_date' => now(),
                'rating' => 4.0,
                'price' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DUUD',
                'description' => 'Anclate o impulsate con los obstaculos, gamejam: duality. ¯\_( ͡❛ ‿‿ ͡❛)_/¯',
                'url' => 'https://globalgamejam.org/2022/games/duud-1',
                'image_url' => 'view\public\images\games\duud.png',
                'category_id' => 1, // Cambia esto según la categoría correspondiente en tu base de datos
                'tags' => json_encode(['game', 'platformer', 'physics']),
                'publication_date' => now(),
                'rating' => 4.1,
                'price' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
