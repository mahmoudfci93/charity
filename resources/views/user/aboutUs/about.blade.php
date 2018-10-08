@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('header')
    <style>

        .jumbotron {
            background: #358CCE;
            color: #FFF;
            border-radius: 0px;
        }
        .jumbotron-sm { padding-top: 24px;
            padding-bottom: 24px; }
        .jumbotron small {
            color: #FFF;
        }
        .h1 small {
            font-size: 24px;
        }
        body{
            background-color:  #ffffff;
        }
        .welcome-wrap{
            margin-bottom: 40px;
        }
    </style>
@endsection

@section('content')
    <div class="about">
        <div class="container">
            <section class="title-section">
                <h1 class="title-header">About Our Company</h1>
            </section>
        </div>
    </div>
    <div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Wellcome to our Charity</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('front/images/welcome.jpg')}}" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
@endsection