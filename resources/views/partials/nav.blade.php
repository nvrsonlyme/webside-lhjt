<nav>
    <div class="logo-name">
        <div class="logo-image">
           <img src="{{ asset('img/logo.png') }}" alt="">
        </div>

        <span class="logo_name">LHJT</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="/home">
                <i class="uil uil-estate"></i>
                <span class="link-name">Dahsboard</span>
            </a></li>
            <li><a href="/organik">
                <i class="uil uil-trees"></i>
                <span class="link-name">Organik</span>
            </a></li>
            <li><a href="/anorganik">
                <i class="uil uil-process"></i>
                <span class="link-name">Anorganik</span>
            </a></li>
            <li><a href="/lapak">
                <i class="uil uil-clipboard"></i>
                <span class="link-name">Lapak</span>
            </a></li>
            <li><a href="/pembatasan">
                <i class="uil uil-comments"></i>
                <span class="link-name">Pembatasan</span>
            </a></li>
            <li><a href="/data-tps">
                <i class="uil uil-books"></i>
                <span class="link-name">Data TPS</span>
            </a></li>
            <li><a href="/sampah-spesifik">
                <i class="uil uil-gold"></i>
                <span class="link-name">Sampah Spesifik</span>
            </a></li>
            <li><a href="/laporan">
                <i class="uil uil-archive"></i>
                <span class="link-name">Laporan</span>
            </a></li>
        </ul>

        <ul class="logout-mode">
            <li><a href="{{ route('logout') }}">
                <i class="uil uil-signout"></i>
                <span class="link-name">Logout</span>
            </a></li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
        </li>
        </ul>
    </div>
</nav>
