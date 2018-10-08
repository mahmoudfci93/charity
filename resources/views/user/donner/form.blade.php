<div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label"> Region </label>

    <div class="col-md-9">
        {!! Form::select("place",places(),null,['class'=>'form-control select2']) !!}

        @if ($errors->has('place'))
            <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<br>
<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Mobile No.</label>

    <div class="col-md-9">
        <input id="name" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>

        @if ($errors->has('mobile'))
            <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Value of Donation</label>

    <div class="col-md-9">
        <input id="name" type="text" class="form-control" name="value" value="{{ old('value') }}" required autofocus>

        @if ($errors->has('value'))
            <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-6">
        <button type="submit" class="btn banner_btn" style="float: right;">
            Submit
        </button>
    </div>
</div>
