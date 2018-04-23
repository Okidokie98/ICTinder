@extends('adminlte::page')

@section('title', 'ICTinder threads')

@section('content_header')
    <h1>{{$thread->subject}}</h1>
@stop

@section('content')
    <div>
        <p>{{$thread->body}}</p>
    </div>
    <small>Written on {{$thread->created_at}}</small>
@stop