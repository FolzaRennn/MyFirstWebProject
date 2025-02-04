<nav>
    <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Zenith Moba</span>
        <div class="search">
            <input type="text" placeholder="Cari Game, Item lainnya">
            <button>Cari</button>
        </div>
        </div>
        <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Zenith Moba</span>
        </div>
        <div class="sidebar-content">
            <ul class="lists">
            <li class="list">
                <a href="/" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Beranda</span>
                </a>
            </li>
                <li class="list">
                    <a href="/game" class="nav-link">
                    <i class="bx bx-cart icon"></i>
                    <span class="link">Game</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/cek-pesanan" class="nav-link">
                    <i class="bx bx-search icon"></i>
                    <span class="link">Cek Pesanan</span>
                    </a>
                </li>
            <li class="list">
                <a href="/faq" class="nav-link">
                <i class="bx bx-question-mark icon"></i>
                <span class="link">FAQ</span>
                </a>
            </li>
            <li class="list">
                <a href="/daftar-layanan" class="nav-link">
                <i class="bx bx-menu icon"></i>
                <span class="link">Daftar Layanan</span>
                </a>
            </li>
            <!--
            <li class="list">
                <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Likes</span>
                </a>
            </li>
                -->
                
            <li class="list">
                <a href="/support" class="nav-link">
                <i class="bx bx-headphone icon"></i>
                <span class="link">Dukungan Layanan</span>
                </a>
            </li>
            </ul>

            <?php if (isset($_SESSION['users'])): ?>
            <div class="bottom-cotent">
            <li class="list">
                <a href="/profil" class="nav-link">
                <i class="bx bx-user icon"></i>
                <span class="link">Profil</span>
                </a>
            </li>
            <li class="list">
                <a href="/riwayat-transaksi" class="nav-link">
                    <i class="bx bx-history icon"></i>
                    <span class="link">Riwayat Transaksi</span>
                </a>
            </li>
            <li class="list">
                <a href="/logout" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Keluar</span>
                </a>
            </li>
            <?php else:?>
        <div class="bottom-content">
            <li class="list">
            <a href="/masuk" class="nav-link">
                <i class="bx bx-log-in icon"></i>
                <span class="link">Masuk</span>
            </a>
            </li>
            <li class="list">
            <a href="/daftar" class="nav-link">
                <i class="bx bx-user-plus icon"></i>
                <span class="link">Daftar</span>
            </a>
            </li>
            <?php endif;?>
        </div>
    </div>
    </div>
</nav>
