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
        DB::table('eventos')->insert([
            'fecha' => now(),
            'titulo' => "Modelos de Negocio",
            'descripcion' => "La DINN ofrece un taller abierto sobre Modelos de negocio",
            'duracion' => 60,
            'id_ubicacion' => 17,
            'estado_solicitud' => True,
            'revisado' => True,
            'id_generador'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Crea más usuarios de ejemplo utilizando el factory
        Evento::factory()->count(30)->create();
    }
}
