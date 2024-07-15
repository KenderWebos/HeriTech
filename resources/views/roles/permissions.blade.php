<h5 class="my-4">Permisos</h5>
@foreach ($permissions as $permission)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="permisos[]" value="{{ $permission->name }}"
            id="flexCheckDefault" @if (isset($permission_role) && $permission_role->contains($permission->name)) checked @endif>
        <label class="form-check-label" for="flexCheckDefault">
            {{ $permission->name }}
        </label>
    </div>
@endforeach

