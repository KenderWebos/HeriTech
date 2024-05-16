<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('evento')->insert([
        //     'fecha' => now(),
        //     'titulo' => 'some random event',
        //     'descripcion' => 'some random event content',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // Crea más usuarios de ejemplo utilizando el factory
        Evento::factory()->count(10)->create();
    }
}
