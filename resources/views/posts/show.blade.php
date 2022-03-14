@extends('layouts.app')
@section('content')
    <div class="card-header">
        <h1>{{$post->title}}</h1>
        {!!$post->body!!}
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> <br>
        <a href="/laravel/public/posts" type="button" class="btn btn-secondary">Go back</a>
        @auth  
        @if ($post->user_id == Auth::user()->id)
        <a href="/laravel/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id],
        'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger', 'data-id' => $post->id])}}
        {!!Form::close()!!}
        @endif  
        @endauth
    </div>
@endsection
