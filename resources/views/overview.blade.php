@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')


    <ul>

        @foreach($chats  as $chat)

            <li>{{$chat}}</li>
        @endforeach

    </ul>


@stop