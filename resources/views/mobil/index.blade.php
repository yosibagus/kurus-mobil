@extends('layout.template')

@section('content')
<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-bold fs-18 mb-0">Data Paket 
            <br><br><br><a href="/mobil/create" class="btn btn-success fw-semibold text-white py-2 px-4 mt-2 me-2">Tambah Data</a></h4>
           
        </div>
        <div class="default-table-area recent-orders">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                                <th>Merk Mobil</th>
                                <th>Type Mobil</th>
                                <th>Tahun</th>
                                <th>Nopol</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($mobil as $m)
                    <tbody>
                        <tr>
                                <td>{{$m->merk_mobil}}</td>
                                <td>{{$m->type_mobil}}</td>
                                <td>{{$m->tahun}}</td>
                                <td>{{$m->nopol}}</td>
                                <td>{{$m->gambar}}</td>
                                <td>
                                    <a href="/mobil/{{$m->id}}/edit" class="btn btn-warning fw-semibold text-white">Edit</a>
                                    <form action="/mobil/{{$m->id}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a><input type="submit" value="Delete" class="btn btn-danger fw-semibold text-white"></a>
                                    </form>
                                    
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-sm-flex justify-content-between align-items-center text-center">
                <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                        <li class="page-item">
                            <a class="page-link icon" href="index.html" aria-label="Previous">
                                <i data-feather="arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="index.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="index.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="index.html">3</a></li>
                        <li class="page-item">
                            <a class="page-link icon" href="index.html" aria-label="Next">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection