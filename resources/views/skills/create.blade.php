@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <h1>Create new language entry</h1>

    {!! Form::open(['action' => 'SkillsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('skill', 'Language name')}}
        {{Form::text('skill', '', ['class' => 'form-control', 'placeholder' => 'Acronym preferred'])}}
    </div>
    <div class="form-group">
        {{Form::label('difficulty', 'Assign a difficulty value')}}
        {{Form::text('difficulty', '', ['class' => 'form-control', 'placeholder' => 'Maximum of 5, minimum of 1'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Language description')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Small description of the language (max. 500 character)'])}}
    </div>
    <div class="form-group">
        {{Form::label('info_link', 'More information link')}}
        {{Form::text('info_link', '', ['class' => 'form-control', 'placeholder' => 'Wikipedia or other trustworthy source'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@stop