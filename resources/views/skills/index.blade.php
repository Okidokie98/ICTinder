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

                    <td><p><a href="/skills/{{$skill->id}}">{{$skill->skill}}</a></p></td>
                    <td><p>
                    @for($i=1; $i<=$skill->difficulty; $i++)
                        <i class="fa fa-star text-yellow"></i>
                    @endfor
                    </td></p>
                    <td><p>0</p></td>
                    <td><p>{{$skill->updated_at}}</p></td>
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