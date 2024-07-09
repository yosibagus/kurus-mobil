<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/assets/css/remixicon.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="/assets/css/simplebar.css">
    <link rel="stylesheet" href="/assets/css/apexcharts.css">
    <link rel="stylesheet" href="/assets/css/prism.css">
    <link rel="stylesheet" href="/assets/css/rangeslider.css">
    <link rel="stylesheet" href="/assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="/assets/css/quill.snow.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="icon" type="image/png" href="/assets/images/favicon.png">

    <title>Login</title>
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">-</span>
                <span class="d-inline-block">D</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">V</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">G</span>
                <span class="d-inline-block"></span>
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">U</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">S</span>
                <span class="d-inline-block">E</span>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="main-content d-flex flex-column px-0">

            {{-- <div class="m-auto mw-510 py-5">
                
            </div> --}}
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <form method="POST" action="">
                        @csrf
                        
                        <span class="d-block fs-18 fw-semibold text-center or mb-4">
                            <span class="bg-body-bg d-inline-block py-1 px-3">Administrator</span>
                        </span>
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="form-group mb-4">
                                    <label class="label">Email</label>
                                    <input type="email" class="form-control h-58" name="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group mb-0">
                                    <label class="label">Password</label>
                                    <div class="form-group">
                                        <div class="password-wrapper position-relative">
                                            <input type="password" id="password" name="password" class="form-control h-58 text-dark"
                                                value="" placeholder="Masukkan Password Anda">
                                            <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;"
                                                class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-between mb-4">
                            <a href="{{ url('lupa-password') }}"
                                class="fs-16 text-primary text-decoration-none mt-2 mt-sm-0 d-block">
                                Lupa Password?
                            </a>
                        </div>
                        <button type="submit"
                            class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span> <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>


    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/sidebar-menu.js"></script>
    <script src="/assets/js/dragdrop.js"></script>
    <script src="/assets/js/rangeslider.min.js"></script>
    <script src="/assets/js/sweetalert.js"></script>
    <script src="/assets/js/quill.min.js"></script>
    <script src="/assets/js/data-table.js"></script>
    <script src="/assets/js/prism.js"></script>
    <script src="/assets/js/clipboard.min.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>
    <script src="/assets/js/fslightbox.js"></script>
    <script src="/assets/js/custom/custom.js"></script>
</body>

</html>
