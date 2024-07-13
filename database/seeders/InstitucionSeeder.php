<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucions')->insert([
            'nombre' => 'Universidad Católica de la Santísima Concepcion',
            'tipo' => 'Universidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
