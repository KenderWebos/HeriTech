<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea un usuario de ejemplo
        User::create([
            'username' => 'KenderWebos',
            'email' => 'kenderman.8@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Crea más usuarios de ejemplo utilizando el factory
        // User::factory()->count(10)->create();
    }
}
