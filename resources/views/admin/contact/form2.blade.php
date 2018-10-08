

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-md-2">Name</label>
    <div class="col-md-10">
        {!! Form::text("name",null,['class'=>'form-control']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="col-md-2">Email</label>
    <div class="col-md-10">
        {!! Form::text("email",null,['class'=>'form-control']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>


<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label class="col-md-2">Message Type</label>
    <div class="col-md-10">
        {!! Form::select("type",['1'=>'like','2'=>'Suggestion','3'=>'Problem','Inquiry'],null,['class'=>'form-control']) !!}

        @if ($errors->has('type'))
            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
    <label class="col-md-2">Message</label>
    <div class="col-md-10">
        {!! Form::textarea("message",null,['class'=>'form-control','rows'=>6]) !!}
        @if ($errors->has('message'))
            <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>