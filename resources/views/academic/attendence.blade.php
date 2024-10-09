@extends('students.index')
@section('student')
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Attendence</h1>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-3">
                    <div class="card custom-card">
                        <div class="card-body p-0">
                            <div id="external-events" class="border-bottom p-3">
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary border border-primary">
                                    <div class="fc-event-main">Calendar Events</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning border border-warning"
                                    data-class="bg-warning">
                                    <div class="fc-event-main">Other Events</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger border border-danger"
                                    data-class="bg-danger">
                                    <div class="fc-event-main">Festival Events</div>
                                </div>
                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal border border-teal"
                                    data-class="bg-danger">
                                    <div class="fc-event-main">Timeline Events</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Attendence</div>
                        </div>
                        <div class="card-body">
                            <div id='calendar2'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
