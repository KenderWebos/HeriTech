<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEvento;

class TipoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEvento::create([
            'nombre' => 'Personal',
        ]);

        TipoEvento::create([
            'nombre' => 'Universidad',
        ]);

        TipoEvento::create([
            'nombre' => 'Grupo de amigos',
        ]);
    }
}
