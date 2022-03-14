@extends('layouts.app')
@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="well popup2">
            <h3>
                <a class="articleBlog popup1" href="/laravel/public/posts/{{$post->id}}" data-id ="{{$post->body}}">
                {{$post->title}}

                </a>     
            </h3> 
            <small>Written on {{$post->created_at}} by <a href="{{route('invoke', $post->user_id)}}">
                                                            {{$post->user->name}}
                                                        </a>
            </small>
    </div>
    <div class="popup">
        <span class="popuptext" id="myPopup"></span>   
    </div>  
    @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endIf
@endsection