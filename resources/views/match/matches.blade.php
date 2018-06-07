@extends('adminlte::page')

@section('title', 'Matches')

@section('content_header')
<h1>Your Matches</h1>
@stop

@section('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #ddddee;
}
.btn{
	border: 1px solid #000;
}
</style>

<h2>Tutor Matches</h2>
<table class="table table-striped">
	<tr>
		<th>Name of your student</th>
		<th>Skill</th>
		<th>Chatlink</th>
		<th>Delete</th>
	</tr>
	@for ($i = 0; $i < $tCount; $i++)
	<tr>
		<td>{{$TutorStudentName[$i][0]}}</td>
		<td>{{$TutorSkillName[$i][0]}}</td>
		<td><a href="/createchat">create chat</a></td>
		<td>{{ Form::open(['route' => ['delete.match', $Tmatch[$i]->id], 'method' => 'delete']) }} <button class="btn btn-danger" type="submit">Delete</button> {{ Form::close() }}</td>
		</tr>
	@endfor
</table>

<br>
<br>

<h2>Student Matches</h2>
<table class="table table-striped">
	<tr>
		<th>Name of your tutor</th>
		<th>Skill</th>
		<th>Chatlink</th>
		<th>Delete</th>
	</tr>
	@for ($i = 0; $i < $sCount; $i++)
	<tr>
		<td>{{$StudentTutorName[$i][0]}}</td>
		<td>{{$StudentSkillName[$i][0]}}</td>
		<td><a href="/createchat">create chat</a></td>
		<td>{{ Form::open(['route' => ['delete.match', $Smatch[$i]->id], 'method' => 'delete']) }} <button class="btn btn-danger" type="submit">Delete</button> {{ Form::close() }}</td>
	</tr>
	@endfor
</table>
<div>
	<button class="btn btn-default"><a href="/findmatch/{{$id}}">Find a new match</a></button>
</div>
@stop