<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-job">
            {{\Illuminate\Support\Facades\Auth::user()->name}}
        </div>
        <div class="profile-usertitle-name">

            {{\Illuminate\Support\Facades\Auth::user()->email}}
        </div>
    </div>
    <div class="profile-userbuttons">
        <a href="{{url('/aboutus')}}" class="btn btn-success">About us</a>
        <a href="{{url('/contact')}}" class="btn btn-danger">Message</a>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">

            <li class="{{setActive(['user','edit','user'])}}">
                <a href="{{route('edit.userProfile')}}">
                    <i class="far fa-id-card" style="font-size:20px;" ></i>

                    Account Settings </a>
            </li>
            <li class="{{setActive(['donations','create'])}}">
                <a href="{{route('donations.create')}}">
                    <i class="fas fa-american-sign-language-interpreting" style="font-size:20px;" ></i>
                    Add New Donation</a>
            </li>
            <li class="{{setActive(['donations',\Illuminate\Support\Facades\Auth::user()->id])}}">
                <a href="{{route('donations.show',\Illuminate\Support\Facades\Auth::user()->id)}}">
                    <i class="fas fa-atom" style="font-size:20px;"></i>
                    My Donation</a>
            </li>

            <li class="{{setActive(['reports','create'])}}">
                <a href="{{route('reports.create')}}">
                    <i class="fas fa-bullhorn" style="font-size:20px;"></i>
                    Report </a>
            </li>
            <li class="{{setActive(['reports',\Illuminate\Support\Facades\Auth::user()->id])}}">
                <a href="{{route('reports.show',\Illuminate\Support\Facades\Auth::user()->id)}}">
                    <i class="fas fa-chart-line" style="font-size:20px;"></i>
                    Track My Report </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>