<aside id="sidebar" class="sidebar c-overflow">
    <div class="profile-menu">
        <a href="">
            <div class="profile-pic">
                <img src="{{ asset('assets/frontend/img/temp/1.jpg') }}" alt="">
            </div>

            <div class="profile-info">
                {{ $currentCustomer->fullName() }}

                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>

        <ul class="main-menu">
            <li>
                <a href="{{ route('account.profile') }}"><i class="zmdi zmdi-account"></i> View Profile</a>
            </li>
            <li>
                <a href="{{ route('auth.logout') }}"><i class="zmdi zmdi-time-restore"></i> Logout</a>
            </li>
        </ul>
    </div>

    <ul class="main-menu">
        <li @if($page == 'dashboard')class="active"@endif>
            <a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a>
        </li>
        <li @if($page == 'profile')class="active"@endif>
            <a href="{{ route('account.profile') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Profile</a>
        </li>
    </ul>
</aside>