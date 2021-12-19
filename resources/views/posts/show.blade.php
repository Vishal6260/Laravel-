@extends('layout.app')

@section('content')<br>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
        <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <a href="/posts{{$post->id}}/delete" class="btn btn-default">Delete</a>
@endsection