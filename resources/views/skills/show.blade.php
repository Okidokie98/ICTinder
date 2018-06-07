@extends('adminlte::page')

@section('title', 'ICTinder')

@section('content')
<html lang="en">
    <div class="content-wrapper" style="min-height: 306px;">
        <article>
            <header class="content-header container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="content-max-width">{{$skills->skill}}</h1>
                    </div>
                </div>
            </header>
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="content-max-width">
                            <section id="boxes">
                                <p>{{$skills->body}}</p>
                            </section>
                        </section>
                    </div>
                    <div class="col-lg-4">
                        <div class="box box-solid limit-p-width">
                            <div class="box-body affiliate">
                                <div class="heading">
                                    Widget placeholder
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

@stop