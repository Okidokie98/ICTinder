@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

    <div class="form-group has-feedback {{ $errors->has('body') ? 'has-error' : '' }}">
        <input name="body" class="form-control"
               placeholder="{{ trans('name') }}">
        @if ($errors->has('body'))
            <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
        @endif
    </div>
    <div class="col-xs-4">
        <a href="chats"> <button type="submit"
                                 class="btn btn-primary btn-block btn-flat">{{ trans('Create a new chat') }}</button></a>
    </div>


@stop