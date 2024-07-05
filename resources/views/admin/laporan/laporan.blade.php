@php
    $title = 'Data Laporan';
@endphp
@extends('layout.template')

@if (isset($orders))
    <title>Laporan Pesanan dari {{ date('d-m-Y', strtotime($startDate)) }} sd
        {{ date('d-m-Y', strtotime($endDate)) }} </title>
@endif

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">{{ $title }}</h4>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label for="start_date">Tanggal Awal:</label>
                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="end_date">Tanggal Akhir:</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary text-center mt-2 text-white mb-2">Tampilkan
                        Laporan</button>
                    <a href="" class="btn btn-danger text-center mt-2 text-white mb-2">
                        Reset</a>
                </div>
            </form>
            <div class="default-table-area members-list">
                @if (isset($orders))
                    <div class="text-center">
                        <h6>Laporan Pesanan dari {{ date('d-m-Y', strtotime($startDate)) }} hingga
                            {{ date('d-m-Y', strtotime($endDate)) }}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle" id="orderTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Transaksi</th>
                                    <th scope="col">TGL Pesan</th>
                                    <th scope="col">TGL Mulai</th>
                                    <th scope="col">Pembayaran</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tentor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $get)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $get->nama_lengkap }}</td>
                                        <td>
                                            #{{ $get->no_transaksi }} <br>
                                            {{ $get->nama_paket }}
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($get->tgl_pesan)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($get->req_tgl_mulai)) }}</td>
                                        <td>
                                            Rp{{ number_format($get->total, 0, 2, '.') }} <br>
                                            <small>{{ $get->status_bayar }}</small>
                                        </td>
                                        <td>{{ $get->status_pelatihan }}</td>
                                        <td>{{ $get->req_tentor }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td colspan="4"></td>
                                    <td>Rp{{ number_format($sum, 0, 2, '.') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#orderTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        footer: true,
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            $('row:last c', sheet).attr('s', '25'); // Styling for the last row
                        }
                    },
                    {
                        extend: 'pdf',
                        footer: true,
                        customize: function(doc) {
                            doc.styles.tableFooter = {
                                bold: true,
                                fontSize: 11,
                                alignment: 'center'
                            };
                        }
                    },
                    {
                        extend: 'print',
                        footer: true
                    }
                ],
                footer: true
            });
        });
    </script>
@endsection
