    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="d-flex justify-content-between container">

            <div class="logo">
                <h1 class="text-light fw-semibold"><a href="{{ route('home') }}">QuickTick</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a></li>
                    <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Sign
                            in</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
