@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <h1>Edit selected language</h1>

    {!!Form::model($skills, array('method' => 'PUT', 'route' => array('skills.update', $skills->id)))!!}
    <div class="form-group">
        {{Form::label('skill', 'Language name (required)')}}
        {{Form::text('skill', $skills->skill, ['class' => 'form-control', 'placeholder' => 'Acronym preferred'])}}
    </div>
    <div class="form-group">
        {{Form::label('difficulty', 'Assign a difficulty value (required)')}}
        {{Form::text('difficulty', $skills->difficulty, ['class' => 'form-control', 'placeholder' => 'Maximum of 5, minimum of 1'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Language description (required)')}}
        {{Form::textarea('body', $skills->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Small description of the language (max. 500 character)'])}}
    </div>
    <div class="form-group">
        {{Form::label('info_link', 'More information link (required)')}}
        {{Form::text('info_link', $skills->info_link, ['class' => 'form-control', 'placeholder' => 'Wikipedia or other trustworthy source'])}}
    </div>
    {{Form::hidden('_hidden', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@stop