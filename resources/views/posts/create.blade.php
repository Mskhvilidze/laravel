@extends('layouts.app')
@section('content')
@auth
    <h1>Create Post</h1>
    {!!Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST'])!!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'id' => 'editor', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info btn-md'])}}
    {!! Form::close() !!}
@endauth
@endsection

@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>    
@endsection