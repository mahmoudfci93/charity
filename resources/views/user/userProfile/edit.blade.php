@extends('layouts.app')
@section('title')
    Edit personal Information
@endsection

@section('header')
    {!! Html::style('front/css/side.css') !!}
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                @include('layouts.nav_bar')
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <h4 style="color: #f39562;">Edit Your Account Information </h4>
                    <br>
                    {!!Form::model($user,['route'=>['update.userProfile',$user->id],'method'=>'PATCH'])!!}
                    @include('admin.user.form',['userProfile'=>1])
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-6">
                            <button type="submit" class="btn banner_btn" style="float: right;">
                                Update
                            </button>
                        </div>
                    </div>
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