@php
    $title = 'Data Paket &raquo; Tambah';
@endphp
@extends('layout.template')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Tambah Data Paket</h3>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">

            <form class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="nama_paket" class="form-label label">Nama Paket</label>
                    <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="nama_paket"
                            placeholder="Masukkan nama paket" name="nama_paket" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-file-list-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="type_mobil" class="form-label label">Tipe Mobil</label>
                    <div class="position-relative">
                        <select class="form-select form-control h-58 ps-5" id="type_mobil" name="type_mobil" required>
                            <option selected disabled value="">Pilih...</option>
                            <option value="Manual">Manual</option>
                            <option value="Matic">Matic</option>
                        </select>
                        <div class="invalid-feedback">
                            Pilih Salah Satu
                        </div>
                        <i class="ri-car-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="harga_paket" class="form-label label">Harga Paket</label>
                    <div class="position-relative">
                        <input type="number" class="form-control h-58 ps-5" id="harga_paket"
                            placeholder="Masukkan harga paket" name="harga_paket" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="status_mobil" class="form-label label">Status</label>
                    <div class="position-relative">
                        <select class="form-select form-control h-58 ps-5" id="status_mobil" name="status_mobil" required>
                            <option selected disabled value="">Pilih...</option>
                            <option value="Ready" selected>Ready</option>
                            <option value="Maintenance">Maintenance</option>
                        </select>
                        <div class="invalid-feedback">
                            Pilih Salah Satu
                        </div>
                        <i class="ri-chat-check-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="nopol" class="form-label label">Nomor Polisi</label>
                    <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="nopol"
                            placeholder="Masukkan Nomor Polisi" name="nopol" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="tahun" class="form-label label">Tahun Mobil</label>
                    <div class="position-relative">
                        <input type="number" class="form-control h-58 ps-5" id="tahun"
                            placeholder="Masukkan tahun" name="tahun" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="gambar" class="form-label label">Gambar Mobil</label>
                    <div class="position-relative">
                        <input type="file" class="form-control h-58 ps-5" id="gambar"
                            placeholder="Masukkan gambar" name="gambar" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="logo" class="form-label label">Logo Mobil</label>
                    <div class="position-relative">
                        <input type="file" class="form-control h-58 ps-5" id="logo"
                            placeholder="Masukkan logo" name="logo" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="deskripsi" class="form-label label">Deskripsi Paket :</label>
                    <div class="position-relative">
                        <textarea cols="30" rows="5" class="form-control ps-5 py-3" id="deskripsi" name="deskripsi" placeholder="Deskripsi"
                            required></textarea>
                        <div class="invalid-feedback">
                            Please provide a valid Notes.
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
