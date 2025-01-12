<nav id="navmenu" class="navmenu">
    <ul>
        <li>
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a>
        </li>
        <li>
            <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a>
        </li>
        <li>
            <a href="{{ url('/product') }}" class="{{ Request::is('product') ? 'active' : '' }}">Produk</a>
        <li>
            <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Kontak</a>
        </li>
        <li>
            <a href="{{ url('/workshops/register') }}"
                class="{{ Request::is('workshops/register') ? 'active' : '' }}">Daftar Workshop</a>
        </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
