<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Youth Academy LMS </title>
    <meta name="Description"
        content="A comprehensive Learning Management System (LMS) for managing courses, students, and instructors">
    <meta name="Author" content="Youth Academy LMS">
    <meta name="keywords"
        content="LMS,learning management system,courses,students,instructors,education,online learning,admin dashboard">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- JSVectormap Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css') }}">

</head>

<body>
    <div id="app">
        <!-- Include Sidebar -->
        @include('layouts.sidebar')

        <div class="main-content">
            <!-- Include Header -->
            @include('layouts.header')

            <main class="py-4">
                <!-- Main Content Area -->
                @yield('content')
            </main>

            <!-- Include Footer -->
            @include('layouts.footer')
        </div>
    </div>

    <!-- Scripts -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- JSVector Maps JS -->
    <script src="{{ asset('admin/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('admin/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ asset('admin/assets/libs/chart.js/chart.min.js') }}"></script>

    <!-- CRM-Dashboard JS -->
    <script src="{{ asset('admin/assets/js/crm-dashboard.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('admin/assets/js/custom-switcher.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Internal Product-Details JS -->
    <script src="{{ asset('admin/assets/js/product-details.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

</body>

</html>
