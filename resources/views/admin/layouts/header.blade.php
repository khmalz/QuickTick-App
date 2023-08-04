<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="{{ url('#') }}">
                <i class="far fa-user"></i>
                {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <a href="{{ url('#') }}" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="text-muted float-right text-sm">12 hours</span>
                </a>
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
