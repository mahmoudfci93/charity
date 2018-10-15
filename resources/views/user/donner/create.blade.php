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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>>
    {!! Html::script('custom/js/select2.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                dir: "ltr"
            });

        });
    </script>
    <script type="text/javascript">

        $(document).ready(function(){

            var counter = 1;

            $("#addButton").click(function () {

                if(counter>1){
                    return false;
                }

                var newTextBoxDiv = $(document.createElement('div'))
                    .attr("id", 'TextBoxDiv');

                newTextBoxDiv.after().html('<label class="col-md-3 control-label">Other Donation'+ ' </label>' +
                    '<input style="margin-left:16px;border-radius: 6px;width: 558px;height: 33px;" type="text" name="other" id="textbox"  value=""  >');
                newTextBoxDiv.appendTo("#TextBoxesGroup");

                counter++;
            });
        });
    </script>
@endsection