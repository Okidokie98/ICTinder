@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="box">
<div class="box-header">
    <h1 class="box-title">Programming languages</h1>
    <a type="button" href="skills/create/" class="btn btn-primary pull-right">
        <i class="fa fa-plus">
        </i>&nbsp; Add new</a>
</div>
<div class="box-body">
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Language</th>
                <th>Difficulty</th>
                <th>Discussions</th>
                <th>Most Recent Activity</th>
                <th>
                    <span class="pull-right">Options</span>
                </th>
            </tr>
            @foreach($skills as $skill)
                <tr>
                    <td><h5><a href="/skills/{{$skill->id}}">{{$skill->skill}}</a></h5></td>
                    <td><h5>
                    @for($i=1; $i<=$skill->difficulty; $i++)
                        <i class="fa fa-star text-yellow"></i>
                    @endfor
                    </td></h5>
                    <td><h5>0</h5></td>
                    <td><h5>{{$skill->updated_at}}</h5></td>
                    <td>
                        <div class="btn-group pull-right">
                                <a type="button" class="btn btn-sm btn-primary" href="/skills/{{$skill->id}}/edit">
                                    <i class="fa fa-pencil"></i>&nbsp;  Edit</a>
                                {!!Form::open(['action' => ['SkillsController@destroy', $skill->id], 'method' => 'POST', 'class' => 'btn-group pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                                {!!Form::close()!!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@stop