@extends('layouts.master')
@section('content')

<h1>Edit your post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Post title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control'])}}
            {{Form::label('body', 'Post body')}}
            {{Form::textArea('body', $post->body, ['class' => 'form-control'])}}
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@stop
