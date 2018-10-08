{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Users
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin-dashboard/users')}}">All Users</a></li>
                    <li><a href="{{route('users.create')}}">Add User</a></li>

                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Donations
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin-dashboard/getdonations')}}">Donations</a></li>

                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Reports
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin-dashboard/getreports')}}">Reports</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Messages
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('contact.index')}}">All Messages</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->