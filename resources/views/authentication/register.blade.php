<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Youth Academy LMS - Learning Management System</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset('admin/assets/js/authentication-main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css') }}">
</head>

<body class="bg-white">
    <div class="row authentication mx-0">
        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="p-5">
                        <div class="mb-3">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('admin/assets/images/brand-logos/desktop-logo.png') }}" alt="" class="authentication-brand desktop-logo">
                                <img src="{{ asset('admin/assets/images/brand-logos/desktop-dark.png') }}" alt="" class="authentication-brand desktop-dark">
                            </a>
                        </div>
                        <p class="h5 fw-semibold mb-2">Sign Up</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Welcome & Join us by creating a free account!</p>
                        
                        <!-- Registration Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf <!-- CSRF Token -->
                            <div class="row gy-3">
                                <!-- Name Field -->
                                <div class="col-xl-12 mt-0">
                                    <label for="signup-firstname" class="form-label text-default">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" id="signup-firstname" placeholder="First name" required>
                                </div>

                                <!-- Email Field -->
                                <div class="col-xl-12">
                                    <label for="signup-email" class="form-label text-default">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="signup-email" placeholder="Email" required>
                                </div>

                                <!-- Password Field -->
                                <div class="col-xl-12">
                                    <label for="signup-password" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" name="password" id="signup-password" placeholder="Password" required>
                                        <button class="btn btn-light" onclick="createpassword('signup-password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="col-xl-12 mb-3">
                                    <label for="signup-confirmpassword" class="form-label text-default">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" name="password_confirmation" id="signup-confirmpassword" placeholder="Confirm password" required>
                                        <button class="btn btn-light" onclick="createpassword('signup-confirmpassword',this)" type="button" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>

                                <!-- Terms and Conditions -->
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                    <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                        By creating an account you agree to our <a href="{{ url('terms_conditions') }}" class="text-success"><u>Terms & Conditions</u></a> and <a class="text-success"><u>Privacy Policy</u></a>
                                    </label>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Create Account</button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center">
                            <p class="fs-12 text-muted mt-4">Already have an account? <a href="{{ url('sign-in-cover') }}" class="text-primary">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Authentication Cover Section -->
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div class="swiper-pagination"></div>
                    <div class="swiper authentication-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('admin/assets/images/authentication/education.jpg') }}" alt="side">
                                <div class="cover-content px-5">
                                    <h3 class="fw-semibold display-6 text-white">Create Your Own LMS</h3>
                                    <p class="text-white">Manage courses, students, and faculty in a unified system designed for excellence in education.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('admin/assets/images/authentication/courses.jpg') }}" alt="side">
                                <div class="cover-content px-5">
                                    <h3 class="fw-semibold display-6 text-white">Seamless Course Management</h3>
                                    <p class="text-white">Organize and structure courses with ease, while tracking student progress effectively.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('admin/assets/images/authentication/online-class.jpg') }}" alt="side">
                                <div class="cover-content px-5">
                                    <h3 class="fw-semibold display-6 text-white">Engaging Online Classes</h3>
                                    <p class="text-white">Deliver interactive lessons that engage and inspire students, anywhere and anytime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript  -->
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/authentication.js') }}"></script>
    <script src="{{ asset('admin/assets/js/show-password.js')}}"></script>
</body>

</html>
