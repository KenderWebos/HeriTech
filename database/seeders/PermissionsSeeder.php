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

        $permission_evento1 = Permission::create(['name' => 'Ver eventos']);
        $permission_evento4 = Permission::create(['name' => 'Gestionar Eventos']);
        $permission_evento2 = Permission::create(['name' => 'Crear solicitud de eventos']);
        $permission_evento3 = Permission::create(['name' => 'Gestor solicitud de eventos']);

        $role = Role::create(['name' => 'administrador']);

        $permission = Permission::create(['name' => 'ver informacion rapida']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'gestionar datos']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'gestionar usuarios']);

        $role->givePermissionTo($permission); // dale al rol administrador el permiso de ver informacion rapida

        $role->givePermissionTo($permission_evento1);
        $role->givePermissionTo($permission_evento2);
        $role->givePermissionTo($permission_evento3);
        $role->givePermissionTo($permission_evento4);
        $role = Role::create(['name' => 'estudiante']);

        $role->givePermissionTo($permission_evento1); // dale al rol administrador el permiso de ver informacion rapida

        $user = USER::where('email', 'kenderman.8@gmail.com')->first();
        $user->assignRole('administrador', 'estudiante');

        $user = User::where('email', 'admin@heritech.cl')->first();
        $user->assignRole('administrador', 'estudiante');
        $role = Role::create(['name' => 'gestor de eventos']);
        $role->givePermissionTo($permission_evento1);
        $role->givePermissionTo($permission_evento2);
        $role->givePermissionTo($permission_evento3);
        $role->givePermissionTo($permission_evento4);

    }
}
