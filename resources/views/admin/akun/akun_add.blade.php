@php
    $title = 'Data Tentor &raquo; Tambah ' . $role;
@endphp
@extends('layout.template')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Tambah Data {{ $role }}</h3>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">

            <form class="row g-3 needs-validation" novalidate method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="nama_lengkap" class="form-label label">Nama Lengkap</label>
                    <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="nama_lengkap"
                            placeholder="Masukkan nama lengkap" name="nama_lengkap" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-file-list-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_hp" class="form-label label">Nomor HP/WhatsApp</label>
                    <div class="position-relative">
                        <input type="number" class="form-control h-58 ps-5" id="no_hp"
                            placeholder="Masukkan harga paket" name="no_hp" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label label">Email</label>
                    <div class="position-relative">
                        <input type="email" class="form-control h-58 ps-5" id="email" placeholder="Masukkan Email"
                            name="email" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label label">Password</label>
                    <div class="position-relative">
                        <input type="password" class="form-control h-58 ps-5" id="password" placeholder="Masukkan password"
                            name="password" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="alamat" class="form-label label">Alamat:</label>
                    <div class="position-relative">
                        <textarea cols="30" rows="5" class="form-control ps-5 py-3" id="alamat" name="alamat"
                            placeholder="Alamat" required></textarea>
                        <div class="invalid-feedback">
                            Tidak boleh kosong
                        </div>
                        <i class="ri-sticky-note-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Simpan Data</button>
                    <a href="{{ url('data-paket') }}" class="btn btn-danger fw-semibold text-white py-2 px-3">Kembali</a>
                </div>
            </form>

        </div>
    </div>
@endsection
