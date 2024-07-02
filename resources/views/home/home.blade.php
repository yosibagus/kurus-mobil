@extends('layout.template')

@section('content')

<div class="row justify-content-center">
    <div class="col-xxl-12">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                            <div class="flex-grow-1 me-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">1</h3>
                                <span>User</span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="icon transition">
                                    <i class="flaticon-donut-chart"></i>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                            <div class="flex-grow-1 me-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">2</h3>
                                <span>Paket Kursus</span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="icon transition">
                                    <i class="flaticon-goal"></i>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                            <div class="flex-grow-1 me-3">
                                <h3 class="body-font fw-bold fs-3 mb-2">5</h3>
                                <span>Customers</span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="icon transition">
                                    <i class="flaticon-award"></i>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
    
    </div>

</div>
<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-bold fs-18 mb-0">Data Paket</h4>
           
        </div>
        <div class="default-table-area recent-orders">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-primary">ID</th>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Type Mobil</th>
                            <th scope="col">Kali Pertemuan</th>
                            <th scope="col">Jadwal Buka</th>
                            <th scope="col">Jadwal Tutup</th>
                            <th scope="col">Harga Paket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">#SK258</td>
                            <td>
                                <a href="product-details.html" class="d-flex align-items-center">
                                    <img src="assets/images/product-1.jpg" class="wh-55 rounded-3"
                                        alt="product-1">
                                    <h6>Laptop Macos Pro</h6>
                                </a>
                            </td>
                            <td>Colin Firth</td>
                            <td>$289.50</td>
                            <td>Boetic Fashion</td>
                            <td>2024-12-19</td>
                            <td>
                                <span
                                    class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">Pending</span>
                            </td>
                           
                        </tr>
                        <tr>
                            <td class="fw-semibold">#AA257</td>
                            <td>
                                <a href="product-details.html" class="d-flex align-items-center">
                                    <img src="assets/images/product-2.jpg" class="wh-55 rounded-3"
                                        alt="product-2">
                                    <h6>Smart Camera XD6</h6>
                                </a>
                            </td>
                            <td>Alina Smith</td>
                            <td>$876.55</td>
                            <td>Camera</td>
                            <td>02-12-2024</td>
                            <td>
                                <span
                                    class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Out
                                    of Stock</span>
                            </td>
                           
                        </tr>
                        <tr>
                            <td class="fw-semibold">#BB256</td>
                            <td>
                                <a href="product-details.html" class="d-flex align-items-center">
                                    <img src="assets/images/product-3.jpg" class="wh-55 rounded-3"
                                        alt="product-3">
                                    <h6>Pixi 8 Wireless Airphone</h6>
                                </a>
                            </td>
                            <td>James Andy</td>
                            <td>$654.76</td>
                            <td>Wireless</td>
                            <td>03-12-2024</td>
                            <td>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Delivered</span>
                            </td>
                           
                        </tr>
                        <tr>
                            <td class="fw-semibold">#CC255</td>
                            <td>
                                <a href="product-details.html" class="d-flex align-items-center">
                                    <img src="assets/images/product-4.jpg" class="wh-55 rounded-3"
                                        alt="product-4">
                                    <h6>Jebble Smart Watch</h6>
                                </a>
                            </td>
                            <td>Sarah Taylor</td>
                            <td>$654.99</td>
                            <td>Jebble</td>
                            <td>04-12-2024</td>
                            <td>
                                <span
                                    class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">Pending</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td class="fw-semibold">#DD254</td>
                            <td>
                                <a href="product-details.html" class="d-flex align-items-center">
                                    <img src="assets/images/product-5.jpg" class="wh-55 rounded-3"
                                        alt="product-5">
                                    <h6>Smart Watch F8 Pro</h6>
                                </a>
                            </td>
                            <td>David Warner</td>
                            <td>$432.00</td>
                            <td>Watch</td>
                            <td>05-12-2024</td>
                            <td>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Delivered</span>
                            </td>
                            
                        </tr>
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