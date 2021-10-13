<div class="navbar-header">
    <a class="navbar-brand" href="{{route('page-admin')}}">Startmin</a>
</div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<ul class="nav navbar-nav navbar-left navbar-top-links">
    <li><a href="{{route('home')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
</ul>

<ul class="nav navbar-right navbar-top-links">
    <li class="dropdown navbar-inverse">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="#">
                    <div>
                        <i class="fas fa-bell"></i> Đơn hàng mới
                        <span class="pull-right text-muted small">Chưa cập nhật</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fas fa-user-plus"></i> Thành viên mới
                        <span class="pull-right text-muted small">Đang cập nhật</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>

        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            @if(Auth::check())
                <i class="fa fa-user fa-fw"></i> {{ucwords(Auth::user()->name)}} <b class="caret"></b>
            @else
                <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
            @endif
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
    </li>
</ul>
