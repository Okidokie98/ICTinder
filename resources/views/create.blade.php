@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div>
    {!! Form::open(['route' => 'contact.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail Address') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('msg', 'Type your question or bug-report here:') !!}
    {!! Form::textarea('msg', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('msg', 'Please specify what gender you are:') !!}
    <br />
    {!! Form::radio('msg', 'male') !!} Male
    <br />
    {!! Form::radio('msg', 'female') !!} Female
    <br />
    {!! Form::radio('msg', 'neutral') !!} I'd rather not tell
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>




@stop