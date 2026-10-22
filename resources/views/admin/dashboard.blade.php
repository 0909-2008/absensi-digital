@extends('layouts.admin')

@section('title', ucfirst($page))

@section('content')

@php
    $students = \App\Models\Student::all();
@endphp

@if($page == 'dashboard')

<div class="dashboard-header">
    <div>
        <p class="dashboard-label">ADMIN DASHBOARD</p>
        <h1>Selamat Datang, Administrator 👋</h1>
        <p class="dashboard-subtitle">
            Pantau aktivitas absensi siswa SMKN 1 Maja dengan mudah.
        </p>
    </div>

    <div class="dashboard-date">
        <span>📅</span>
        <div>
            <small>Hari ini</small>
            <strong>{{ date('d M Y') }}</strong>
        </div>
    </div>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-icon blue">👨‍🎓</div>
        <div>
            <span>Total Siswa</span>
            <h2>320</h2>
            <small>Data siswa terdaftar</small>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon green">✓</div>
        <div>
            <span>Hadir Hari Ini</span>
            <h2>286</h2>
            <small>89,4% dari total siswa</small>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon orange">◷</div>
        <div>
            <span>Izin</span>
            <h2>18</h2>
            <small>Siswa izin hari ini</small>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon red">×</div>
        <div>
            <span>Alpa</span>
            <h2>16</h2>
            <small>Belum melakukan absensi</small>
        </div>
    </div>

</div>

<div class="dashboard-grid">

    <div class="dashboard-card">
        <div class="card-header">
            <div>
                <h3>Statistik Kehadiran</h3>
                <p>Data absensi minggu ini</p>
            </div>

            <select>
                <option>Minggu ini</option>
                <option>Bulan ini</option>
            </select>
        </div>

        <div class="fake-chart">
            <div class="chart-bars">

                <div class="bar-group">
                    <div class="bar" style="height:85%;"></div>
                    <span>Sen</span>
                </div>

                <div class="bar-group">
                    <div class="bar" style="height:92%;"></div>
                    <span>Sel</span>
                </div>

                <div class="bar-group">
                    <div class="bar" style="height:78%;"></div>
                    <span>Rab</span>
                </div>

                <div class="bar-group">
                    <div class="bar" style="height:95%;"></div>
                    <span>Kam</span>
                </div>

                <div class="bar-group">
                    <div class="bar" style="height:88%;"></div>
                    <span>Jum</span>
                </div>

            </div>
        </div>
    </div>

    <div class="dashboard-card">

        <div class="card-header">
            <div>
                <h3>Scan Terbaru</h3>
                <p>Aktivitas absensi terakhir</p>
            </div>

            <a href="{{ url('/admin-test?page=riwayat') }}">
                Lihat semua
            </a>
        </div>

        <div class="activity-list">

            <div class="activity-item">
                <div class="activity-avatar">AM</div>

                <div class="activity-info">
                    <strong>Ahmad Maulana</strong>
                    <span>XI RPL 1 • Gerbang Utama</span>
                </div>

                <small>07:02</small>
            </div>

            <div class="activity-item">
                <div class="activity-avatar">NS</div>

                <div class="activity-info">
                    <strong>Nabila Salsabila</strong>
                    <span>XII RPL 2 • Lobby</span>
                </div>

                <small>07:04</small>
            </div>

            <div class="activity-item">
                <div class="activity-avatar">RF</div>

                <div class="activity-info">
                    <strong>Rizky Firmansyah</strong>
                    <span>X RPL 1 • Laboratorium</span>
                </div>

                <small>07:06</small>
            </div>

            <div class="activity-item">
                <div class="activity-avatar">DP</div>

                <div class="activity-info">
                    <strong>Dinda Putri</strong>
                    <span>XI RPL 2 • Gerbang Utama</span>
                </div>

                <small>07:08</small>
            </div>

        </div>
    </div>

</div>

<div class="dashboard-card">

    <div class="card-header">
        <div>
            <h3>Aksi Cepat</h3>
            <p>Akses menu yang sering digunakan</p>
        </div>
    </div>

    <div class="quick-grid">

        <a href="{{ url('/admin-test?page=siswa') }}" class="quick-item">
            <span>👨‍🎓</span>
            <div>
                <strong>Data Siswa</strong>
                <small>Kelola data siswa</small>
            </div>
        </a>

        <a href="{{ url('/admin-test?page=qrcode') }}" class="quick-item">
            <span>▧</span>
            <div>
                <strong>Kelola QR Code</strong>
                <small>Kelola QR absensi</small>
            </div>
        </a>

        <a href="{{ url('/admin-test?page=laporan') }}" class="quick-item">
            <span>📊</span>
            <div>
                <strong>Laporan</strong>
                <small>Lihat rekap absensi</small>
            </div>
        </a>

        <a href="{{ url('/admin-test?page=jadwal') }}" class="quick-item">
            <span>📅</span>
            <div>
                <strong>Jadwal</strong>
                <small>Kelola jadwal</small>
            </div>
        </a>

    </div>
