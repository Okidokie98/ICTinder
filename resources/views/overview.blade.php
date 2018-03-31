@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <ul>

        @foreach($chats  as $chat)

            <li><a href="overview/{chat}">{{$chat->body}}</a></li>
        @endforeach

    </ul>

@stop