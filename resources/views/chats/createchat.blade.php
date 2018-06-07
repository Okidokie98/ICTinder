@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <html lang="en">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h3>Create a chat</h3>

                </div>

                <div class="panel-body">
                    <form action="/createchat" method="POST">
                        {{csrf_field() }}


                        <div class="form-group">

                            <label for="body">Name of the chat</label>

                            <textarea name="body" class="form-control" placeholder="Name"></textarea>

                        </div>



                        <input type="submit" class="btn btn-succes pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop