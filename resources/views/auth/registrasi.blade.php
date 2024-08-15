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
    <meta name="description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:title" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/mobile-app/assets/images/favicon.png" />

    <!-- Title -->
    <title>Pendaftaran</title>

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
                    <h2 class="dz-title">Buat Akun Baru</h2>
                    <p class="mb-0">Masukkan beberapa data berikut</p>
                </div>
            </div>
            <!-- Banner End -->

            <div class="container">
                <div class="account-area">
                    <form method="POST" action="">
                        @csrf
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" class="form-control"
                                required>
                        </div>
                        <div class="input-group">
                            <input type="number" placeholder="No WhatsApp" name="no_hp" class="form-control"
                                required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" id="dz-password" name="password"
                                class="form-control be-0" required>
                            <span class="input-group-text show-pass">
                                <i class="fa fa-eye-slash toggle-password" toggle="#dz-password"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Ulangi Password" id="repeat-password"
                                name="repeat_password" class="form-control be-0" required>
                            <span class="input-group-text show-pass">
                                <i class="fa fa-eye-slash toggle-password" toggle="#repeat-password"></i>
                            </span>
                        </div>
                        <div id="password-match-message" class="text-danger"></div>

                        <div class="input-group">
                            <input type="text" placeholder="Alamat" name="alamat" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <input type="checkbox" id="accept-terms" required> <label for="accept-terms">Saya menerima
                                syarat dan ketentuan</label>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">Daftar</button>
                        </div>
                        <p class="text-center">Dengan mengeklik “Centang” Anda menerima syarat dan ketentuan kami</p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <a href="{{ url('user') }}" class="btn btn-primary light btn-rounded text-primary d-block">Kembali ke
                    Login</a>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Theme Color Settings -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-body small">
                <ul class="theme-color-settings">
                    <li>
                        <input class="filled-in" id="primary_color_8" name="theme_color" type="radio"
                            value="color-primary" />
                        <label for="primary_color_8"></label>
                        <span>Default</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_2" name="theme_color" type="radio"
                            value="color-green" />
                        <label for="primary_color_2"></label>
                        <span>Green</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_3" name="theme_color" type="radio"
                            value="color-blue" />
                        <label for="primary_color_3"></label>
                        <span>Blue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_4" name="theme_color" type="radio"
                            value="color-pink" />
                        <label for="primary_color_4"></label>
                        <span>Pink</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_5" name="theme_color" type="radio"
                            value="color-yellow" />
                        <label for="primary_color_5"></label>
                        <span>Yellow</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_6" name="theme_color" type="radio"
                            value="color-orange" />
                        <label for="primary_color_6"></label>
                        <span>Orange</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_7" name="theme_color" type="radio"
                            value="color-purple" />
                        <label for="primary_color_7"></label>
                        <span>Purple</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_1" name="theme_color" type="radio"
                            value="color-red" />
                        <label for="primary_color_1"></label>
                        <span>Red</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_9" name="theme_color" type="radio"
                            value="color-lightblue" />
                        <label for="primary_color_9"></label>
                        <span>Lightblue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_10" name="theme_color" type="radio"
                            value="color-teal" />
                        <label for="primary_color_10"></label>
                        <span>Teal</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_11" name="theme_color" type="radio"
                            value="color-lime" />
                        <label for="primary_color_11"></label>
                        <span>Lime</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_12" name="theme_color" type="radio"
                            value="color-deeporange" />
                        <label for="primary_color_12"></label>
                        <span>Deeporange</span>
                    </li>
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
        $(document).ready(function() {
            // Toggle password visibility
            $('.toggle-password').click(function() {
                var input = $($(this).attr('toggle'));
                var icon = $(this);

                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('fa-eye-slash');
                    icon.addClass('fa-eye');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('fa-eye');
                    icon.addClass('fa-eye-slash');
                }
            });

            // Password match validation
            $('#repeat-password').on('keyup', function() {
                var password = $('#dz-password').val();
                var repeatPassword = $(this).val();

                if (password !== repeatPassword) {
                    $('#password-match-message').text('Passwords do not match');
                    $('button[type="submit"]').prop('disabled', true);
                } else {
                    $('#password-match-message').text('');
                    $('button[type="submit"]').prop('disabled', false);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#repeat-password').on('keyup', function() {
                var password = $('#dz-password').val();
                var repeatPassword = $(this).val();

                if (password !== repeatPassword) {
                    $('#password-match-message').text('Password tidak sama!');
                    $('button[type="submit"]').prop('disabled', true);
                } else {
                    $('#password-match-message').text('');
                    $('button[type="submit"]').prop('disabled', false);
                }
            });
        });
    </script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('dz-password');
            const repeatPasswordInput = document.getElementById('repeat-password');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeSlashIcon = document.getElementById('eye-slash-icon');

            if (passwordInput.type === 'password' || repeatPasswordInput.type === 'password') {
                passwordInput.type = 'text';
                repeatPasswordInput.type = 'text';
                eyeIcon.style.display = 'block';
                eyeSlashIcon.style.display = 'none';
            } else {
                passwordInput.type = 'password';
                repeatPasswordInput.type = 'password';
                eyeIcon.style.display = 'none';
                eyeSlashIcon.style.display = 'block';
            }
        }
    </script>

</body>

</html>
