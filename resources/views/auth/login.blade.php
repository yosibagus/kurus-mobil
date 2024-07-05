<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Jobie - Joba Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:title" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/mobile-app/assets/images/favicon.png" />

    <!-- Title -->
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/mobile-app/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="/mobile-app/assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Racing+Sans+One&amp;display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="page-wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Page Content -->
        <div class="page-content">

            <!-- Banner -->
            <div class="banner-wrapper shape-1">
                <div class="container inner-wrapper">
                    <h2 class="dz-title">Masuk</h2>
                    <p class="mb-0">Masukkan Email dan Password untuk masuk.</p>
                </div>
            </div>
            <!-- Banner End -->

            <div class="container">
                <div class="account-area">
                    <form class="" method="POST" action="">
                        @csrf
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" id="password" name="password"
                                class="form-control be-0">
                            <span class="input-group-text show-pass" id="togglePassword">
                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                        <a href="forgot-password.html" class="btn-link d-block text-center">Lupa Password?</a>
                        <div class="input-group">
                            <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">Masuk</button>
                        </div>
                    </form>
                    <div class="text-center p-tb20">
                        <span class="saprate">Atau Registrasi?</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <a href="{{ url('registrasi') }}" class="btn btn-primary light btn-rounded text-primary d-block">Buat
                    Akun</a>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Theme Color Settings -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-body small">
                <ul class="theme-color-settings">
                    <!-- Color options omitted for brevity -->
                </ul>
            </div>
        </div>
        <!-- Theme Color Settings End -->
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="/mobile-app/assets/js/jquery.js"></script>
    <script src="/mobile-app/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/mobile-app/assets/js/settings.js"></script>
    <script src="/mobile-app/assets/js/custom.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // toggle the eye / eye-slash icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>

</html>
