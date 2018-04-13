@extends('adminlte::page')

@section('title', 'ICTinder threads')

@section('content_header')
    <h1>Threads</h1>
@stop

@section('content')
    <h4>{{$thread->subject}}</h4>
    <p>{{str_limit($thread->thread,100)}}</p>
@stop