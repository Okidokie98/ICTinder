@extends('adminlte::page')

@section('title', 'ICTinder thread')

@section('content')
    <h1>{{$thread->subject}}</h1>
    <div>
        <p>{{$thread->body}}</p>
    </div>
    <small>Written on {{$thread->created_at}}</small>
@stop