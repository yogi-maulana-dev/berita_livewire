<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
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
            {{--  <li class="{{ request()->is('berita', 'register', 'forgot-password') ? 'mm-active' : '' }}">  --}}
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/2.svg') }}" alt="">
                <span>Pages</span>
            </a>
            <ul>
                <li><a href="{{ route('kategori') }}"
                        class="{{ request()->is('kategori') ? 'active' : '' }}">Kategori</a>
                <li><a href="{{ route('berita') }}" class="{{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                </li>
                {{--  <li><a href="{{ route('register') }}"
                        class="{{ request()->is('register') ? 'active' : '' }}">Register</a></li>
                <li><a href="{{ url('forgot-password') }}"
                        class="{{ request()->is('forgot-password') ? 'active' : '' }}">Forgot Password</a></li>  --}}
            </ul>
        </li>

        {{--  <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/3.svg') }}" alt="">
                <span>Applications</span>
            </a>
            <ul>
                <li><a href="{{ url('mail_box') }}" class="{{ request()->is('mail_box') ? 'active' : '' }}">Mail
                        Box</a></li>
                <li><a href="{{ url('chat') }}" class="{{ request()->is('chat') ? 'active' : '' }}">Chat</a></li>
                <li><a href="{{ url('faq') }}" class="{{ request()->is('faq') ? 'active' : '' }}">FAQ</a></li>
            </ul>
        </li>  --}}

        <li class="side_menu_title">
            <span>Components</span>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('img/menu-icon/4.svg') }}" alt="">
                <span>UI Component</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="{{ url('buttons') }}"
                                class="{{ request()->is('buttons') ? 'active' : '' }}">Buttons</a></li>
                        <li><a href="{{ url('dropdown') }}"
                                class="{{ request()->is('dropdown') ? 'active' : '' }}">Dropdowns</a></li>
                        <li><a href="{{ url('badges') }}"
                                class="{{ request()->is('badges') ? 'active' : '' }}">Badges</a></li>
                        <li><a href="{{ url('loading-indicators') }}"
                                class="{{ request()->is('loading-indicators') ? 'active' : '' }}">Loading
                                Indicators</a></li>
                    </ul>
                </li>
                <li><a href="#">Components</a>
                    <ul>
                        <li><a href="{{ url('notification') }}"
                                class="{{ request()->is('notification') ? 'active' : '' }}">Notifications</a></li>
                        <li><a href="{{ url('progress') }}"
                                class="{{ request()->is('progress') ? 'active' : '' }}">Progress Bar</a></li>
                        <li><a href="{{ url('carousel') }}"
                                class="{{ request()->is('carousel') ? 'active' : '' }}">Carousel</a></li>
                        <li><a href="{{ url('cards') }}"
                                class="{{ request()->is('cards') ? 'active' : '' }}">Cards</a></li>
                        <li><a href="{{ url('pagination') }}"
                                class="{{ request()->is('pagination') ? 'active' : '' }}">Pagination</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Tambahkan item menu lain sesuai kebutuhan -->
    </ul>
</nav>

<!-- sidebar part end -->
