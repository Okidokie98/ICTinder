@extends('layouts.app')

<title>{{$skilllevel->skillName}}</title>

@section('content')
    <a href="/skilllevels" class="btn btn-default">Go Back</a>
    <div class="card">
        <div class="card-body">
    <h1>{{$skilllevel->skillName}}</h1>
        <div>{{$skilllevel->skillLevel}}</div>
        <div>{!!$skilllevel->skillDescription!!}</div>
    <hr>
    <small>Written on {{$skilllevel->created_at}}</small>
    <hr>
    <a href="/skilllevels/{{$skilllevel->id}}/edit" class="btn btn-default">Edit data</a>
    {{!!Form::open(['action' => ['SkillLevelsController@destroy', $skilllevel->id], 'method' => 'POST', 'class' => 'pull-right'])!!}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {{!!Form::close() !!}}
        </div>
    </div>
@endsection