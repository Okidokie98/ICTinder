@extends('adminlte::page')

@section('title', 'ICTinder thread')

@section('content')
    <h1>{{$thread->subject}}</h1>
    <div>
        <p>{{$thread->body}}</p>
    </div>
    <small>Written on {{$thread->created_at}}</small>
    <hr>
    <a href="/threads/{{$thread->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['ThreadController@destroy', $thread->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return confirmDelete()'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

<script>
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');
        if(result) {
            return true;
        } else {
            return false;
        }
    }
</script>
@stop