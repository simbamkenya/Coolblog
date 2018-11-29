@extends('layouts.master')
@section('content')

<h1>Enter your post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Post title')}}
            {{Form::text('title', '', ['class' => 'form-control'])}}
            {{Form::label('body', 'Post body')}}
            {{Form::textArea('body', '', ['class' => 'form-control'])}}
            {{form::submit('submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@stop