<h5 class="my-4">Permisos</h5>
@foreach ($permissions as $permission)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="permisos[]" value="{{ $permission->name }}"
            id="permiso_{{$permission->id}}" @if (isset($permission_role) && $permission_role->contains($permission->name)) checked @endif>
        <label class="form-check-label" for="permisos_{{$permission->id}}">
            {{ $permission->name }}
        </label>
    </div>
@endforeach

