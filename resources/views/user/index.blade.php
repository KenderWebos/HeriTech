@extends('layouts.app', ["title_html" => "Usuarios", "title"=>'Usuarios', 'breadcrumbs'=>[["nombre"=>"Usuario", "ruta"=>"users.index"]]])


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tabla') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Username</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Roles</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge rounded-pill bg-primary">{{ $role }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                            <td>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#rolesModify"
                                                        onClick="retrieve_user_data({{Auth::user()->id}} ,{{ $user }}, {{ $user->roles }})">
                                                        Modificar Roles
                                                    </button>
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('users.show', $user->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('users.edit', $user->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>

    <div class="modal fade" id="rolesModify" tabindex="-1" aria-labelledby="rolesModifyLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rolesModifyLabel">Modificar Roles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>Roles:</span>
                    <form action="{{ route('users.modify_rol') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id" class="id_user" value="">
                        @foreach ($roles as $role)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input rolesCheck" type="checkbox" id="rol_{{ $role->id }}" name="roles[]"
                                    value="{{ $role->name }}">
                                <label class="form-check-label" for="rol_{{ $role->id }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var rolesModify = document.getElementById('rolesModify')

        function retrieve_user_data(admin,user, roles) {
            console.log(user.roles)
            var modalBodyInput = rolesModify.querySelector('.modal-body .id_user')
            modalBodyInput.value = user.id
            $(".rolesCheck").removeAttr('checked')
            $("#rol_1").removeAttr("disabled");
            user.roles.forEach(role => {
                console.log("Role numero "+role.id)
                $("#rol_"+role.id).attr("checked", true)
            });
            if(user.id == admin){
                $("#rol_1").attr("disabled", true);
            }
        }
    </script>
@endsection
