<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Name</label>

    <div class="col-md-9">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<br>
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
<br>
<div class="form-group{{ $errors->has('problem') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">Problem</label>

    <div class="col-md-9">
        {!! Form::textarea("problem",null,['class'=>'form-control','rows'=>4]) !!}

        @if ($errors->has('problem'))
            <span class="help-block">
                                        <strong>{{ $errors->first('problem') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<br>
<br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-6">
        <button type="submit" class="btn banner_btn" style="float: right;">
            Submit the Problem
        </button>
    </div>
</div>
