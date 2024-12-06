<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/css/login-css/style.css">

        {{-- @vite(['resources/css/app-flowbite.css','resources/js/app-bundle.js', 'resources/js/dark-mode.js']) --}}
        
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

                                <form action="#" class="signin-form">

                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control login-email" required>
                                        <label class="form-control-placeholder " for="email">Email</label>
                                    </div>
                                        
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control login-password" required>
                                        <label class="form-control-placeholder " for="password">Password</label>
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

        {{-- <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <a class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <img src="assets/static/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
                <span>Ambara Journey</span>  
            </a>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Sign in to ambara journey dashboard admin 
                </h2>
                <form class="mt-8 space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                        </div>
                        <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Lost Password?</a>
                    </div>
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Not registered? <a class="text-primary-700 hover:underline dark:text-primary-500">Create account</a>
                    </div>
                </form>
            </div>
        </div> --}}
        
        <script src="assets/js/login-js/jquery.min.js"></script>
        <script src="assets/js/login-js/popper.js"></script>
        <script src="assets/js/login-js/bootstrap.min.js"></script>
        <script src="assets/js/login-js/main.js"></script>

        <!-- BEGIN: Script -->
        <script>
            
            // cek package jQuery
            jQuery(document).ready(function() {

                // begin login page
                jQuery('.btn-submit').click(function() {
                    var email_log = jQuery(".login-email").val();
                    var password_log = jQuery(".login-password").val();

                    
                    // ajax login
                    const data = {
                        email: email_log,
                        password: password_log, 
                    };
                    
                    // console.log(data);
                    fetch('http://127.0.0.1:8000/api/autentikasi/masuk', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data),
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.success) {
                            alert('Login berhasil: ' + result.message);
                        } else {
                            alert('Login gagal: ' + result.message);
                        }
                    })
                    .catch(error => {
                        alert('Error: ' + error.message);
                    });

                });
            });
            
        </script>
        <!-- END: Script -->
    </body>
</html>