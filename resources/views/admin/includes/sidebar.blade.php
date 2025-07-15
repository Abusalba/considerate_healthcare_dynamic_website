@php($currentRouteName = Route::currentRouteName())
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{in_array($currentRouteName,['admin.dashboard']) ? 'active':''}}">
                    <a href="{{route('admin.dashboard')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="{{in_array($currentRouteName,['admin.blogs','admin.blogs.create','admin.blogs.edit']) ? 'active':''}}">
                    <a href="{{route('admin.blogs')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-file-text"></i>
                        </span>
                        <span class="pcoded-mtext">Blogs</span>
                    </a>
                </li>
                <li class="{{in_array($currentRouteName,['admin.contactUs']) ? 'active':''}}">
                    <a href="{{route('admin.contactUs')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-feather"></i>
                        </span>
                        <span class="pcoded-mtext">Contact Us</span>
                    </a>
                </li>

                <li class="{{in_array($currentRouteName,['admin.abouts','admin.abouts.create','admin.abouts.edit']) ? 'active':''}}">
                    <a href="{{route('admin.abouts')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-info"></i>
                        </span>
                        <span class="pcoded-mtext">About Us</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.logout')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-log-out"></i>
                        </span>
                        <span class="pcoded-mtext">Logout</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>