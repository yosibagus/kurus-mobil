
@extends('user.layout.layout')

@section('content')
    <header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="{{ url('/home') }}" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                    fill="#a19fa8" />
                            </svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Detail Paket</h5>
                    </div>
                    <div class="right-content">
                        <div class="form-check checkmark">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                <svg width="18" height="18" viewBox="0 0 20 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6783 1H16.6783C16.9768 0.999982 17.2739 1.06264 17.5529 1.18611L17.9576 0.271637L17.5529 1.18611C17.8321 1.30966 18.0895 1.49246 18.3084 1.72703C18.5274 1.96173 18.7032 2.24332 18.823 2.55692C18.9427 2.87058 19.0033 3.20813 18.9999 3.54952L18.9998 3.54952V3.55952L18.9998 23.8961L18.9998 23.9019C19.0011 24.125 18.9405 24.3396 18.8309 24.5186C18.7216 24.6971 18.5711 24.8286 18.4049 24.9058L18.3955 24.9102L18.3861 24.9148C18.2371 24.9877 18.0756 25.0108 17.9195 24.9851C17.763 24.9594 17.6092 24.884 17.4801 24.7588L17.4744 24.7533L17.4686 24.7479L11.1894 18.8485L11.1702 18.8305L11.1501 18.8135C10.8309 18.5438 10.4257 18.3902 10 18.3902C9.57426 18.3902 9.16907 18.5438 8.8499 18.8135L8.82979 18.8305L8.8106 18.8485L2.53137 24.7479L2.5225 24.7562L2.51384 24.7648C2.38709 24.8898 2.23541 24.9648 2.08123 24.9902C1.9275 25.0155 1.76832 24.9921 1.62181 24.9187L1.60854 24.912L1.59509 24.9058C1.42893 24.8286 1.27843 24.6971 1.16913 24.5186C1.05954 24.3396 0.998878 24.125 1.00017 23.9019H1.00019V23.8961V3.55952H1.00024L1.00014 3.54943C0.99322 2.86376 1.24356 2.21365 1.67989 1.73936C2.11277 1.26881 2.69045 1.01072 3.28296 1H16.6783Z"
                                        stroke="#40189D" stroke-width="2"></path>
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="page-content bottom-content">
        <div class="content-body">
            <div class="container">
                <div class="card">
                    <div class="card-body" style="padding: 5px;">
                        <img src="{{ asset('logo/' . $paket->gambar) }}" style="border-radius: 5px" alt="">
                    </div>
                </div>
                <div class="border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block mb-2">Paket</span>
                            <h5 class="title">{{ $paket->nama_paket }}</h5>
                        </div>
                        <div class="ms-3">
                            <img src="{{ asset('logo/' . $paket->logo) }}" width="50" alt="">
                        </div>
                    </div>
                    <div class="swiper-btn-center-lr">
                        <div class="swiper-container tag-group my-4 team-swiper-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="javascript:void(0);" class="tag-btn">Nomor Polisi : {{ $paket->nopol }}</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0);" class="tag-btn">Tahun Mobil : {{ $paket->tahun }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom">
                    <div class="d-flex align-items-center my-4">
                        <div class="icon-box">
                            <svg class="text-primary" width="25" height="25" viewBox="0 0 31 31" fill="none">
                                <path
                                    d="M10.9793 29.7084C12.5295 29.7176 14.0662 29.4191 15.5002 28.83C16.9326 29.4241 18.4703 29.7228 20.021 29.7084C24.7291 29.7084 28.4168 27.1961 28.4168 23.9876V18.6375C28.4168 15.429 24.7291 12.9167 20.021 12.9167C19.8027 12.9167 19.5883 12.927 19.3752 12.9386V6.88845C19.3752 3.74583 15.6875 1.29166 10.9793 1.29166C6.2712 1.29166 2.5835 3.74583 2.5835 6.88845V24.1116C2.5835 27.2542 6.2712 29.7084 10.9793 29.7084ZM25.8335 23.9876C25.8335 25.4717 23.4465 27.125 20.021 27.125C16.5955 27.125 14.2085 25.4717 14.2085 23.9876V22.7928C15.9577 23.8566 17.9741 24.3993 20.021 24.357C22.0679 24.3993 24.0843 23.8566 25.8335 22.7928V23.9876ZM20.021 15.5C23.4465 15.5 25.8335 17.1533 25.8335 18.6375C25.8335 20.1216 23.4465 21.7736 20.021 21.7736C16.5955 21.7736 14.2085 20.1203 14.2085 18.6375C14.2085 17.1546 16.5955 15.5 20.021 15.5ZM10.9793 3.87499C14.4048 3.87499 16.7918 5.46374 16.7918 6.88845C16.7918 8.31316 14.4048 9.90321 10.9793 9.90321C7.55383 9.90321 5.16683 8.31446 5.16683 6.88845C5.16683 5.46245 7.55383 3.87499 10.9793 3.87499ZM5.16683 10.9559C6.92332 11.999 8.93689 12.5293 10.9793 12.4865C13.0218 12.5293 15.0353 11.999 16.7918 10.9559V13.3429C15.3841 13.6977 14.0931 14.4131 13.046 15.4186C12.3669 15.5656 11.6742 15.6409 10.9793 15.6434C7.55383 15.6434 5.16683 14.0546 5.16683 12.6299V10.9559ZM5.16683 16.6974C6.9237 17.7395 8.93709 18.2692 10.9793 18.2267C11.2092 18.2267 11.4314 18.1983 11.6575 18.1867C11.6382 18.3362 11.6274 18.4867 11.6252 18.6375V21.3306C11.4082 21.3435 11.1989 21.3848 10.9793 21.3848C7.55383 21.3848 5.16683 19.7961 5.16683 18.3701V16.6974ZM5.16683 22.4376C6.92332 23.4807 8.93689 24.0109 10.9793 23.9682C11.1963 23.9682 11.4095 23.9514 11.6252 23.9411V23.9876C11.6436 25.0871 12.0662 26.1414 12.8122 26.9494C12.2078 27.0635 11.5944 27.1222 10.9793 27.125C7.55383 27.125 5.16683 25.5363 5.16683 24.1116V22.4376Z"
                                    fill="#40189D" />
                            </svg>
                        </div>
                        <div class="ms-3">
                            <span class="d-block mb-2 light-text">Harga</span>
                            <h6 class="mb-0">Rp {{ number_format($paket->harga_paket, 0,2,'.') }} <small style="color: grey">/ Pertemuan</small></h6>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-2">
                    <h5 class="mb-3">Deskripsi</h5>
                    <p class="para-title">
                        {!! $paket->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom')
    <div class="footer fixed bg-white">
        <div class="container">
            <div class="footer-btn d-flex align-items-center">
                <form action="" method="POST" action="">
                    @csrf
                    <input type="text" hidden name="id_paket" value="{{ $paket->id_paket }}">
                    <input type="text" hidden name="total" value="{{ $paket->harga_paket }}">
                    <button type="submit" class="btn btn-primary btn-rounded flex-1 ms-2 w-100" style="width: 100%">Lanjutkan Pemesanan&nbsp;<i class="bi bi-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
@endsection
