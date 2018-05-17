@extends('adminlte::page')

@section('title', 'profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')


<div class="box box-primary">

<H1>Are you sure you want to delete your account</H1>
{{ Form::open(['route' => ['delete.profile', $ids], 'method' => 'delete']) }} <button type="submit">Delete</button> {{ Form::close() }}

</div>

@stop