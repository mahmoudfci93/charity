

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

@if(!isset($userProfile))
<div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
    <label class="col-md-2">User Type</label>
    <div class="col-md-10">
        {!! Form::select("admin",['0'=>'user','1'=>'admin'],null,['class'=>'form-control']) !!}
        @if ($errors->has('admin'))
            <span class="help-block">
                                        <strong>{{ $errors->first('admin') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<br>
@endif
<div class="form-group">
    <label class="col-md-2">Password</label>
    <div class="col-md-10">
        <input id="password" type="password" class="form-control" name="password"  placeholder="password">
    </div>
</div>
<div class="clearfix"></div>
<br>
<div class="form-group">
    <label class="col-md-2">Confirm Password</label>
    <div class="col-md-10">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="password confirmation">
    </div>
</div>
<div class="clearfix"></div>
<br>