<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Youth Academy LMS - Learning Management System</title>
    <meta name="Description" content="Youth Academy LMS - The best platform to manage online learning for students and institutions">
    <meta name="Author" content="Youth Academy Team">
    <meta name="keywords" content="LMS, learning management system, online learning, academy, education platform, e-learning, responsive, admin template, Youth Academy">

<!-- Favicon -->
<link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

<!-- Main Theme Js -->
<script src="{{ asset('admin/assets/js/authentication-main.js')}}"></script>

<!-- Bootstrap Css -->
<link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

<!-- Style Css -->
<link href="{{ asset('admin/assets/css/styles.min.css')}}" rel="stylesheet" >

<!-- Icons Css -->
<link href="{{ asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" >


<link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css')}}">


</head>

<body class="bg-white">
    <div class="row authentication mx-0">

        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="p-5">
                        <div class="mb-3">
                            <a href="index.html">
                                <img src="{{ asset('admin/assets/images/brand-logos/desktop-logo.png') }}" alt="" class="authentication-brand desktop-logo">
                                <img src="{{ asset('admin/assets/images/brand-logos/desktop-dark.png') }}" alt="" class="authentication-brand desktop-dark">
                            </a>
                        </div>
                        <p class="h5 fw-semibold mb-2">Sign In</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Welcome back to Youth Academy LMS!</p>
                        <div class="btn-list">
                            <button class="btn btn-light">
                                <svg class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                                    <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                                    <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                                    <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" />
                                    <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                                </svg>Sign In with Google
                            </button>
                            <button class="btn btn-icon btn-light"><i class="ri-facebook-fill"></i></button>
                            <button class="btn btn-icon btn-light"><i class="ri-twitter-fill"></i></button>
                        </div>
                        <div class="text-center my-5 authentication-barrier">
                            <span>OR</span>
                        </div>
                        <div class="row gy-3">
                            <!-- Laravel form starts -->
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="col-xl-12 mt-0">
                                    <label for="signin-username" class="form-label text-default">Email</label>
                                    <input type="text" class="form-control form-control-lg" id="signin-username" name="email" placeholder="Enter your Email" required>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="signin-password" class="form-label text-default d-block">Password<a href="{{ route('showforget')}}" class="float-end text-danger">Forgot password?</a></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" id="signin-password" name="password" placeholder="Enter your Password" required>
                                        <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="remember">
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Remember password?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                                </div>
                            </form>
                            <!-- Laravel form ends -->
                        </div>
                        <div class="text-center">
                            <p class="fs-12 text-muted mt-4">Don't have an account? <a href="{{ route('showregister') }}" class="text-primary">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="authentication-cover-content rounded">
                    <div class="swiper keyboard-control">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('admin/assets/images/authentication/2.png') }}" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('admin/assets/images/authentication/3.png') }}" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5">
                                            <img src="{{ asset('admin/assets/images/authentication/4.png') }}" class="authentication-image" alt="">
                                        </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next text-fixed-white"></div>
                        <div class="swiper-button-prev text-fixed-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
</body>
</html>




<!-- Internal Sing-Up JS -->
<script src="{{ asset('admin/assets/js/authentication.js')}}"></script>

<!-- Show Password JS -->
<script src="{{ asset('admin/assets/js/show-password.js')}}"></script>