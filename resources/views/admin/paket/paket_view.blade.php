@php
    $title = 'Data Paket';
@endphp
@extends('layout.template')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">{{ $title }}</h4>
                <a href="{{ url('data-paket/tambah') }}"
                    class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Tambah Data Paket</span>
                    </span>
                </a>
            </div>
            <div class="default-table-area members-list">
                <div class="table-responsive">
                    <table class="table align-middle" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Harga Paket</th>
                                <th scope="col">Nomor Polisi</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paket as $get)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $get->nama_paket }} <br>
                                        {!! $get->status_mobil == 'Ready'
                                            ? '<span class="badge bg-success">Ready</span>'
                                            : '<span class="badge bg-danger">Maintance</span>' !!}
                                    </td>
                                    <td>Rp{{ number_format($get->harga_paket, 0, 2, '.') }}</td>
                                    <td>{{ $get->nopol }} <br> <span class="text-primary">{{ $get->tahun }}</span></td>
                                    <td><img width="50" src="{{ asset('logo/' . $get->logo) }}" alt=""></td>
                                    <td>
                                        <div class="dropdown action-opt">
                                            <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('data-paket/' . $get->id_paket . '/edit') }}">
                                                        <i data-feather="edit"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" type="buttom"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#hapus-paket-{{ $get->id_paket }}">
                                                        <i data-feather="trash-2"></i>
                                                        Hapus
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                {{-- modal hapus --}}
                                <div class="modal fade" id="hapus-paket-{{ $get->id_paket }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Peringatan!</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hapus Paket {{ $get->nama_paket }} secara permanen?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger text-white"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('data-paket/' . $get->id_paket . '/hapus') }}" class="btn btn-primary text-white">Ya! Hapus</a>
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
