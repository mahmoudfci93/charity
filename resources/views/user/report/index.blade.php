@extends('layouts.app')
@section('title')
    See My Reports
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
                    <h4>Your Reports status </h4>
                    <br>

                    <br>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">All Reports for Client : {{$reporter->name}}</h3>
                        </div>
                        <div class="panel-body" style="background-color:#fff">
                            <div class="row">
                                <div class=" col-md-9 col-lg-12 ">
                                    @if(!empty($reports))
                                        <table class="table table-user-information">

                                            @foreach($reports as $report)
                                                <tbody>

                                                <tr>
                                                    <td>Donation</td>
                                                    <td>{{$report->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td><div class="progress">
                                                            @if($report->accept == 0)
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                                                                    Report the Problem
                                                                </div>
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:35%">
                                                                    The Problem is under Search
                                                                </div>
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%">
                                                                    We reach the problem successfuly
                                                                </div>
                                                            @elseif($report->accept ==1 && $report->closed == 0)
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                                                                    Report the Problem
                                                                </div>
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                                                                    The Problem is under Search
                                                                </div>
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%">
                                                                    We reach the problem successfuly
                                                                </div>
                                                            @elseif($report->accept == 1 && $report->closed == 1)
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                                                                    Report the Problem
                                                                </div>
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:35%">
                                                                    The Problem is under Search
                                                                </div>
                                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:30%">
                                                                    We reach the problem successfuly
                                                                </div>
                                                            @endif

                                                        </div></td>
                                                </tr>

                                                <tr>
                                                    <td>Name:</td>
                                                    <td>{{$report->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Region</td>
                                                    <td>{{places()[$report->place]}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>{{$report->mobile}}</td>
                                                </tr>

                                                <tr>
                                                <tr>
                                                    <td>Value</td>
                                                    <td>{{$report->problem}}</td>
                                                </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    @else
                                        <span class="pull-right">
                                     No Donations for you right now !!
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

@endsection

@section('footer')


@endsection