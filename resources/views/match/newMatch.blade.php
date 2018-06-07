@extends('adminlte::page')

@section('title', 'Find Match')

@section('content_header')
    <h1>Find Match</h1>
@stop

@section('content')
{!! Form::open(['method' => 'POST','route' => ['findmatch.store',$id]]) !!}
{{Form::label('Language name', 'Select the skill you want to learn:')}}
<select class="form-control" name="skill"> 
@foreach ($skills as $skill)
<option value="{{$skill->skill}}">{{$skill->skill}}</option>
@endforeach
</select>
<button type="submit" class="btn btn-primary">find match</button>
{!! Form::close() !!}
@stop