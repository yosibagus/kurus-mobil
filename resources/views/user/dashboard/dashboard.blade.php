@extends('user.layout.layout')

@section('header')
    @include('user.layout.header_transparant')
@endsection

@section('content')
    <!-- Banner -->
    <div class="banner-wrapper author-notification">
        <div class="container inner-wrapper">
            <div class="dz-info">
                <span>{{ $ucapan }}</span>
                <h2 class="name mb-0">{{ Auth::user()->nama_lengkap }}</h2>
            </div>
            <div class="dz-media media-45 rounded-circle">
                <a href="{{ url('profil-user') }}">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg"
                        class="rounded-circle" alt="author-image">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Page Content -->
    <div class="page-content">

        <div class="content-inner pt-0">
            <div class="container fb">

                <!-- Dashboard Area -->
                <div class="dashboard-area">
                    <!-- Features -->
                    <div class="features-box" style="margin-top: 50px;">
                        <div class="row m-b20 g-3">
                            <div class="col">
                                <div class="card card-bx card-content bg-primary">
                                    <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="50" height="50" viewBox="0 0 24 24" version="1.1"
                                            class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
                                                    fill="#fff" />
                                                <path
                                                    d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
                                                    fill="#fff" fill-rule="nonzero" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <div class="card-info">
                                            <h4 class="title">{{ $selesai }}</h4>
                                            <p>Selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bx card-content bg-secondary">
                                    <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="50" height="50" viewBox="0 0 24 24" version="1.1"
                                            class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M12,2 C13.8385982,2 15.5193947,3.03878936 16.3416408,4.68328157 L19,10 C20.365323,12.730646 19.25851,16.0510849 16.527864,17.4164079 C15.7602901,17.8001948 14.9139019,18 14.0557281,18 L9.94427191,18 C6.8913169,18 4.41640786,15.525091 4.41640786,12.472136 C4.41640786,11.6139622 4.61621302,10.767574 5,10 L7.65835921,4.68328157 C8.48060532,3.03878936 10.1614018,2 12,2 Z M7.55,13.6 C9.00633458,14.6922509 10.4936654,15.25 12,15.25 C13.5063346,15.25 14.9936654,14.6922509 16.45,13.6 L15.55,12.4 C14.3396679,13.3077491 13.1603321,13.75 12,13.75 C10.8396679,13.75 9.66033208,13.3077491 8.45,12.4 L7.55,13.6 Z"
                                                    fill="#fff" />
                                                <path
                                                    d="M6.15999985,21.0604779 L8.15999985,17.5963763 C8.43614222,17.1180837 9.04773263,16.9542085 9.52602525,17.2303509 C10.0043179,17.5064933 10.168193,18.1180837 9.89205065,18.5963763 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 Z M17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L14.1000004,18.5660262 C13.823858,18.0877335 13.9877332,17.4761431 14.4660258,17.2000008 C14.9443184,16.9238584 15.5559088,17.0877335 15.8320512,17.5660262 L17.8320512,21.0301278 Z"
                                                    fill="#fff" opacity="0.3" />
                                            </g>
                                        </svg>

                                        <div class="card-info">
                                            <h4 class="title">{{ $proses }}</h4>
                                            <p>Proses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Features End -->

                    <!-- Recent Jobs -->
                    <div class="title-bar">
                        <h5 class="dz-title">Daftar Paket</h5>
                        <a class="btn btn-sm text-primary" href="{{ url('paket') }}">Selengkapnya</a>
                    </div>
                    <div class="list item-list recent-jobs-list">
                        <ul>
                            @foreach ($paket as $get)
                                <li>
                                    <div class="item-content">
                                        <a href="job-detail.html" class="item-media">
                                            <img src="{{ asset('logo/' . $get->logo) }}" width="55" alt="logo">
                                        </a>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                {{-- <div class="item-subtitle">Daihatsu</div> --}}
                                                <h6 class="item-title">
                                                    <a href="job-detail.html">{{ $get->nama_paket }}</a>
                                                </h6>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                        fill="#40189D" />
                                                </svg>
                                                <div class="item-price">Rp {{ number_format($get->harga_paket, 0, 2, '.') }}
                                                </div>


                                            </div>
                                            <div>
                                                <a href="{{ url('pesan/' . $get->id_paket) }}">Lihat Detail <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sortable-handler"></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Recent Jobs End -->

                </div>
            </div>
        </div>

    </div>
    <!-- Page Content End-->
@endsection
