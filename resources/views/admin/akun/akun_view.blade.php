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

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
