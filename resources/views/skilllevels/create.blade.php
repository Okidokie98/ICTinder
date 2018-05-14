@extends('adminlte::page')

<title>Add a new skill!</title>

@section('content')
    <h1>Create your IT skills!</h1>
    {!! Form::open(['action' => 'SkillLevelsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('skillName', 'Add a skill')}}
            {!! Form::select('id', $skilllevels, null) !!}
        </div>
        <div class="form-group">
            {{Form::label('skillDescription', 'Add a rating to the skill')}}
            {{Form::textarea('skillDescription', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Add a short description to the skill'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection