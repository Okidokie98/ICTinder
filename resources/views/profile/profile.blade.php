@extends('adminlte::page')

@section('title', 'profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')

@foreach ($users as $user)
<div class="box box-primary">
<div class="box-body box-profile">
  <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/profile-placeholder.jpg') }}" alt="User profile picture">

  <h3 class="profile-username text-center">
  </h3>

  <p class="text-muted text-center">Name: {{ $user->name}}</p>

  <ul class="list-group list-group-unbordered">
    <li class="list-group-item">
      <b>Email: {{ $user->email}}</b> <a class="pull-right"> </a>
    </li>
    <li class="list-group-item">
      <b>Age: {{ $user->age}}</b> <a class="pull-right"> </a>
    </li>
    <li>
    <div class="form-group">
      {!! Form::label('Tell us your favorite coding languages!') !!}
      <br />
      {!! Form::checkbox('html') !!} HTML
      <br />
      {!! Form::checkbox('css') !!} CSS
      <br />
      {!! Form::checkbox('js') !!} JavaScript
      <br />
      {!! Form::checkbox('ts') !!} TypeScript
      <br />
      {!! Form::checkbox('php') !!} PHP
      <br />
      {!! Form::checkbox('c') !!} C
      <br />
      {!! Form::checkbox('c++') !!} C++
      <br />
      {!! Form::checkbox('c#') !!} C#
      </div>
    </li>
  </ul>

  <a href="{{  $user->id . '/edit' }}" class="btn btn-primary">Edit</a>
  <a href="{{  $user->id . '/delete' }}" class="btn btn-danger">Delete</a>

</div>

</div>
@endforeach
@stop