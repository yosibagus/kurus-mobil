@php
    use Carbon\Carbon;
@endphp
@extends('user.layout.layout')

@section('content')
    <div class="head-details">
        <div class=" container">
            <div class="dz-info">
                <span class="location d-block">Paket yang dipilih</span>
                <h5 class="title">{{ $paket->nama_paket }}</h5>
                <span style="color: white">Tagihan : Rp{{ number_format($paket->harga_paket, 0, 2, '.') }}</span>
            </div>
            <div class="dz-media media-65">
                <img src="{{ asset('logo/' . $paket->logo) }}" alt="">
            </div>
        </div>
    </div>
    <div class="fixed-content p-0">
        <div class="container">
            <div class="main-content">
                <div class="left-content">
                    <a href="{{ url('riwayat') }}" class="back-btn">
                        <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                fill="#a19fa8" />
                        </svg>
                    </a>
                </div>
                <div class="mid-content">
                    <h5 class="mb-0">Transaksi</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <div class="container">
        @if ($transaksi->req_tentor == '')
            <form class="my-2" method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="">&nbsp;&nbsp;&nbsp;Tanggal Pelatihan</label>
                    <input type="datetime-local" name="req_tgl_mulai" id="req_tgl_mulai" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="">&nbsp;&nbsp;&nbsp;Pilih Mentor</label>
                    <select class="form-control" name="id_tentor" id="id_tentor">
                        <option value="">Pilih...</option>
                        @foreach ($tentor as $get)
                            @php
                                $birthdate = Carbon::parse($get->tanggal_lahir);
                                $age = $birthdate->age;
                            @endphp
                            <option value="{{ $get->nama_tentor }}">{{ $get->nama_tentor }} - {{ $age }} Tahun
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="button" class="btn btn-primary w-100 btn-rounded mt-3" onclick="bayar()">Bayar</button>
            </form>
        @else
            <div class="card">
                <div class="card-body">
                    <h6>#{{ $transaksi->no_transaksi }}</h6>
                    <table class="table">
                        <tr>
                            <td>Tanggal Pesan</td>
                            <td>:</td>
                            <td>{{ $transaksi->tgl_pesan }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>:</td>
                            <td>{{ $transaksi->req_tgl_mulai }}</td>
                        </tr>
                        <tr>
                            <td>Tentor</td>
                            <td>:</td>
                            <td>{{ $transaksi->req_tentor }}</td>
                        </tr>
                        <tr>
                            <td>Status Bayar</td>
                            <td>:</td>
                            <td>
                                @if ($transaksi->status_bayar != 'settlement')
                                    @if (Carbon::now()->greaterThan($transaksi->batas_pembayaran))
                                        <span class="badge bg-danger">Kardaluarsa</span>
                                    @else
                                        {!! $transaksi->status_bayar == 'settlement'
                                            ? '<span class="badge bg-success">Berhasil</span>'
                                            : '<span class="badge bg-primary">Pending</span>' !!}
                                    @endif
                                @else
                                    {!! $transaksi->status_bayar == 'settlement'
                                        ? '<span class="badge bg-success">Berhasil</span>'
                                        : '<span class="badge bg-primary">Pending</span>' !!}
                                @endif
                            </td>
                        </tr>
                        @if ($transaksi->status_bayar != 'settlement')
                            <tr>
                                <td>Batas Bayar</td>
                                <td>:</td>
                                <td>{{ $transaksi->batas_pembayaran }}</td>
                            </tr>
                        @else
                            <tr>
                                <td>Tanggal Bayar</td>
                                <td>:</td>
                                <td>{{ $transaksi->tgl_bayar }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
            @if ($transaksi->status_bayar != 'settlement')
                @if (Carbon::now()->greaterThan($transaksi->batas_pembayaran))
                    Pembayaran Kardaluarsa
                @else
                    <button class="btn btn-primary btn-sm w-100" onclick="bayartwo()" type="button">Bayar</button>
                @endif
            @endif
        @endif
        <div id="snap-container"></div>

    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        function bayartwo() {
            var token = "{{ $transaksi->no_transaksi }}";
            $.ajax({
                type: "GET",
                url: "{{ url('getsnap') }}/" + token,
                dataType: 'json',
                success: function(data) {
                    window.snap.pay(data.token, {
                        onSuccess: function(result) {
                            updateSnap(result);
                            location.reload();
                        },
                        onPending: function(result) {
                            location.reload();
                            updateSnap(result);
                        },
                        onError: function(result) {
                            updateSnap(result);
                            location.reload();
                        },
                        onClose: function() {
                            alert('you closed the popup without finishing the payment');
                        }
                    })
                }
            })
        }

        function bayar() {
            var tgl = $("#req_tgl_mulai").val();
            var id_tentor = $("#id_tentor").val();
            var token = "{{ $transaksi->no_transaksi }}";
            $.ajax({
                type: "GET",
                url: "{{ url('getsnap') }}/" + token,
                data: {
                    tgl: tgl,
                    id_tentor: id_tentor
                },
                dataType: 'json',
                success: function(data) {
                    window.snap.pay(data.token, {
                        onSuccess: function(result) {
                            updateSnap(result);
                            location.reload();
                        },
                        onPending: function(result) {
                            updateSnap(result);
                            location.reload();
                        },
                        onError: function(result) {
                            updateSnap(result);
                            location.reload();
                        },
                        onClose: function() {
                            alert('you closed the popup without finishing the payment');
                            location.reload();

                        }
                    })
                }
            })
        }

        function updateSnap(result) {
            console.log(result);
            $.ajax({
                type: "GET",
                url: "{{ url('transaksi/checkout') }}/" + result.order_id,
                data: {
                    pdf_url: result.pdf_url,
                    transaction_status: result.transaction_status,
                    transaction_time: result.transaction_time
                },
                success: function() {
                    console.log('berhasil');
                }

            })
        }
    </script>
@endsection
