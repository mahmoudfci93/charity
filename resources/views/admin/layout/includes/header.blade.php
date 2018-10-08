<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="{{url('/admin-dashboard')}}">Admin</a></h1>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{route('logout')}}">Front End</a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-envelope" style="font-size: 20px"></i> <b class="caret"></b></a>
                                <ul class="dropdown-menu alert-dropdown">
                                    <li>
                                        <a href="#">New Messages <span class="label label-default">{{countUnreadMessages()}}</span></a>
                                    </li>
                                    @foreach(unreadMessages() as $key=>$unreadMessage)
                                        <li><!-- Task item -->
                                            <a href="{{url('/admin-dashboard/contact/'.$unreadMessage->id.'/edit')}}">
                                                <p>
                                                    {{$unreadMessage->name}}
                                                    <small class="pull-right">{{$unreadMessage->created_at}}</small>
                                                </p>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    @endforeach
                                    <li>
                                        <a href="{{route('contact.index')}}">View All Messages</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>