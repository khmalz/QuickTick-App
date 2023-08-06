<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="{{ url('#') }}">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Dashboard</span>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0)" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i>
                    <span class="text-muted text-sm">{{ auth()->user()->name }}</span>
                </a>
                <a href="javascript:void(0)" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i>
                    <span class="text-muted text-sm">{{ auth()->user()->email }}</span>
                </a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item dropdown-footer">Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
