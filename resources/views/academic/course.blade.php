@extends('students.index')
@section('student')
    <!--APP-CONTENT START-->

    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">All Courses</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" style="width: 300px;" type="search"
                                    placeholder="Search Course" aria-label="Search">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card custom-card">
                        <img src="{{ asset('admin/assets/images/media/media-22.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold">Example Course</h6>
                            <p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="{{ route('course.detail') }}" class="btn btn-primary">Course Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card custom-card">
                        <img src="{{ asset('admin/assets/images/media/media-22.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold">Example Course</h6>
                            <p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="{{ route('course.detail') }}" class="btn btn-primary">Course Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card custom-card">
                        <img src="{{ asset('admin/assets/images/media/media-22.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold">Example Course</h6>
                            <p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="{{ route('course.detail') }}" class="btn btn-primary">Course Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-4">
                    <div class="card custom-card">
                        <img src="{{ asset('admin/assets/images/media/media-22.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold">Example Course</h6>
                            <p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centuries, but also the leap
                                into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="{{ route('course.detail') }}" class="btn btn-primary">Course Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::row-13 -->
    <!--APP-CONTENT CLOSE-->
@endsection
