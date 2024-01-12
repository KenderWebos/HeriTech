<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoModulo;

class TipoModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoModulo::create([
            'name' => 'wsp direct',
        ]);

        TipoModulo::create([
            'name' => 'radio rowdie',
        ]);

        TipoModulo::create([
            'name' => 'calendar',
        ]);

        TipoModulo::create([
            'name' => 'kNotes',
        ]);

        TipoModulo::create([
            'name' => 'kTerminal',
        ]);

        TipoModulo::create([
            'name' => 'kTask',
        ]);
    }
}
