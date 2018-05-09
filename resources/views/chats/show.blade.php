@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

   {{--Shows specific chats--}}
   <h1>{{ $chat->body }}</h1>

@stop