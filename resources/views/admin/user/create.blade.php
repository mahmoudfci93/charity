@extends('admin.layout.admin')
@section('header')

@endsection
@section('content')
    <h3>Add New User </h3>
    {!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
    @include('admin.user.form2')
    <div class="form-group" style="padding-bottom: 10px">
        <div class="col-md-8"  style="float: left">
            <button type="submit" class="btn btn-warning" style="margin-left: -445px;">
                <span class="glyphicon glyphicon-user" style="color: #FFFFFF"></span>
                Submit
            </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection