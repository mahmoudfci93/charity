@extends('layouts.app')
@section('title')
    Welcome to the charity website
@endsection
@section('header')
    <style>
        .btn .orange-border {
            padding: 18px 40px;
            border: 2px solid #262626;
            border-radius: 24px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;
            color: #FFFFFF;
            outline: none;
        }
        .hero-content-overlay .entry-footer a.btn{
            color: #fff;

        }
        .btn:focus {
            outline: none;
        }
        .btn.orange-border {
            border-color: #ff5a00;
        }
        .btn.orange-border:hover,
        .btn.gradient-bg {
            border-color: transparent;
            background: -moz-linear-gradient(180deg, rgba(255,90,0,1) 0%, rgba(255,54,0,1) 100%); /* ff3.6+ */
            background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255,90,0,1)), color-stop(100%, rgba(1255,54,0,1))); /* safari4+,chrome */
            background: -webkit-linear-gradient(180deg, rgba(255,90,0,1) 0%, rgba(255,54,0,1) 100%); /* safari5.1+,chrome10+ */
            background: -o-linear-gradient(180deg, rgba(255,90,0,1) 0%, rgba(255,54,0,1) 100%); /* opera 11.10+ */
            background: -ms-linear-gradient(180deg, rgba(255,90,0,1) 0%, rgba(255,54,0,1) 100%); /* ie10+ */
            background: linear-gradient(270deg, rgba(255,90,0,1) 0%, rgba(255,54,0,1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5a00', endColorstr='#ff3600',GradientType=1 ); /* ie6-9 */
            color: #fff;
        }
        .banner-info a{
            color: #ffffff;
        }
    </style>
@endsection

@section('content')
    <div class="banner text-center">
        <div class="container">
            <div class="banner-info">
                <h1>Donate</h1>
                <h4>4 a better world</h4>
                <p>Your Donation is Others Inspiration</p>
                <a class="btn orange-border" style="font-size: 22px ; border-width: medium;border-radius: 24px;" href="{{url('/donations/create')}}">Donate Now</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content_white">
            <h2>Featured Services</h2>
            <p>Quisque cursus metus vitae pharetra auctor, sem massa mattis semat interdum magna.</p>
        </div>
    </div>

@endsection


@section('footer')


@endsection