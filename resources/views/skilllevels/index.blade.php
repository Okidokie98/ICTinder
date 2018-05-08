@extends('layouts.app')

<title>Skilllevels</title>

@section('content')
    <h1>Skilllevels</h1>
    <hr>
    @if(count($skilllevels) > 0)
        @foreach($skilllevels as $skilllevel)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/skilllevels/{{$skilllevel->id}}">{{$skilllevel->skillName}}</a></h3>
                    <small>Written on {{$skilllevel->created_at}}</small>
                </div>
            </div>
        @endforeach
    @else
        <p>No Skilllevels found</p>
    @endif
@endsection