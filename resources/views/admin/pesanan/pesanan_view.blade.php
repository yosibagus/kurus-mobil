
@php
    $title = 'Data Pesanan';
    use Carbon\Carbon;
@endphp
@extends('layout.template')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">{{ $title }}</h4>
            </div>
            <div class="default-table-area members-list">
                <div class="table-responsive">
                    <table class="table align-middle" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Transaksi</th>
                                <th scope="col">Tentor</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status Bayar</th>
                                <th scope="col">Status Pesanan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $get)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $get->nama_lengkap }}</td>
                                    <td>
                                        <b>#{{ $get->no_transaksi }}</b> <br>
                                        <small>{{ $get->nama_paket }}</small>
                                    </td>
                                    <td>{{ $get->req_tentor }}</td>
                                    <td>{{ $get->req_tgl_mulai }}</td>
                                    <td>Rp{{ number_format($get->total, 0, 2, '.') }}</td>
                                    <td>
                                        @if ($get->status_bayar != 'settlement')
                                            @if (Carbon::now()->greaterThan($get->batas_pembayaran))
                                                <span class="badge bg-danger">Kardaluarsa</span>
                                            @else
                                                {!! $get->status_bayar == 'settlement'
                                                    ? '<span class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Berhasil</span>'
                                                    : '<span class="badge bg-secondary bg-opacity-10 text-secondary py-2 px-3 fw-semibold">Pending</span>' !!}
                                            @endif
                                        @else
                                            {!! $get->status_bayar == 'settlement'
                                                ? '<span class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Berhasil</span>'
                                                : '<span class="badge bg-secondary bg-opacity-10 text-secondary py-2 px-3 fw-semibold">Pending</span>' !!}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($get->status_pelatihan == 'proses')
                                            <span
                                                class="badge bg-secondary bg-opacity-10 text-secondary py-2 px-3 fw-semibold">Belum</span>
                                        @elseif ($get->status_pelatihan == 'terima')
                                            <span
                                                class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">Proses</span>
                                        @else
                                            <span
                                                class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Selesai</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($get->status_bayar == 'settlement')
                                            @if ($get->status_pelatihan == 'proses')
                                                <a href="#" type="button" class="badge bg-primary text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#proses-pesanan-{{ $get->no_transaksi }}">
                                                    Proses <i class="ri-arrow-right-line"></i>
                                                </a>
                                            @elseif($get->status_pelatihan == 'terima')
                                                <a href="{{ url('daftar-pesanan/selesai/' . $get->no_transaksi) }}"
                                                    class="badge bg-primary">Selesaikan</a>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                <div class="modal fade" id="proses-pesanan-{{ $get->no_transaksi }}"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Proses Pesanan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('daftar-pesanan/' . $get->no_transaksi) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="tentor">Tentor</label>
                                                        <select name="tentor" id="tentor"
                                                            class="form-control form-select">
                                                            <option value="">Pilih...</option>
                                                            @foreach ($tentor as $val)
                                                                <option
                                                                    {{ $get->req_tentor == $val->nama_tentor ? 'selected' : '' }}
                                                                    value="{{ $val->nama_tentor }}">
                                                                    {{ $val->nama_tentor }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="tgl">Tanggal Pelatihan</label>
                                                        <input type="datetime-local" name="tgl"
                                                            value="{{ $get->req_tgl_mulai }}" class="form-control">
                                                    </div>
                                                    <button type="button" class="btn btn-danger text-white mt-4"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary text-white mt-4">Proses
                                                        Pesanan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
