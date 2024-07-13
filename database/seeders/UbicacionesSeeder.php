<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UbicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([
            'nombre' => 'Gimnasio',
            'latitud' => '-36.798217652937225',
            'longitud' => '-73.05635759079199',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Biblioteca',
            'latitud' => '-36.798226244052096',
            'longitud' => '-73.05541881765998',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Periodismo',
            'latitud' => '-36.79880614208516',
            'longitud' => '-73.0553061648709',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ingeniería',
            'latitud' => '-36.797403640362816',
            'longitud' => '-73.05567899184173',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Tomas Moro',
            'latitud' => '-36.798718083712934',
            'longitud' => '-73.05388861733778',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Central',
            'latitud' => '-36.79777203806005',
            'longitud' => '-73.05815325057253',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Ciencias Económicas y Administrativas',
            'latitud' => '-36.79866658792822',
            'longitud' => '-73.0564607766401',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('ubicaciones')->insert([
            'nombre' => 'Capilla',
            'latitud' => '-36.79740686206734',
            'longitud' => '-73.0560799820812',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Educación',
            'latitud' => '-36.79831859841869',
            'longitud' => '-73.05404284435055',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla perspiciatis quos, totam odio praesentium minus aspernatur sunt dolorem libero consequuntur dignissimos iusto quasi magnam quo eligendi, in saepe ut incidunt?', 
            'id_institucion' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
