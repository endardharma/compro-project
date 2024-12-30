<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/login-css/style.css">
    </head>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">LOGIN #AMBARAJOURNEY</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                            <div class="img" style="background-image: url(assets/img/login-images/bg-ambara.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign In</h3>
                                    </div>
                                    <div class="w-100">
                                        <p class="social-media d-flex justify-content-end">
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <form id="loginForm">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control login-email" required>
                                        <label class="form-control-placeholder" for="email">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control login-password" required>
                                        <label class="form-control-placeholder" for="password">Password</label>
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded btn-submit px-3">Sign In</button>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="#">Forgot Password</a>
                                        </div>
                                    </div>
                                </form>
                                <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/login-js/jquery.min.js"></script>
        <script src="assets/js/login-js/popper.js"></script>
        <script src="assets/js/login-js/bootstrap.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                // Event listener untuk form submit
                jQuery('#loginForm').on('submit', function (event) {
                    // Hentikan default behavior form
                    event.preventDefault();

                    // Ambil input email dan password
                    var email_log = jQuery(".login-email").val();
                    var password_log = jQuery(".login-password").val();

                    // Data untuk request API
                    const data = {
                        email: email_log,
                        password: password_log,
                    };

                    // AJAX request menggunakan fetch
                    fetch('http://127.0.0.1:8000/api/autentikasi/masuk', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                    }).then(response => response.json()).then(result => {
                            if (result.success) {
                                
                                // Fungsi untuk set cookie
                                function setCookie(name, value, days) {
                                    var expires = "";
                                    if (days) {
                                        var date = new Date();
                                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                        expires = "; expires=" + date.toUTCString();
                                    }
                                    document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
                                }

                                alert('Login berhasil: ' + result.message);

                                // Simpan token ke cookie
                                var token = result.token;
                                console.log(token);

                                setCookie('token', token, 7); // Simpan cookie selama 7 hari

                                // Redirect ke dashboard
                                setTimeout(function () {
                                    window.location.href = "{{ route('dashboard') }}";
                                }, 1000); // Redirect setelah 1 detik
                            } else {
                                alert('Login gagal: ' + result.message);
                            }
                        })
                        .catch(error => {
                            alert('Terjadi kesalahan: ' + error.message);
                        });
                });
            });
        </script>
    </body>
</html>
