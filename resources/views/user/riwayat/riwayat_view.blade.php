@extends('user.layout.layout')

@section('content')
    <header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                    fill="#a19fa8" />
                            </svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Riwayat Pesanan</h5>
                    </div>
                    <div class="right-content">
                        <a href="javascript:void(0);" class="menu-toggler">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z"
                                    fill="#a19fa8" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                    fill="#a19fa8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page content -->
    <div class="page-content bottom-content ">
        <div class="container">
            <div class="notification-content">
                @foreach ($transaksi as $get)
                <a href="{{ url('transaksi/' . $get->no_transaksi) }}">
                    <div class="card">
                        <div class="card-body" style="padding: 0">
                            <div class="notification" style="margin: 0;">
                                <h6>#{{ $get->no_transaksi }}</h6>
                                <p>{{ $get->nama_paket }}</p>
                                <div class="notification-footer">
                                    <span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                                stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 3V6L8 7" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        {{ $get->tgl_pesan }}
                                    </span>
                                    <p class="mb-0">
                                        @if ($get->status_bayar != 'settlement')
                                        @if (Carbon::now()->greaterThan($get->batas_pembayaran))
                                            <span class="badge bg-danger">Kardaluarsa</span>
                                        @else
                                            {!! $get->status_bayar == 'settlement'
                                                ? '<span class="badge bg-success">Berhasil</span>'
                                                : '<span class="badge bg-primary">Pending</span>' !!}
                                        @endif
                                    @else
                                        {!! $get->status_bayar == 'settlement'
                                            ? '<span class="badge bg-success">Berhasil</span>'
                                            : '<span class="badge bg-primary">Pending</span>' !!}
                                    @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page content End-->
@endsection
