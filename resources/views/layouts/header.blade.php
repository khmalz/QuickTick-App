<header id="header" class="d-flex align-items-center">
    <div class="d-flex justify-content-between container">
        <div class="logo">
            <h1 class="text-light fw-semibold"><a href="{{ route('home') }}">QuickTick</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a></li>
                @guest
                    <li><a href="{{ route('login') }}">Sign
                            in</a></li>
                @else
                    <li class="dropdown"><a href="#"><span>Welcome</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('profile') }}">{{ auth()->user()->name }}</a></li>
                            @role(['Admin', 'Petugas'])
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a href="{{ route('mytiket') }}">My Tiket</a></li>
                            @endrole
                            <li>
                                <a href="/logout"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
