<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('company_name') }}
            {{ Form::text('company_name', $setting->company_name, ['class' => 'form-control' . ($errors->has('company_name') ? ' is-invalid' : ''), 'placeholder' => 'Company Name']) }}
            {!! $errors->first('company_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $setting->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            <!-- {{ Form::label( $setting->logo ) }} -->
            <!-- {{ Form::text('logo', $setting->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }} -->
            <br>
            <img class="m-3 w-10" src="{{ asset('storage/'.$setting->logo) }}" alt="">
            {{ Form::file('logo', ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo', 'id' => 'logoInput']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- Contenedor de previsualización de la imagen -->
        <div class="form-group">
            <img id="logoPreview" src="#" alt="Previsualización del logo" style="display: none; max-width: 200px; margin-top: 10px;" />
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $setting->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('color_primary') }}
            {{ Form::color('color_primary', $setting->color_primary, ['class' => 'form-control' . ($errors->has('color_primary') ? ' is-invalid' : ''), 'placeholder' => 'Color Primary']) }}
            {!! $errors->first('color_primary', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color_secondary') }}
            {{ Form::color('color_secondary', $setting->color_secondary, ['class' => 'form-control' . ($errors->has('color_secondary') ? ' is-invalid' : ''), 'placeholder' => 'Color Secondary']) }}
            {!! $errors->first('color_secondary', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color_tertiary') }}
            {{ Form::color('color_tertiary', $setting->color_tertiary, ['class' => 'form-control' . ($errors->has('color_tertiary') ? ' is-invalid' : ''), 'placeholder' => 'Color Tertiary']) }}
            {!! $errors->first('color_tertiary', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

<script>
    console.log("la mari sushi <3")

    document.getElementById('logoInput').addEventListener('change', function(event) {
        console.log('estoy funcionanding');
        
        const [file] = event.target.files;
        if (file) {
            const preview = document.getElementById('logoPreview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>
