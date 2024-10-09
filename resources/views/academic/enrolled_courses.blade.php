@extends('students.index')
@section('student')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Enrolled Courses</h1>
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
            <!-- Start:: row-10 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Enrolled Courses
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Enrolled Status</th>
                                            <th scope="col">Student Enrolleded</th>
                                            <th scope="col">Course Fee</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>8</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>16</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>32</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-danger-transparent">No</span></td>
                                            <td>5</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>8</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>32</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>28</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-danger-transparent">No</span></td>
                                            <td>17</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HTML</th>
                                            <td>Programming & Tech</td>
                                            <td><span class="badge bg-primary-transparent">Enrolled</span></td>
                                            <td>6</td>
                                            <td>$250</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="{{ route('course.detail') }}"
                                                        class="btn btn-icon btn-sm btn-success"><i
                                                            class="bi bi-forward"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-10 -->

        </div>
    </div>
@endsection
