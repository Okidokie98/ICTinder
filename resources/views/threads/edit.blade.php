@extends('adminlte::page')

@section('title', 'ICTinder edit thread')

@section('content')
    <html lang="en">
    <h1>Edit Thread</h1>
    {!! Form::open(['action' => ['ThreadController@update', $thread->id], 'method' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('subject', 'Subject*')}}
            {{Form::text('subject', $thread->subject, ['class' => 'form-control', 'placeholder' => 'Subject'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body*')}}
            {{Form::textarea('body', $thread->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        <div class='form-group'>
            {{Form::label('type', 'Type')}}
            {{Form::text('type', $thread->type, ['class' => 'form-control', 'placeholder' => 'type'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <small>* = required!</small>
    {!! Form::close() !!}
@stop