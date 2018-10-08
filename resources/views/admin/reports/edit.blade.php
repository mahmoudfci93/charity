@extends('admin.layout.admin')
@section('header')
    {!! Html::style('admin/checkbox/style.css') !!}
@endsection
@section('content')
    <h3>Edit Reports</h3>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Region</th>
            <th>Mobile</th>
            <th>Problem</th>
            <th>Created</th>
        </tr>

        <tr>
            <td>{{$reporter->name}}</td>
            <td>{{places()[$reporter->place]}}</td>
            <td>{{$reporter->mobile}}</td>
            <td>{{$reporter->problem}}</td>
            <td>{{$reporter->created_at}}</td>
        </tr>

    </table>
    {!! Form::open(['route'=>['update.Reports',$reporter->id],'method'=>'PATCH']) !!}
    <label for="default" class="btn btn-default">
        Accept
        <input type="checkbox" value="1" name="accept" id="default" class="badgebox" {{$reporter->accept==1?"checked":"" }}>
        <span class="badge">&check;</span>
    </label>
    @if($reporter->accept == 1)
        <label for="primary" class="btn btn-primary">
            Close Report
            <input type="checkbox" value="1" name="closed" id="primary" class="badgebox" {{$reporter->closed==1?"checked":"" }}>
            <span class="badge">&check;</span>
        </label>
    @endif
    <button type="submit" class="btn btn-info btn-circle btn-xl"><i class="glyphicon glyphicon-ok"></i></button>
    {!! Form::close() !!}



@endsection