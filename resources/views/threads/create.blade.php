@extends('adminlte::page')

@section('title', 'ICTinder create thread')

@section('content')
    <h1>Create Thread</h1>
    {!! Form::open(['action' => 'ThreadController@store', 'method' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('subject', 'Subject*')}}
            {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Subject'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body*')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class='form-group'>
            {{Form::label('type', 'Type')}}
            {{Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'type'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <small>* = required!</small>
    {!! Form::close() !!}
@stop