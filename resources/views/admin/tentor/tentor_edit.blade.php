@php
    $title = 'Data Tentor &raquo; Edit &raquo; ' . $detail->nama_tentor;
@endphp
@extends('layout.template')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Edit Data Tentor</h3>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">

            <form class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="nama_tentor" class="form-label label">Nama Tentor</label>
                    <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="nama_tentor"
                            placeholder="Masukkan nama tentor" name="nama_tentor" value="{{ $detail->nama_tentor }}" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-file-list-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label label">Tanggal Lahir</label>
                    <div class="position-relative">
                        <input type="date" class="form-control h-58 ps-5" id="tanggal_lahir"
                            placeholder="Masukkan harga paket" name="tanggal_lahir" value="{{ $detail->tanggal_lahir }}" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="foto" class="form-label label">Foto Tentor</label>
                    <div class="position-relative">
                        <input type="file" class="form-control h-58 ps-5" id="foto" placeholder="Masukkan foto"
                            name="foto">
                        <div class="invalid-feedback">
                            Tidak boleh kosong.
                        </div>
                        <i class="ri-price-tag-3-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                            <small class="text-primary"><a target="blank" href="{{ asset('foto/' . $detail->foto) }}"><i>Foto Lama : {{ $detail->foto }}</i></a></small>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="biodata" class="form-label label">Biodata/Deskripsi Tentor :</label>
                    <div class="position-relative">
                        <textarea cols="30" rows="5" class="form-control ps-5 py-3" id="biodata" name="biodata"
                            placeholder="biodata" required>{{ $detail->biodata }}</textarea>
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
