@extends('layout.app')

@section('content')<br>
    <h1>Posts</h1>
    <hr>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <small>Written on{{$post->created_at}}</small>
            </div><hr>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No posts found</p>
    @endif
@endsection