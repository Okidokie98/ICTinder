@extends('adminlte::page')

<title>{{$skilllevel->skillName}}</title>

@section('content')
    <a href="/skilllevels" class="btn btn-default">Go Back</a>
    <div>
        <div>
    <h1>{{$skilllevel->skillName}}</h1>
        <div>{{$skilllevel->skillLevel}}</div>
        <div>{!!$skilllevel->skillDescription!!}</div>
    <a href="/skilllevels/{{$skilllevel->id}}/edit" class="btn btn-default">Edit data</a>
        </div>
    </div>
@endsection