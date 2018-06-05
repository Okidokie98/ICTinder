@extends('adminlte::page')

@section('title', 'Matches')

@section('content_header')
<h1>Your Matches</h1>
@stop

@section('content')
<!-- @foreach($Tmatch as $matches)
<h2>{{$matches}}</h2>
@endforeach -->
<h2>{{$userMatchId}}</h2>
<br>
<br>
@foreach($Smatch as $matches)
<h2>{{$matches}}</h2>
@endforeach
@stop