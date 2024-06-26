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
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'gestionar datos']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'gestionar usuarios']);

        $role->givePermissionTo($permission); // dale al rol administrador el permiso de ver informacion rapida

        $role = Role::create(['name' => 'estudiante']);
        $permission = Permission::create(['name' => '    eventos']);

        $role->givePermissionTo($permission); // dale al rol administrador el permiso de ver informacion rapida

        $user = USER::where('email', 'kenderman.8@gmail.com')->first();
        $user->assignRole( 'administrador', 'estudiante' );

        $user = User::where('email', 'admin@heritech.cl')->first();
        $user->assignRole( 'administrador', 'estudiante' );
        $role = Role::create(['name' => 'gestor de eventos']);
    }
}
