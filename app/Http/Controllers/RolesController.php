<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = "";
        if($request->search) $search = $request->search;

        $roles = Role::where('name', 'LIKE', "%{$search}%")->paginate()->through(function(Role $role){
            $role->permisos = $role->permissions;
            return $role;
        });

        // $permissions = Permission::all()->pluck('name');

        // $permissions = $roles->permissions;

        return view('roles.index', compact('roles', 'search'))
            ->with('i', (request()->input('page', 1) - 1) * $roles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = new Role();
        $permissions = Permission::all();
        $size_permissions = count($permissions);
        $num_cols = round($size_permissions/3,0, PHP_ROUND_HALF_UP);
        $num_rows = round($num_cols/2,0, PHP_ROUND_HALF_UP);
        return view('roles.create', compact('rol', 'permissions', 'num_cols', 'num_rows', 'size_permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = request()->validate([
            'name' => 'required',
        ]);
        
        $role = new Role;
        $role->name = $request->name;
        $role->syncPermissions($request->permisos);
        $role->save();
        return redirect()->route('roles.index')
            ->with('success', 'Rol creado de manera satisfactoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_role = $role->permissions->pluck('name');
        return view('roles.edit', compact('role', 'permissions', 'permission_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->syncPermissions($request->permisos);
        $role->save();
        return redirect()->route('roles.index')
            ->with('success', 'Rol modificado de manera satisfactoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Rol eliminado satisfactoriamente');
    }
}
