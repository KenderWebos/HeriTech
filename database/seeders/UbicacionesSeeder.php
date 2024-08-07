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
            'nombre' => 'Facultad de Comunicacion, Historia y Ciencias Sociales',
            'latitud' => '-36.79829893791028,',
            'longitud' => '-73.05454607358608',
            'icono_primario' => '💬',
            'icono_secundario' => '📜',
            'codigo' => '1',
            'descripcion' => '🚩',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Escuela de Periodismo',
            'latitud' => '-36.79880614208516',
            'longitud' => '-73.0553061648709',
            'codigo' => '2',
            'icono_primario' => '📰',
            'icono_secundario' => '​📜',
            'descripcion' => '🚩 Escuela de Periodismo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ciencias',
            'codigo' => '3',
            'latitud' => '-36.79787411596616',
            'longitud' => '-73.05570048318586',
            'descripcion' => '🚩?',
            'icono_primario' => '🔬',
            'icono_secundario' => '​🧪',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ingeniería',
            'latitud' => '-36.797403640362816',
            'longitud' => '-73.05567899184173',
            'codigo' => '4',
            'icono_primario' => '⚙️',
            'icono_secundario' => '​🏗️',
            'descripcion' => '🚩 https://www.instagram.com/facultadingenieriaucsc/',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('ubicaciones')->insert([
            'nombre' => 'DARA',
            'codigo' => '5',
            'latitud' => '-36.79799257474181',
            'longitud' => '-73.05664553617568',
            'icono_primario' => '🖥️',
            'icono_secundario' => '​​💻​',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Medicina',
            'codigo' => '6',
            'latitud' => '-36.79774375229419',
            'longitud' => '-73.0547476835958',
            'descripcion' => '🚩?',
            'icono_primario' => '🩺',
            'icono_secundario' => '​⚕️',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ciencias Económicas y Administrativas',
            'codigo' => '7',
            'latitud' => '-36.79866658792822',
            'longitud' => '-73.0564607766401',
            'icono_primario' => '💼',
            'icono_secundario' => '​📊',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Biblioteca Central',
            'codigo' => '9',
            'latitud' => '-36.798226244052096',
            'longitud' => '-73.05541881765998',
            'icono_primario' => '📚',
            'icono_secundario' => '📖',
            'descripcion' => '🚩 https://www.sibucsc.cl/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Estudios Teológicos y Filosofía',
            'codigo' => '10',
            'latitud' => '-36.79808345535758',
            'longitud' => '-73.05479528055814',
            'descripcion' => '🚩?',
            'icono_primario' => '✝️',
            'icono_secundario' => '📖​',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Educación',
            'latitud' => '-36.79831859841869',
            'codigo' => '11',
            'longitud' => '-73.05404284435055',
            'descripcion' => '🚩?',
            'icono_primario' => '👩‍🏫',
            'icono_secundario' => '​📘',
            'id_institucion' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Tomás Moro',
            'codigo' => '13',
            'latitud' => '-36.798718083712934',
            'longitud' => '-73.05388861733778',
            'icono_primario' => '🌐​',
            'icono_secundario' => '​🎓',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Gimnasio',
            'latitud' => '-36.798217652937225',
            'longitud' => '-73.05635759079199',
            'icono_primario' => '💪🏻',
            'icono_secundario' => '🤸🏽‍♀️',
            'icono_terciario' => '🏌🏻‍♂️',
            'descripcion' => '🚩 https://www.instagram.com/deportesucsc/ 🚩 https://www.instagram.com/p/C5okvYqvVGJ/?img_index=1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Central',
            'latitud' => '-36.79777203806005',
            'longitud' => '-73.05815325057253',
            'codigo' => '14',
            'icono_primario' => '🏢',
            'icono_secundario' => '​✍️',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Casino',
            'codigo' => '15',
            'latitud' => '-36.79846365714816',
            'longitud' => '-73.05691074715712',
            'descripcion' => '🚩?',
            'icono_primario' => '🍔',
            'icono_secundario' => '😋​',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Gestión Financiera',
            'latitud' => '-36.79887594620405',
            'longitud' => '-73.05458729824358',
            'descripcion' => '🚩 Abierto de Lunes a Viernes de 9:00 AM a 1:00 PM',
            'icono_primario' => '💲',
            'icono_secundario' => '​​🧐',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Capilla',
            'latitud' => '-36.79740686206734',
            'longitud' => '-73.0560799820812',
            'icono_primario' => '⛪',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Cancha Futbol UCSC',
            'latitud' => '-36.798140253149754',
            'longitud' => '-73.05865436064585',
            'descripcion' => '🚩?',
            'icono_primario' => '⚽',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Dirección de innovación',
            'latitud' => '-36.79672196617284',
            'longitud' => '-73.06001208287155',
            'descripcion' => '🚩?',
            'icono_primario' => '💡',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Cowork innovacion UCSC',
            'latitud' => '-36.79697313211106',
            'longitud' => '-73.060030680764',
            'icono_primario' => '☕',
            'icono_secundario' => '​​🛠️',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
