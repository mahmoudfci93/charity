@extends('layouts.app')
@section('title')
    Welcome to the charity website
@endsection

@section('header')
{!! Html::style('front/css/side.css') !!}
{!! Html::style('custom/css/select2.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                @include('layouts.nav_bar')
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <h4 style="color: #f39562;">Complete Your Information to Get the Process Done </h4>
                    <br>
                    {!! Form::open(['route'=>'donations.store','method'=>'post']) !!}
                    @include('user.donner.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

@endsection

@section('footer')

    {!! Html::script('custom/js/select2.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                dir: "ltr"
            });

        });
    </script>
@endsection