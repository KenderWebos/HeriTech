<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="text" id="fecha" name="fecha"
                class="js-datepicker form-control {{ $errors->has('fecha') ? 'is-invalid' : '' }}" value="{{ old('fecha') }}" required>
            @error('fecha')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo"
                class="form-control {{ $errors->has('titulo') ? 'is-invalid' : '' }}" aria-label="Ej. 20"
                placeholder="Ej. Feria Tecnológica" value="{{ old('titulo') }}" required>
            @error('titulo')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion"
                class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" aria-label="Ej. 20"
                placeholder="Una descripción general del evento" value="{{ old('descripcion') }}" required>
            @error('descripcion')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duracion" class="form-label">Duración</label>
            <div class="input-group mb-3">
                <input type="number" id="duracion" name="duracion"
                    class="form-control {{ $errors->has('duracion') ? 'is-invalid' : '' }}" aria-label="Ej. 20"
                    placeholder="Ej. 20" value="{{ old('duracion') }}" required>
                <span class="input-group-text">Minutos</span>
            </div>
            @error('duracion')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="id_ubicacion" class="form-label">Ubicación</label>
            <select class="form-control form-control-lg {{ $errors->has('id_ubicacion') ? ' is-invalid' : '' }}"
                id="id_ubicacion" name="id_ubicacion" required>
                <option>Seleccione una ubicación</option>
                @foreach ($ubicaciones as $ubicacion)
                    <option value="{{ $ubicacion->id }}" {{ old('id_ubicacion') == $ubicacion->id ? 'selected' : '' }}>
                        {{ $ubicacion->nombre }}</option>
                @endforeach
            </select>

            @error('id_ubicacion')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</div>

@section('css')
<link rel="stylesheet" href="{{asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

@endsection