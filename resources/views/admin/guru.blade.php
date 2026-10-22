@extends('layouts.admin')

@section('title', 'Data Guru')

@section('content')

<div class="dashboard-header">
    <div>
        <p class="dashboard-label">DATA MASTER</p>
        <h1>Data Guru</h1>
        <p class="dashboard-subtitle">
            Kelola data guru SMKN 1 Maja.
        </p>
    </div>

    <button class="primary-button">
        + Tambah Guru
    </button>
</div>


<div class="dashboard-card">

    <div class="table-toolbar">

        <div class="table-search">
            <span>⌕</span>
            <input
                type="text"
                placeholder="Cari nama, NIP, atau email..."
            >
        </div>

        <button class="filter-button">
            ⚙ Filter
        </button>

    </div>


    <div class="table-wrapper">

        <table class="student-table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Guru</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>

                    <td>
                        <div class="student-avatar">AH</div>
                    </td>

                    <td>
                        <strong>Ahmad Hidayat</strong>
                    </td>

                    <td>198501012010011001</td>

                    <td>ahmad@smkn1maja.sch.id</td>

                    <td>081234567890</td>

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
                        <div class="student-avatar">DS</div>
                    </td>

                    <td>
                        <strong>Dewi Sari</strong>
                    </td>

                    <td>198702022011022002</td>

                    <td>dewi@smkn1maja.sch.id</td>

                    <td>081234567891</td>

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
                        <div class="student-avatar">RM</div>
                    </td>

                    <td>
                        <strong>Rudi Maulana</strong>
                    </td>

                    <td>198903032012031003</td>

                    <td>rudi@smkn1maja.sch.id</td>

                    <td>081234567892</td>

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
                        <div class="student-avatar">NF</div>
                    </td>

                    <td>
                        <strong>Nina Fitriani</strong>
                    </td>

                    <td>199004042013042004</td>

                    <td>nina@smkn1maja.sch.id</td>

                    <td>081234567893</td>

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
                        <div class="student-avatar">BA</div>
                    </td>

                    <td>
                        <strong>Bambang Arif</strong>
                    </td>

                    <td>198805052011051005</td>

                    <td>bambang@smkn1maja.sch.id</td>

                    <td>081234567894</td>

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


    <div class="table-footer">

        <span>Menampilkan 1–5 dari 32 guru</span>

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