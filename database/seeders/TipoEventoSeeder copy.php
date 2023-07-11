<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoModulo;

class TipoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoModulo::create([
            'nombre' => 'wsp direct',
        ]);

        TipoModulo::create([
            'nombre' => 'radio rowdie',
        ]);

        TipoModulo::create([
            'nombre' => 'kCalendar',
        ]);

        TipoModulo::create([
            'nombre' => 'kNotes',
        ]);

        TipoModulo::create([
            'nombre' => 'kTerminal',
        ]);

        TipoModulo::create([
            'nombre' => 'kTask',
        ]);
    }
}
