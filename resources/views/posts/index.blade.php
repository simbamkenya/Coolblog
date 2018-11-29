@extends('layouts.master')
@section('content')

<h1>These are our posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
             <div class="well">
             <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
             <small>Written on{{$post->created_at}}</small>
             </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif

@stop