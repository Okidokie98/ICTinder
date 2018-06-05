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
    background-color: #dddddd;
}
</style>

<h2>TutorMatches</h2>
<table>
	<tr>
		<th>Name of your student</th>
		<th>Skill</th>
		<th>Chatlink</th>
	</tr>
	@for ($i = 0; $i < $tCount; $i++)
	<tr>
		<td>{{$TutorStudentName[$i][0]}}</td>
		<td>{{$TutorSkillName[$i][0]}}</td>
		<td></td>
	</tr>
	@endfor
</table>

<br>
<br>

<h2>StudentMatches</h2>
<table>
	<tr>
		<th>Name of your tutor</th>
		<th>Skill</th>
		<th>Chatlink</th>
	</tr>
	@for ($i = 0; $i < $sCount; $i++)
	<tr>
		<td>{{$StudentTutorName[$i][0]}}</td>
		<td>{{$StudentSkillName[$i][0]}}</td>
		<td></td>
	</tr>
	@endfor
</table>
@stop