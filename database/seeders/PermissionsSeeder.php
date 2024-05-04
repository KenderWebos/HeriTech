<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['name' => 'administrador']);
        $permission = Permission::create(['name' => 'ver informacion rapida']);

        $role->givePermissionTo($permission); // dale al rol writer el permiso de edit articles

        $user = USER::where('email', 'kenderman.8@gmail.com')->first();
        $user->assignRole( 'administrador' );
    }
}
