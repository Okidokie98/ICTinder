@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <ul>

        {{--displays all chats in database--}}
        @foreach($chats as $chat)
            <li> {{$chat->body}} </li>
        @endforeach

    </ul>

@stop