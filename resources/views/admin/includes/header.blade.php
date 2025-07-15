
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="{{route('admin.dashboard')}}">
                <h3>RBL System</h3>
                <!-- <img class="img-fluid" src="{{ asset('web/images/logo.png') }}" alt="Theme-Logo"> -->
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
           
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown">

                        <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="{{ asset('web/images/logo.png') }}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{ auth()->user()?->name }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{route('admin.profile')}}">
                                            <i class="feather icon-user"></i> Profile

                                        </a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.logout')}}">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
