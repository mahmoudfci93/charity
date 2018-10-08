@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('header')
    <style>

        .jumbotron {
            background: #358CCE;
            color: #FFF;
            border-radius: 0px;
        }
        .jumbotron-sm { padding-top: 24px;
            padding-bottom: 24px; }
        .jumbotron small {
            color: #FFF;
        }
        .h1 small {
            font-size: 24px;
        }
        body{
           background-color:  #F1F3FA
        }
    </style>
@endsection

@section('content')
<div class="container">
    <h2>Contact us</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                {!! Form::open(['url'=>'/contact','method'=>'post']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()? \Illuminate\Support\Facades\Auth::user()->email : ''}}" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="type" name="type" class="form-control" required="required">
                                <option value="1">Like</option>
                                <option value="2">Suggestion</option>
                                <option value="3">Problem</option>
                                <option value="4">Inquiry</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn banner_btn pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">
                        P:</abbr>
                    (123) 456-7890
                </address>
                <address>
                    <strong>Full Name</strong><br>
                    <a href="mailto:#">first.last@example.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
@endsection