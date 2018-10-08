@extends('layouts.app')
@section('title')
    MY Donations
@endsection

@section('header')
    {!! Html::style('front/css/side.css') !!}
    {!! Html::style('user') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                @include('layouts.nav_bar')
            </div>
            <div class="col-md-9">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Donations for Client : {{$donner->name}}</h3>
                                </div>
                                <div class="panel-body" style="background-color:#fff">
                                    <div class="row">
                                        <div class=" col-md-9 col-lg-12 ">
                                            @if(!empty($donations))
                                            <table class="table table-user-information">

                                                @foreach($donations as $donation)
                                                <tbody>

                                                    <tr>
                                                        <td>Donation #</td>
                                                        <td>{{$donation->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td>{{$donner->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Region</td>
                                                        <td>{{places()[$donation->place]}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td>{{$donation->mobile}}</td>
                                                    </tr>

                                                    <tr>
                                                    <tr>
                                                        <td>Problem</td>
                                                        <td>{{$donation->value}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donation State </td>
                                                        @if($donation->confirm == 0)
                                                        <td>
                                                            <div class="alert alert-warning">
                                                                Your Request is Waiting for Confirmation
                                                            </div>

                                                        </td>
                                                        @elseif($donation->confirm == 1 && $donation->send_trans == 0)
                                                        <td>
                                                            <div class="alert alert-warning">
                                                                Your Request has been confirmed and we will send you our client within 3 days
                                                            </div>
                                                        </td>
                                                        @elseif($donation->confirm ==1 && $donation->send_trans == 1 &&$donation->received == 0)
                                                            <td>
                                                                <div class="alert alert-warning">
                                                                    Your Donation has not been Received yet :)
                                                                </div>

                                                            </td>
                                                        @elseif($donation->confirm ==1 && $donation->send_trans == 1 &&$donation->received == 1)
                                                            <td>
                                                                <div class="alert alert-warning">
                                                                    Your Donation has been Received Thank you :)
                                                                </div>

                                                            </td>
                                                        @endif
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

    <br>
    <br>

@endsection

@section('footer')


@endsection