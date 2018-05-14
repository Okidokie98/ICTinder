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























    {{--input chat name--}}
    {{--<div class="form-group has-feedback {{ $errors->has('body') ? 'has-error' : '' }}">--}}
        {{--<input name="body" class="form-control"--}}
               {{--placeholder="{{ trans('name') }}">--}}
        {{--@if ($errors->has('body'))--}}
            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('body') }}</strong>--}}
                        {{--</span>--}}
        {{--@endif--}}
    {{--</div>--}}

    {{--button to submit chat--}}
    {{--<div class="col-xs-4">--}}
        {{--<a href="chats"> <button type="submit"--}}
                                 {{--class="btn btn-primary btn-block btn-flat">{{ trans('Create a new chat') }}</button></a>--}}
    {{--</div>--}}

@stop