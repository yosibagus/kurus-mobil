@extends('user.layout.layout')

@section('content')
    <header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="{{ url('home') }}" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                    fill="#a19fa8" />
                            </svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Profil</h5>
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
    <div class="page-content bottom-content ">
        <div class="dz-banner-heading">
            <div class="overlay-black-light">
                <img src="/mobile-app/assets/images/bg2.png" class="bnr-img" alt="">
            </div>
        </div>
        <div class="container profile-area">
            <div class="profile">
                <div class="media media-100">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg"
                        alt="/">
                </div>
                <div class="mb-2">
                    <h4 class="mb-0">{{ $akun->nama_lengkap }}</h4>
                    <span class="detail">User</span>
                </div>
                <p>Selamat datang di aplikasi kursus mobil bayangkara 2 Sumenep!</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <ul class="contact-profile">
                <li class="d-flex align-items-center">
                    <a href="https://wa.me/6282332145036" class="contact-icon">
                        <svg class="text-primary" width="24" height="24" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.2806 19.775C26.2089 19.7181 21 15.9635 19.5702 16.233C18.8877 16.3538 18.4975 16.8193 17.7144 17.7511C17.5884 17.9016 17.2856 18.2621 17.0503 18.5185C16.5553 18.3571 16.0726 18.1606 15.6056 17.9305C13.1955 16.7571 11.2481 14.8098 10.0747 12.3996C9.84451 11.9327 9.648 11.45 9.48675 10.955C9.744 10.7188 10.1045 10.416 10.2585 10.2865C11.186 9.50775 11.6524 9.1175 11.7731 8.43325C12.0208 7.01575 8.26875 1.771 8.22937 1.72375C8.05914 1.48056 7.83698 1.27825 7.57896 1.13147C7.32095 0.984676 7.03353 0.897075 6.7375 0.875C5.21675 0.875 0.875 6.50737 0.875 7.45587C0.875 7.511 0.954625 13.1145 7.8645 20.1434C14.8864 27.0454 20.489 27.125 20.5441 27.125C21.4935 27.125 27.125 22.7832 27.125 21.2625C27.1032 20.9675 27.0161 20.681 26.8701 20.4238C26.724 20.1666 26.5227 19.945 26.2806 19.775Z"
                                fill="#40189D" />
                        </svg>
                    </a>
                </li>
                <li class="d-flex align-items-center px-4">
                    <a href="https://www.instagram.com/selamat_bhayangkara2/?hl=id" class="contact-icon">
                        <i class="bi bi-instagram" style="font-size: 24px"></i>
                    </a>
                </li>
                <li class="d-flex align-items-center">
                    <a href="https://maps.app.goo.gl/2YQLHWBfR4tHu3gb9" class="contact-icon">
                        <svg class="text-primary" width="24" height="24" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.3077 18.7583C11.3567 18.8204 11.4049 18.8895 11.4696 18.9849C11.8494 19.495 12.2212 19.9955 12.5861 20.5179L13.2861 21.5066C13.367 21.6208 13.474 21.7138 13.5982 21.7781C13.7224 21.8423 13.8603 21.8758 14.0001 21.8758C14.14 21.8758 14.2778 21.8423 14.402 21.7781C14.5262 21.7138 14.6333 21.6208 14.7141 21.5066L15.7361 20.0655C15.9916 19.7076 16.2567 19.3498 16.5534 18.9683C16.5989 18.9018 16.6461 18.8405 16.7161 18.7513C17.732 17.4256 18.8301 16.1621 20.1654 14.6711C21.2564 13.452 21.9617 11.9369 22.1922 10.3172C22.4227 8.69754 22.1681 7.04586 21.4604 5.57079C20.7528 4.09571 19.6239 2.86341 18.2164 2.02952C16.8089 1.19562 15.1858 0.797519 13.5521 0.885501C11.4209 1.01966 9.42195 1.96501 7.96611 3.52728C6.51026 5.08956 5.70807 7.1501 5.72436 9.2855C5.75188 11.3927 6.58904 13.4085 8.06236 14.9153C9.22542 16.1254 10.3094 17.409 11.3077 18.7583ZM14.0001 5.6875C14.7178 5.68664 15.4196 5.89873 16.0167 6.29692C16.6138 6.69511 17.0794 7.26151 17.3544 7.92441C17.6295 8.58731 17.7017 9.31692 17.5619 10.0209C17.4221 10.7248 17.0766 11.3715 16.5691 11.879C16.0616 12.3865 15.4149 12.732 14.711 12.8718C14.007 13.0116 13.2774 12.9394 12.6145 12.6643C11.9516 12.3893 11.3852 11.9237 10.987 11.3266C10.5888 10.7295 10.3767 10.0277 10.3776 9.31C10.3788 8.34961 10.7608 7.42889 11.4399 6.74979C12.119 6.07069 13.0397 5.68866 14.0001 5.6875Z"
                                fill="#40189D" />
                            <path
                                d="M14.0002 11.1921C14.3714 11.193 14.7345 11.0838 15.0437 10.8782C15.3528 10.6727 15.594 10.3802 15.7369 10.0375C15.8797 9.69492 15.9178 9.31763 15.8462 8.95339C15.7746 8.58914 15.5967 8.2543 15.3348 7.99121C15.0729 7.72811 14.7389 7.54858 14.375 7.47531C14.0111 7.40204 13.6336 7.43833 13.2904 7.57958C12.9471 7.72084 12.6534 7.96072 12.4464 8.26889C12.2395 8.57705 12.1286 8.93967 12.1277 9.31088C12.1272 9.80844 12.3241 10.2859 12.6751 10.6385C13.0261 10.9912 13.5026 11.1903 14.0002 11.1921Z"
                                fill="#40189D" />
                            <path
                                d="M19.3498 18.2709C18.9123 18.7906 18.4984 19.3007 18.1038 19.8152C18.0504 19.8844 17.9349 20.0401 17.9349 20.0401C17.654 20.4024 17.4029 20.7401 17.1596 21.0814L16.1411 22.5172C15.8986 22.8594 15.5775 23.1385 15.2049 23.3311C14.8323 23.5237 14.419 23.6242 13.9996 23.6242C13.5801 23.6242 13.1668 23.5237 12.7942 23.3311C12.4216 23.1385 12.1006 22.8594 11.858 22.5172L11.158 21.5285C10.808 21.0262 10.458 20.5546 10.1001 20.0751C10.1001 20.0751 9.9575 19.8704 9.92513 19.8336C9.5025 19.271 9.09212 18.7547 8.68525 18.2586C6.02 19.1047 4.375 20.5782 4.375 22.3125C4.375 25.0565 8.51288 27.125 14 27.125C19.4871 27.125 23.625 25.0565 23.625 22.3125C23.625 20.5861 21.9958 19.1187 19.3498 18.2709Z"
                                fill="#40189D" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="skill-section">
                <h5>Update Akun</h5>
                <hr>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" required value="{{ $akun->nama_lengkap }}"
                            id="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="no_hp">No Hp</label>
                        <input type="number" name="no_hp" required value="{{ $akun->no_hp }}" id="no_hp"
                            class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required value="{{ $akun->email }}"
                            class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="******" id="nama_lengkap"
                            class="form-control">
                        <small class="text-primary">*Kosongi jika tidak ingin mengubah password</small>
                    </div>
                    <div class="form-group mt-2">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea type="text" name="alamat" required id="alamat" class="form-control">{{ $akun->alamat }}</textarea>
                    </div>

                    <button class="btn btn-primary btn-sm w-100 mt-3">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
