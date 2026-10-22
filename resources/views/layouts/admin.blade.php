<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard') - Absensi Online</title>

    @vite('resources/css/app.css')
</head>

<body>

@php
    $page = $page ?? 'dashboard';
@endphp

<div class="admin-wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-brand">
            <div class="brand-icon">🎓</div>

            <div>
                <h2>SMKN 1 Maja</h2>
                <span>Absensi Online</span>
            </div>
        </div>


        <nav class="sidebar-menu">

            <a href="{{ url('/admin-test') }}"
               class="menu-item {{ $page == 'dashboard' ? 'active' : '' }}">
                <span>⌂</span>
                <p>Dashboard</p>
            </a>


            <a href="{{ url('/admin-test?page=siswa') }}"
               class="menu-item {{ $page == 'siswa' ? 'active' : '' }}">
                <span>♙</span>
                <p>Data Siswa</p>
            </a>


            <a href="{{ url('/admin-test?page=guru') }}"
               class="menu-item {{ $page == 'guru' ? 'active' : '' }}">
                <span>♙</span>
                <p>Data Guru</p>
            </a>


            <a href="{{ url('/admin-test?page=kelas') }}"
               class="menu-item {{ $page == 'kelas' ? 'active' : '' }}">
                <span>▦</span>
                <p>Data Kelas</p>
            </a>


            <a href="{{ url('/admin-test?page=jadwal') }}"
               class="menu-item {{ $page == 'jadwal' ? 'active' : '' }}">
                <span>▣</span>
                <p>Jadwal</p>
            </a>


            <a href="{{ url('/admin-test?page=absensi') }}"
               class="menu-item {{ $page == 'absensi' ? 'active' : '' }}">
                <span>✓</span>
                <p>Absensi</p>
            </a>


            <a href="{{ url('/admin-test?page=qrcode') }}"
               class="menu-item {{ $page == 'qrcode' ? 'active' : '' }}">
                <span>▧</span>
                <p>QR Code</p>
            </a>


            <a href="{{ url('/admin-test?page=lokasi') }}"
               class="menu-item {{ $page == 'lokasi' ? 'active' : '' }}">
                <span>⌖</span>
                <p>Lokasi QR</p>
            </a>


            <a href="{{ url('/admin-test?page=riwayat') }}"
               class="menu-item {{ $page == 'riwayat' ? 'active' : '' }}">
                <span>◷</span>
                <p>Riwayat Scan</p>
            </a>


            <a href="{{ url('/admin-test?page=laporan') }}"
               class="menu-item {{ $page == 'laporan' ? 'active' : '' }}">
                <span>▤</span>
                <p>Laporan</p>
            </a>


            <a href="{{ url('/admin-test?page=pengaturan') }}"
               class="menu-item {{ $page == 'pengaturan' ? 'active' : '' }}">
                <span>⚙</span>
                <p>Pengaturan</p>
            </a>

        </nav>


        <div class="sidebar-bottom">
            <small>© 2026 SMKN 1 Maja</small>
        </div>

    </aside>


    <!-- MAIN -->
    <main class="main-content">


        <!-- TOPBAR -->
        <header class="topbar">

            <button class="menu-toggle">☰</button>


            <div class="search-box">
                <span>⌕</span>
                <input
                    type="text"
                    placeholder="Cari menu..."
                >
            </div>


            <div class="topbar-right">

                <button class="notification">
                    ♧
                </button>


                <div class="admin-profile">

                    <img
                        src="{{ asset('assets/images/admin.jpg') }}"
                        alt="Administrator"
                    >

                    <div class="admin-info">
                        <strong>Administrator</strong>
                        <small>Admin</small>
                    </div>

                    <span>⌄</span>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="page-content">

            @yield('content')

        </section>


    </main>

</div>

</body>
</html>