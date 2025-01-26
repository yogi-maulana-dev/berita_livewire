<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('frontend/assets/img/logox.jpeg') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="side_menu_title">
            <span>Dashboard</span>
        </li>
        <li class="{{ request()->is('dashboard') ? 'mm-active' : '' }}">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/1.svg') }}" alt="">
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a href="{{ route('dashboard') }}"
                        class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            </ul>
        </li>
        <li class="side_menu_title">
            <span>Berita</span>
        </li>
        <li class="{{ request()->is('berita', 'kateogri') ? 'mm-active' : '' }}">

            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/2.svg') }}" alt="">
                <span>Data Berita</span>
            </a>
            <ul>
                <li><a href="{{ route('kategori') }}"
                        class="{{ request()->is('kategori') ? 'active' : '' }}">Kategori</a>
                <li><a href="{{ route('berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                </li>
            </ul>
        </li>

        <li class="{{ request()->is('menu', 'submenu') ? 'mm-active' : '' }}">

            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/2.svg') }}" alt="">
                <span>Data Menu</span>
            </a>
            <ul>
                <li><a href="{{ route('menu') }}" class="{{ request()->is('menu') ? 'active' : '' }}">Menu</a>
                    {{--  <li><a href="{{ route('berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">Berita</a>  --}}
                </li>
            </ul>
        </li>

        <!-- Tambahkan item menu lain sesuai kebutuhan -->
    </ul>
</nav>

<!-- sidebar part end -->
