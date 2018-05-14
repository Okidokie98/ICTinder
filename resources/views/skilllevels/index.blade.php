@extends('adminlte::page')

<title>Skilllevels</title>

@section('content')
    <h1>Skilllevels</h1>
    <hr>
    @if(count($skilllevels) > 0)
        @foreach($skilllevels as $skilllevel)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/skilllevels/{{$skilllevel->id}}">{{$skilllevel->skillName}}</a></h3>
                </div>
            </div>
        @endforeach
    @else
        <p>No Skilllevels found</p>
    @endif
@endsection