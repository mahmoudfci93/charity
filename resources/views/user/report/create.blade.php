@extends('layouts.app')
@section('title')
    Report a Problem
@endsection

@section('header')
    {!! Html::style('front/css/side.css') !!}
    <style>
       .progress{
           height: 32px;
       }
       .progress-bar{
           line-height: 31px;
           font-size: 15px;
       }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                @include('layouts.nav_bar')
            </div>
            <div class="col-md-9">
                <div class="profile-content" style="min-height: 507px;">
                    <h4 style="color: #f39562;">Complete Your Information to Get the Process Done </h4>
                    <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                            Report the Problem
                        </div>
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width:35%">
                            The Problem is under Search
                        </div>
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%">
                            We reach the problem successfuly
                        </div>
                    </div>
                    <br>
                    {!! Form::open(['route'=>'reports.store','method'=>'post']) !!}
                    @include('user.report.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

@endsection

@section('footer')


@endsection