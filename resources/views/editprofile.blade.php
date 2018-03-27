@extends('adminlte::page')

@section('title', 'editprofile')

@section('content_header')
    <h1>Edit Profile</h1>
@stop

@section('content')
    <form method="post" action="">  
        Username: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Phone number: <input type="text" name="phonenumber">
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
@stop   