@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<link rel="stylesheet" href="{{ asset('css/stefan.css') }}">

<div class="col-md-3">
<div class="box box-warning box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">TOP 4 LANGUAGES</h3>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body language">
    <p class="textcenter">HTML</p>
  </div>
  <div class="box-body language">
  <p class="textcenter">CSS</p>
  </div>
  <div class="box-body language">
  <p class="textcenter">Javascript</p>
  </div>
  <div class="box-body language">
  <p class="textcenter">CSS</p>
  </div>
  <div class="box-body more">

  <p> class="textcenter">CLICK HERE FOR MORE OPTIONS</p>

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>


@stop