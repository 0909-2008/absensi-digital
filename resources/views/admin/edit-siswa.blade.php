@extends('layouts.admin')

@php
    $page = 'siswa';
@endphp

@section('title', 'Edit Siswa')

@section('content')

<div class="dashboard-header">
    <div>
        <p class="dashboard-label">DATA MASTER</p>
        <h1>Edit Siswa</h1>
        <p class="dashboard-subtitle">
            Ubah data siswa yang dipilih.
        </p>
    </div>
</div>

<div class="dashboard-card">

    <div class="card-header">
        <div>
            <h3>Form Edit Siswa</h3>
            <p>Perbarui data siswa di bawah ini.</p>
        </div>
    </div>

    <div style="padding:20px;">

        <form action="{{ url('/students/' . $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom:18px;">
                <label>NIS</label>
                <input
                    type="text"
                    name="nis"
                    value="{{ $student->nis }}"
                    required
                    style="width:100%; padding:12px; margin-top:7px; border:1px solid #ddd; border-radius:10px;"
                >
            </div>

            <div style="margin-bottom:18px;">
                <label>Nama Siswa</label>
                <input
                    type="text"
                    name="nama"
                    value="{{ $student->nama }}"
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

                    <option value="1" {{ $student->class_id == 1 ? 'selected' : '' }}>
                        X RPL 1
                    </option>

                    <option value="2" {{ $student->class_id == 2 ? 'selected' : '' }}>
                        X RPL 2
                    </option>

                    <option value="3" {{ $student->class_id == 3 ? 'selected' : '' }}>
                        XI RPL 1
                    </option>

                    <option value="4" {{ $student->class_id == 4 ? 'selected' : '' }}>
                        XI RPL 2
                    </option>

                    <option value="5" {{ $student->class_id == 5 ? 'selected' : '' }}>
                        XII RPL 1
                    </option>

                    <option value="6" {{ $student->class_id == 6 ? 'selected' : '' }}>
                        XII RPL 2
                    </option>
                </select>
            </div>

            <button type="submit" class="primary-button">
                Simpan Perubahan
            </button>

            <a
                href="{{ url('/admin-test?page=siswa') }}"
                style="margin-left:10px;"
            >
                Batal
            </a>

        </form>

    </div>

</div>

@endsection