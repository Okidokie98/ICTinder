@extends('adminlte::page')

@section('title', 'ICTinder threads')

@section('content')
    <h1>Threads</h1>
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
    <div class="btn btn-default pull-right"><a href="/threads/create">Create Thread</a></div>
@stop