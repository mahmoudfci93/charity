<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('front/css/bootstrap.min.css') !!}
    {!! Html::style('front/css/style.css') !!}
    {!! Html::style('front/css/font-awesome.min.css') !!}
    {!! Html::script('front/js/jquery.min.js') !!}
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <title>
        @yield('title')
    </title>
    @yield('header')
</head>
<body id="app-layout">
<div class="header">
    <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><img src="{{Request::root()}}/front/images/logo.png"> </a>
        <div class="menu"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}/front/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="{{setActive(['home'],'current')}}"><a href="{{url('/home')}}">Home</a></li>
                <li class="{{setActive(['aboutus'],'current')}}"><a href="{{url('/aboutus')}}">About Us</a></li>
                <li class="{{setActive(['contact'],'current')}}"><a href="{{url('/contact')}}">Contact Us</a></li>
                <li class="{{setActive(['donations','create'],'current')}}"><a href="{{route('donations.create')}}">Donation</a></li>
                <li class="{{setActive(['reports','create'],'current')}}"><a href="{{route('reports.create')}}">Report</a></li>
                @if (Auth::guest())
                    <li class="{{setActive(['login'],'current')}}"><a href="{{route('login')}}">Login</a></li>
                    <li class="{{setActive(['register'],'current')}}"><a href="{{route('register')}}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                <div class="clear"></div>
            </ul>
            <script type="text/javascript" src="{{asset('front/js/responsive-nav.js')}}"></script>
        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us">
            <a href="#"><i class="fab fa-facebook-square" style="font-size: 40px;color: aliceblue"></i></a>
            <a href="#"><i class="fab fa-twitter-square" style="font-size: 40px;color: aliceblue"></i></a>
            <a href="#"><i class="fab fa-youtube-square" style="font-size: 40px;color: aliceblue"></i></a>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2018 The Charity.  Made by <a href="#" rel="nofollow">Charity Team</a></p>
        </div>
    </div>
</div>

{!! Html::script('front/js/bootstrap.min.js') !!}
{!! Html::script('front/js/jquery.flexslider.js') !!}
{!! Html::script('front/js/responsive-nav.js') !!}
{!! Html::script('/custom/sweetalert.min.js') !!}
@include('admin.layout.flash_messages')
@yield('footer')
</body>
</html>
