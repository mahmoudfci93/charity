<div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Full Name</label>

    <div class="col-md-9">
        <input id="name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>

        @if ($errors->has('full_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<br>
<div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label"> City </label>

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
<div class="form-group{{ $errors->has('sub_place') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Region</label>

    <div class="col-md-9" style="padding-bottom: 11px;">
        <input id="name" type="text" class="form-control" name="sub_place" value="{{ old('sub_place') }}" required autofocus>

        @if ($errors->has('sub_place'))
            <span class="help-block">
                                        <strong>{{ $errors->first('sub_place') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Mobile No.</label>

    <div class="col-md-9" style="padding-bottom: 11px;">
        <input id="name" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>

        @if ($errors->has('mobile'))
            <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('mobile2') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Mobile No. 2 (Optional)</label>

    <div class="col-md-9" style="padding-bottom: 11px;">
        <input id="name" type="text" class="form-control" name="mobile2" value="{{ old('mobile') }}" required autofocus>

        @if ($errors->has('mobile2'))
            <span class="help-block">
                                        <strong>{{ $errors->first('mobile2') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Donation Type</label>

    <div class="col-md-6" style="padding-bottom: 11px;">

        {{Form::select('value',['' => 'Select  Donation type'] + donationType(), null ,['class' => 'form-control'])}}

        @if ($errors->has('value'))
            <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
        @endif
    </div>
    <div class="col-md-3 " style="padding-bottom: 11px;">
        <button type="button" class="btn btn-info" id="addButton">
            Add Other Donation
        </button>
    </div>
</div>
<br>
<div class="form-group" id='TextBoxesGroup'>
    <div  id="TextBoxDiv">

    </div>
</div>
<div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Free Time</label>

    <div class="col-md-9" style="padding-bottom: 11px;">
        {{Form::select('time',['' => 'Select  Available Time'] + pickTime(), null ,['class' => 'form-control'])}}

        @if ($errors->has('time'))
            <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-6">
        <button type="submit" class="btn banner_btn" style="float: right;">
            Submit
        </button>
    </div>
</div>
