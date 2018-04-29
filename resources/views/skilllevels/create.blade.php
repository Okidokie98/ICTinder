@extends('layouts.app')

@section('content')
    <h1>Create your IT skills!</h1>
    {!! Form::open(['action' => 'SkillLevelsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('skillName', 'Add a name to the skill')}}
            {{Form::text('skillName', '', ['class' => 'form-control', 'placeholder' => 'Add a name to the skill'])}}
        </div>
        <div class="form-group">
            {{Form::label('skillDescription', 'Add a short description to the skill')}}
            {{Form::textarea('skillDescription', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Add a short description to the skill'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection