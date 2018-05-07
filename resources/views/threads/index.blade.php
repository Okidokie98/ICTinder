@extends('adminlte::page')

@section('title', 'ICTinder threads')

@section('content_header')
    <h1>Threads</h1>
@stop

@section('content')
    <a href="/threads/create">Create Post</a>
    @if(count($threads) > 0)
        @foreach($threads as $thread)
            <div class="box">
                <h3><a href="/threads/{{$thread->id}}">{{$thread->subject}}</a></h3>
                <small>Written on {{$thread->created_at}}</small>
            </div>
        @endforeach
        {{$threads->links()}}
    @else
        <p>No threads found.</p>
    @endif
@stop