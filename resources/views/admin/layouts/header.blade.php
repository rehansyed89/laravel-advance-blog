<header class="main-header">
    <a href="{{ route('admin.home') }}" class="logo">
        <span class="logo-mini"><b>Blog</b>Feed</span>
        <span class="logo-lg"><b>Blog</b>Feed</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{--@include('admin.admin_profile.header_tasks_notifications_messages')--}}
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('admin/dist/img/admin.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('admin/dist/img/admin.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }} - Web Developer
                                <small>Member since {{ Auth::user()->created_at->toFormattedDateString() }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>