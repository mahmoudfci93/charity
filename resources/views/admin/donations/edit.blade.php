@extends('admin.layout.admin')
@section('header')
{!! Html::style('admin/checkbox/style.css') !!}
@endsection
@section('content')
    <h3>Edit Donations</h3>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Region</th>
            <th>Mobile</th>
            <th>Money</th>
            <th>Created</th>
        </tr>

            <tr>
                <td>{{$donnerUser->name}}</td>
                <td>{{places()[$donner->place]}}</td>
                <td>{{$donner->mobile}}</td>
                <td>{{$donner->value}}</td>
                <td>{{$donner->created_at}}</td>
            </tr>

    </table>

       {!! Form::open(['route'=>['update.donations',$donner->id],'method'=>'PATCH']) !!}
            <label for="default" class="btn btn-default">
                Confirm
                <input type="checkbox" value="1" name="confirm" id="default" class="badgebox" {{$donner->confirm==1?"checked":"" }}>
                <span class="badge">&check;</span>
            </label>
          @if($donner->confirm == 1)
            <label for="primary" class="btn btn-primary">
                Trans. sent
                <input type="checkbox" value="1" name="trans" id="primary" class="badgebox" {{$donner->send_trans==1?"checked":"" }}>
                <span class="badge">&check;</span>
            </label>
          @endif
          @if($donner->confirm == 1 && $donner->send_trans == 1)
            <label for="success" class="btn btn-success">
                Received
                <input type="checkbox" value="1" id="success" name="received" class="badgebox" {{$donner->received==1?"checked":"" }}>
                <span class="badge">&check;</span>
            </label>
          @endif
         <button type="submit" class="btn btn-info btn-circle btn-xl"><i class="glyphicon glyphicon-ok"></i></button>
       {!! Form::close() !!}

@endsection