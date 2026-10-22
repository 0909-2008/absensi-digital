@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<div class="dashboard-header">
    <div>
        <p class="dashboard-label">DATA MASTER</p>
        <h1>Data Siswa</h1>
        <p class="dashboard-subtitle">
            Kelola data siswa SMKN 1 Maja.
        </p>
    </div>

    <button class="primary-button">
        + Tambah Siswa
    </button>
</div>


<div class="dashboard-card">

    <!-- TOOLBAR -->
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

        <button class="filter-button">
            ⚙ Filter
        </button>

    </div>


    <!-- TABLE -->
    <div class="table-wrapper">

        <table class="student-table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>

                    <td>
                        <div class="student-avatar">AP</div>
                    </td>

                    <td>
                        <strong>Andi Pratama</strong>
                    </td>

                    <td>1234567001</td>

                    <td>XII RPL 1</td>

                    <td>
                        <span class="status active">Aktif</span>
                    </td>

                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn">✎</button>
                            <button class="delete-btn">×</button>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>2</td>

                    <td>
                        <div class="student-avatar">SN</div>
                    </td>

                    <td>
                        <strong>Siti Nurhaliza</strong>
                    </td>

                    <td>1234567002</td>

                    <td>XII RPL 1</td>

                    <td>
                        <span class="status active">Aktif</span>
                    </td>

                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn">✎</button>
                            <button class="delete-btn">×</button>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>3</td>

                    <td>
                        <div class="student-avatar">BS</div>
                    </td>

                    <td>
                        <strong>Budi Santoso</strong>
                    </td>

                    <td>1234567003</td>

                    <td>XI TKJ 1</td>

                    <td>
                        <span class="status active">Aktif</span>
                    </td>

                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn">✎</button>
                            <button class="delete-btn">×</button>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>4</td>

                    <td>
                        <div class="student-avatar">RW</div>
                    </td>

                    <td>
                        <strong>Rina Wulandari</strong>
                    </td>

                    <td>1234567004</td>

                    <td>XII MM 2</td>

                    <td>
                        <span class="status active">Aktif</span>
                    </td>

                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn">✎</button>
                            <button class="delete-btn">×</button>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>5</td>

                    <td>
                        <div class="student-avatar">DK</div>
                    </td>

                    <td>
                        <strong>Dedi Kurniawan</strong>
                    </td>

                    <td>1234567005</td>

                    <td>X KS 1</td>

                    <td>
                        <span class="status active">Aktif</span>
                    </td>

                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn">✎</button>
                            <button class="delete-btn">×</button>
                        </div>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>


    <!-- PAGINATION -->
    <div class="table-footer">

        <span>Menampilkan 1–5 dari 452 siswa</span>

        <div class="pagination">
            <button>‹</button>
            <button class="current">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>›</button>
        </div>

    </div>

</div>

@endsection