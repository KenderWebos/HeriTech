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
            'nombre' => 'Gimnasio 🤸🏽‍♀️🏌🏻‍♂️',
            'latitud' => '-36.798217652937225',
            'longitud' => '-73.05635759079199',
            'descripcion' => '🚩 https://www.instagram.com/deportesucsc/ 🚩 https://www.instagram.com/p/C5okvYqvVGJ/?img_index=1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Biblioteca 📖​📚​',
            'latitud' => '-36.798226244052096',
            'longitud' => '-73.05541881765998',
            'descripcion' => '🚩 https://www.sibucsc.cl/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Periodismo 📰📜',
            'latitud' => '-36.79880614208516',
            'longitud' => '-73.0553061648709',
            'descripcion' => '🚩 Facultad de Periodismo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ingeniería ⚙️🏗️',
            'latitud' => '-36.797403640362816',
            'longitud' => '-73.05567899184173',
            'descripcion' => '🚩 https://www.instagram.com/facultadingenieriaucsc/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Tomas Moro 🗣️📚',
            'latitud' => '-36.798718083712934',
            'longitud' => '-73.05388861733778',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Edificio Central 🏢✍️',
            'latitud' => '-36.79777203806005',
            'longitud' => '-73.05815325057253',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Ciencias Económicas y Administrativas 💼📊',
            'latitud' => '-36.79866658792822',
            'longitud' => '-73.0564607766401',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Capilla ⛪',
            'latitud' => '-36.79740686206734',
            'longitud' => '-73.0560799820812',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Educación 👩‍🏫📘',
            'latitud' => '-36.79831859841869',
            'longitud' => '-73.05404284435055',
            'descripcion' => '🚩?',
            'id_institucion' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Medicina 🩺⚕️',
            'latitud' => '-36.79774375229419',
            'longitud' => '-73.0547476835958',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Estudios Teológicos y Filosofía 📖✝️',
            'latitud' => '-36.79808345535758',
            'longitud' => '-73.05479528055814',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Facultad de Ciencias 🔬🧪',
            'latitud' => '-36.79787411596616',
            'longitud' => '-73.05570048318586',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Casino 😋​🍔​',
            'latitud' => '-36.79846365714816',
            'longitud' => '-73.05691074715712',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Gestion Financiera 🧐​💲​​',
            'latitud' => '-36.79887594620405',
            'longitud' => '-73.05458729824358',
            'descripcion' => '🚩 Abierto de Lunes a Viernes de 9:00 AM a 1:00 PM',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Cancha Futbol UCSC ⚽​​​',
            'latitud' => '-36.798140253149754',
            'longitud' => '-73.05865436064585',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Direccion de innovacion 💡​​​',
            'latitud' => '-36.79672196617284',
            'longitud' => '-73.06001208287155',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ubicaciones')->insert([
            'nombre' => 'Cowork innovacion UCSC ☕🛠️​​​',
            'latitud' => '-36.79697313211106',
            'longitud' => '-73.060030680764',
            'descripcion' => '🚩?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
