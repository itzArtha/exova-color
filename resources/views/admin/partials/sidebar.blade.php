<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">EX</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Menu</li>
        <li {{ is_nav_active('dashboard') }}>
            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                <i class="fas fa-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li {{ is_nav_active('galeri') }}>
            <a class="nav-link" href="{{ route('admin.galeri.index') }}">
                <i class="fas fa-images"></i> <span>Galeri</span>
            </a>
        </li>
        <li {{ is_nav_active('uangku') }}>
            <a class="nav-link" href="{{ route('admin.uangku.index') }}">
                <i class="fas fa-money-bill-wave"></i> <span>Uangku</span>
            </a>
        </li>
        <li class="dropdown {{ is_drop_active('user') }}">
            <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-cog"></i> <span>Pengaturan</span>
            </a>
            <ul class="dropdown-menu">
                <li {{ is_nav_active('profile') }}>
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="fas fa-user"></i> Profil
                    </a>
                </li>
                <li {{ is_nav_active('bank') }}>
                    <a class="nav-link" href="{{ route('admin.user.bank.manage') }}">
                        <i class="fas fa-piggy-bank"></i> Rekening Bank
                    </a>
                </li>
                <li {{ is_nav_active('password') }}>
                    <a class="nav-link" href="{{ route('admin.user.password.index') }}">
                        <i class="fas fa-key"></i> Ubah Password
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
