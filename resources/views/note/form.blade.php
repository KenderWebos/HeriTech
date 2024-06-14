<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $note->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $note->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('author') }}
            {{ Form::text('author', $note->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Author']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('images') }}
            {{ Form::text('images', $note->images, ['class' => 'form-control' . ($errors->has('images') ? ' is-invalid' : ''), 'placeholder' => 'Images']) }}
            {!! $errors->first('images', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tags') }}
            {{ Form::text('tags', $note->tags, ['class' => 'form-control' . ($errors->has('tags') ? ' is-invalid' : ''), 'placeholder' => 'Tags']) }}
            {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>