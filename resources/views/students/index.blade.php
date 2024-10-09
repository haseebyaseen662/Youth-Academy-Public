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

    <!-- Full Calendar CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/fullcalendar/main.min.css') }}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

</head>

<body>
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-home side-menu__icon"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="javascript:void(0)">Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Academic</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">Academic</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{ route('course') }}" class="side-menu__item">Available Courses</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('course.enroll') }}" class="side-menu__item">Enrolled Courses</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('academic.attendence') }}" class="side-menu__item">Attendance</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('academic.syllabus') }}" class="side-menu__item">Syllabus</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('academic.study_material') }}" class="side-menu__item">Study
                                    Material</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('academic.live_session') }}" class="side-menu__item">Live
                                    Sessions</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Evaluation</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">Evaluation</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="about-us.html" class="side-menu__item">Exams</a>
                            </li>
                            <li class="slide">
                                <a href="chat.html" class="side-menu__item">Performance Report</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Payments</span></li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">Payments</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{ route('payments.fee_invoice') }}" class="side-menu__item">Fees
                                    Invoices</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('payments.payment_report') }}" class="side-menu__item">Payment
                                    Report</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Accounts</span></li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">Communication</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="about-us.html" class="side-menu__item">Chat</a>
                            </li>
                            <li class="slide">
                                <a href="chat.html" class="side-menu__item">Notice Board</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                </ul>

                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->
    </aside>
    @yield('student')
    <!-- Footer Start -->
    <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
            <span class="text-muted"> Copyright © <span id="year"></span>
                <a href="javascript:void(0);" class="text-dark fw-semibold">Youth Academy</a>.
                Designed with <span class="bi bi-heart-fill text-danger"></span> by
                <a href="javascript:void(0);">
                    <span class="fw-semibold text-primary text-decoration-underline">TECHSOPS PVT LTD</span>
                </a> All rights reserved
            </span>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- End::app-sidebar -->
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

    <!-- Moment JS -->
    <script src="{{ asset('admin/assets/libs/moment/moment.js') }}"></script>

    <!-- Fullcalendar JS -->
    <script src="{{ asset('admin/assets/libs/fullcalendar/main.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/fullcalendar.js') }}"></script>

    <!-- Jquery Cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Datatables Cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- Internal Datatables JS -->
    <script src="{{ asset('admin/assets/js/datatables.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

</body>

</html>
