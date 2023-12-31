<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div>
                    <span class="avatar"><img class="round" src="{{ asset('backend') }}/app-assetsimages/portrait/small/logo_big.jpg" alt="avatar" height="40" width="40" /><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="mail"></i> Inbox</a>
                    
                    <a class="dropdown-item" href="javascript:void(0)"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mr-50" data-feather="power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->
