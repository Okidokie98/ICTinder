@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create chat
                </div>

                <div class="panel-body">
                    <form action="/createchat" method="POST">
                        {{csrf_field() }}


                        <div class="form-group">
                            <label for="body">Content</label>

                            <textarea name="body" class="form-control"></textarea>
                        </div>



                        <input type="submit" class="btn btn-succes pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>


@stop