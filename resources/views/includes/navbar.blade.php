<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/') }}" class="active">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li><a href="{{ url('/pricing') }}">Pricing</a></li>
        <li class="dropdown">
            <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
