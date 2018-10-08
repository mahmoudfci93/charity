@extends('admin.layout.admin')
@section('header')

@endsection
@section('content')
    <h3>Edit Messages for user :<span>{{$contact->name}}</span>  </h3>
    {!!Form::model($contact,['route'=>['contact.update',$contact->id],'method'=>'PATCH'])!!}
    @include('admin.contact.form2')
    <div class="form-group" style="padding-bottom: 10px">
        <div class="col-md-8"  style="float: left">
            <button type="submit" class="btn btn-warning" style="margin-left: -445px;">
                <span class="glyphicon glyphicon-user" style="color: #FFFFFF"></span>
            Submit
            </button>
        </div>
    </div>
    {!! Form::close() !!}
    {!! Form::open(['route'=>['contact.destroy',$contact->id],'method'=>'DELETE']) !!}
    <button type="submit" class="btn btn-danger" style="padding-left: 24px; margin-left: 74px ; margin-top: -28px; float:left ">
        <span class="glyphicon glyphicon-user fa fa-trash-o" style="color: #FFFFFF"></span>
Delete Message
    </button>
    {!! Form::close() !!}
@endsection