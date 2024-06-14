<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'firstname' => 'Admin',
        //     'lastname' => 'Admin',
        //     'email' => 'admin@argon.com',
        //     'password' => bcrypt('secret')
        // ]);

        $this->call(UsersSeeder::class);
        $this->call(TipoEventoSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(SettingsSeeder::class);

        \App\Models\Name::factory(10)->create();
        \App\Models\Post::factory(100)->create();
    }
}
