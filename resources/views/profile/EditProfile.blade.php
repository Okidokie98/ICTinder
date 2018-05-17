
@extends('adminlte::page')

@section('title', 'edit profile')

@section('content_header')
    <h1>Edit profile</h1>
@stop
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('edit profile')</h3>
        </div>
        <form method="POST" action = '{{"/profile/". $id }}' accept-charset="UTF-8">
            @method('put')
            @csrf
            <input type="text" name="name">
 
                </div>


            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">submit</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">cancel</a>
            </div>
        </form>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="{!! asset('css/bootstrap3-wysihtml5.min.css') !!}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            font-size: 30px
        }
        .rating:hover {
            cursor: pointer
        }
    </style>
@endpush

@push('js')
    <script src="{!! asset('js/bootstrap3-wysihtml5.all.min.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <script>
        $(function () {
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5();
            $('#progress').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $('.rating').click(function(ev) {
                id = ev.target.id
                value = id.substr(5, id.length);
                $('input#rating').val(value);
                // Update which stars must be checked
                $('.rating').removeClass('text-yellow');
                for (i=1; i <= value;  i++) {
                    $('#star-' + i).addClass("text-yellow");
                }
            });
        })
    </script>
@endpush
