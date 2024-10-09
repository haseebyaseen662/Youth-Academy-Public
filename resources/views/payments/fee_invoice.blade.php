@extends('students.index')
@section('student')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0 mt-4">Fee Invoice</h1>
            </div>
            <!-- Page Header Close -->
            <!-- Start:: row-4 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">My Invoices</div>
                        </div>
                        <div class="card-body">
                            <table id="file-export" class="table table-bordered text-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SR No</th>
                                        <th>Invoice ID</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Course Fee</th>
                                        <th>Invoice Date</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-4 -->
        @endsection
