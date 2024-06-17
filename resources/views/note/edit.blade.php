@extends('layouts.app')

@section('template_title')
    Update Note
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Note</span>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('notes.update', $note->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('note.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#descriptionTextArea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
