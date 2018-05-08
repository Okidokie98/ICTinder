@extends('layouts.app')

<title>Edit a skill!</title>

@section('content')
    <h1>Edit your IT skills!</h1>
    {!! Form::open(['action' => ['SkillLevelsController@update', $skilllevel->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('skillName', 'Add a name to the skill')}}
            {{Form::text('skillName', $skilllevel->skillName, ['class' => 'form-control', 'placeholder' => 'Add a name to the skill'])}}
        </div>
        <div class="form-group">
            {{Form::label('skillDescription', 'Add a short description to the skill')}}
            {{Form::textarea('skillDescription', $skilllevel->skillDescription, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Add a short description to the skill'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection