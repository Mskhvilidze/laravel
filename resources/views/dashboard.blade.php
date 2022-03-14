@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="btn btn-primary" href="{{url('posts/create')}}" role="button" 
                         aria-expanded="false">
                        Create Post
                        </a>
                        <p class = "au"></p>
                    <h3>{{ __('You Blog Posts!') }}</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th id="">Title</th>
                                <th id=""></th>
                                <th id=""></th>    
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <th id=""><a href="/laravel/public/posts/{{$post->id}}">{{$post->title}}</a>
                                <br>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                </th>
                                <th id=""><a class="btn btn-default" href="/laravel/public/posts/{{$post->id}}/edit">Edit</a></th>
                                <th id="">
                                {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </th>
                            </tr>                            
                            @endforeach
                        </table>
                    @else
                        <!--Bitte nutze jquery für diese Paragraph, nicht vergessen!-->
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
