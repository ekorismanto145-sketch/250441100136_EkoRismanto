<nav>
    <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'aktif' : '' }}">Beranda</a>
    <a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.index', 'mahasiswa.show') ? 'aktif' : '' }}">Mahasiswa</a>
    <a href="{{ route('mahasiswa.profil') }}" class="{{ request()->routeIs('mahasiswa.profil') ? 'aktif' : '' }}">Profil</a>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'aktif' : '' }}">Dashboard</a>
    <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'aktif' : '' }}">Tentang</a>
    <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'aktif' : '' }}">Kontak</a>
</nav>