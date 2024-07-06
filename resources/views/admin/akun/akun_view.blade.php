@php
    $title = 'Data ' . $role;
@endphp
@extends('layout.template')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">{{ $title }}</h4>
                @if ($role == 'admin')
                    <a href="{{ url('data-akun/' . $role . '/tambah') }}"
                        class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                        <span class="py-sm-1 d-block">
                            <i class="ri-add-line text-white"></i>
                            <span>Tambah Data {{ $role }}</span>
                        </span>
                    </a>
                @endif
            </div>
            <div class="default-table-area members-list">
                <div class="table-responsive">
                    <table class="table align-middle" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($akun as $get)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $get->nama_lengkap }}</td>
                                    <td>{{ $get->no_hp }}</td>
                                    <td>{{ $get->alamat }}</td>
                                    <td>{{ $get->email }}</td>
                                    <td>
                                        <div class="dropdown action-opt">
                                            <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('data-akun/' . $get->role . '/' . $get->id . '/edit') }}">
                                                        <i data-feather="edit"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#" type="buttom"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#hapus-user-{{ $get->id }}">
                                                        <i data-feather="trash-2"></i>
                                                        Hapus
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                {{-- modal hapus --}}
                                <div class="modal fade" id="hapus-user-{{ $get->id }}" data-bs-backdrop="static"
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
                                                Hapus Pengguna <b>{{ $get->nama_lengkap }}</b> secara permanen?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger text-white"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ url('data-akun/' . $get->id . '/hapus') }}"
                                                    class="btn btn-primary text-white">Ya! Hapus</a>
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