</div>


@elseif($page == 'siswa')

<div class="dashboard-header">

    <div>
        <p class="dashboard-label">DATA MASTER</p>

        <h1>Data Siswa</h1>

        <p class="dashboard-subtitle">
            Kelola data siswa SMKN 1 Maja.
        </p>
    </div>

    <button class="primary-button" onclick="document.getElementById('formTambahSiswa').style.display='block'">
        + Tambah Siswa
    </button>

</div>


<!-- FORM TAMBAH SISWA -->

<!-- FORM TAMBAH SISWA -->

<div class="dashboard-card" id="formTambahSiswa" style="display:none; margin-bottom:20px;">

    <div class="card-header">
        <div>
            <h3>Tambah Siswa</h3>
            <p>Masukkan data siswa baru.</p>
        </div>

        <button
            type="button"
            onclick="document.getElementById('formTambahSiswa').style.display='none'"
            style="border:none; background:none; font-size:20px; cursor:pointer;"
        >
            ×
        </button>
    </div>

    <div style="padding:20px;">

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div style="margin-bottom:18px;">
                <label>NIS</label>
                <input
                    type="text"
                    name="nis"
                    placeholder="Masukkan NIS"
                    required
                    style="width:100%; padding:12px; margin-top:7px; border:1px solid #ddd; border-radius:10px;"
                >
            </div>

            <div style="margin-bottom:18px;">
                <label>Nama Siswa</label>
                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama siswa"
                    required
                    style="width:100%; padding:12px; margin-top:7px; border:1px solid #ddd; border-radius:10px;"
                >
            </div>

            <div style="margin-bottom:18px;">
                <label>Kelas</label>
                <select
                    name="class_id"
                    required
                    style="width:100%; padding:12px; margin-top:7px; border:1px solid #ddd; border-radius:10px;"
                >
                    <option value="">Pilih kelas</option>
                    <option value="1">X RPL 1</option>
                    <option value="2">X RPL 2</option>
                    <option value="3">XI RPL 1</option>
                    <option value="4">XI RPL 2</option>
                    <option value="5">XII RPL 1</option>
                    <option value="6">XII RPL 2</option>
                </select>
            </div>

            <button type="submit" class="primary-button">
                Simpan Siswa
            </button>

        </form>

    </div>

</div>

<!-- TABEL SISWA -->

<div class="dashboard-card">

    <div class="table-toolbar">

        <div class="table-search">
            <span>⌕</span>

            <input
                type="text"
                placeholder="Cari nama, NIS, atau kelas..."
            >
        </div>

        <select class="table-filter">

            <option>Semua Kelas</option>
            <option>X RPL 1</option>
            <option>X RPL 2</option>
            <option>XI RPL 1</option>
            <option>XI RPL 2</option>
            <option>XII RPL 1</option>
            <option>XII RPL 2</option>

        </select>

    </div>


    <div class="table-wrapper">

        <table class="student-table">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

            </thead>


           <tbody>
    @forelse($students as $index => $student)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $student->nama }}</strong></td>
            <td>{{ $student->nis }}</td>
           <td>
    @php
        $kelas = [
            1 => 'X RPL 1',
            2 => 'X RPL 2',
            3 => 'XI RPL 1',
            4 => 'XI RPL 2',
            5 => 'XII RPL 1',
            6 => 'XII RPL 2',
        ];
    @endphp

    {{ $kelas[$student->class_id] ?? 'Belum ada kelas' }}
</td>

            <td>
                <span class="status active">Aktif</span>
            </td>

            <td>
                <div class="action-buttons">
                    <a href="{{ url('/students/' . $student->id . '/edit') }}" class="edit-btn">
    ✎
</a>
                    <form action="{{ url('/students/' . $student->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-btn"
        onclick="return confirm('Yakin ingin menghapus siswa ini?')">
        ×
    </button>
</form>
                </div>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" style="text-align:center; padding:30px;">
                Belum ada data siswa.
            </td>
        </tr>
    @endforelse
</tbody>

        </table>

    </div>

</div>

@else

<div class="dashboard-header">

    <div>
        <p class="dashboard-label">ABSENSI ONLINE</p>

        <h1>
            {{ ucwords(str_replace('_', ' ', $page)) }}
        </h1>

        <p class="dashboard-subtitle">
            Halaman ini siap digunakan dan akan kita isi berikutnya.
        </p>
    </div>

</div>


<div class="dashboard-card empty-page">

    <div class="empty-icon">
        ⚙
    </div>

    <h2>
        {{ ucwords(str_replace('_', ' ', $page)) }}
    </h2>

    <p>
        Konten menu ini akan dibuat setelah halaman sebelumnya selesai.
    </p>

</div>

@endif

@endsection