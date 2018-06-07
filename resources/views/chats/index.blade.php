@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <h4>Chats:</h4>
    <ul>

        {{--displays all chats in database--}}

        @foreach($chats as $chat)
            <li><a href="/chats/{{ $chat->id }}"> {{$chat->body}} </a></li>
        @endforeach

    </ul>

@stop