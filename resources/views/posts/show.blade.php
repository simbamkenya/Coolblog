@extends('layouts.master')
@section('content')

<h1>{{$post->title}}</h1>
<div>
    {{$post->body}}
</div>
<hr>
<button class="btn btn-default"><a href="/post/{{$post->id}}/edit">Edit</a></button>

@stop