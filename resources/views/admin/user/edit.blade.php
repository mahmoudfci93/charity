@extends('admin.layout.admin')
@section('header')

@endsection
@section('content')
    <h3>Edit User : {{$user->name}} </h3>
    {!!Form::model($user,['route'=>['users.update',$user->id],'method'=>'PATCH'])!!}
    @include('admin.user.form')
    <div class="form-group" style="padding-bottom: 10px">
        <div class="col-md-8"  style="float: left">
            <button type="submit" class="btn btn-warning" style="margin-left: -445px;">
                <span class="glyphicon glyphicon-user" style="color: #FFFFFF"></span>
                Update
            </button>
        </div>
    </div>
    {!! Form::close() !!}
    {!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
    <button type="submit" class="btn btn-danger" style="padding-left: 24px; margin-left: 74px ; margin-top: -28px; float:left ">
        <span class="glyphicon glyphicon-user fa fa-trash-o" style="color: #FFFFFF"></span>
        Delete User
    </button>
    {!! Form::close() !!}
@endsection