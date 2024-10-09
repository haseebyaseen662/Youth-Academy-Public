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

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css')}}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css')}}">
</head>

<body>
    <div class="row authentication mx-0">
        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="p-5">
                        <div class="mb-3">
                            <a href="index.html">
                                <img src="../assets/images/brand-logos/desktop-logo.png" alt="" class="authentication-brand desktop-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="" class="authentication-brand desktop-dark">
                            </a>
                        </div>
                        <p class="h5 fw-semibold mb-2">Forget Password</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Hello User!</p>

                        <!-- OTP Form -->
                        <form action="{{ route('sendOtp') }}" method="POST">
                            @csrf <!-- Include CSRF token for security -->
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label">Mobile Number (Pakistan)</label>
                                <div class="input-group">
                                    <span class="input-group-text">+92</span>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your mobile number" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary w-100">Send OTP</button>
                            </div>
                        </form>
                        
                        <!-- Success & Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
