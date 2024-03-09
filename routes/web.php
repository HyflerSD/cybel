@extends('layouts.admin')

@section('title') {{'Student Dashboard'}} @endsection

@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
            </div>
            <!-- start widget -->
            <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="col mt-0">
                                        <h4 class="info-box-title">Courses This Semester</h4>
                                    </div>
                                    <h3 class="mt-1 mb-3 info-box-title col-green">4</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="col mt-0">
                                        <h4 class="info-box-title">GPA</h4>
                                    </div>
                                    <h3 class="mt-1 mb-3 info-box-title col-green">
                                         {{ session('student')->gpa }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="col mt-0">
                                        <h4 class="info-box-title">Major</h4>
                                    </div>
                                    <h3 class="mt-1 mb-3 info-box-title col-green">{{ session('student')->concentration->name }}</h3>

                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="col mt-0">
                                        <h4 class="info-box-title">Total credits</h4>
                                    </div>
                                    <h3 class="mt-1 mb-3 info-box-title col-green">{{ session('student')->total_credits_earned }}</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end widget -->
            <!-- chart start -->
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Chart</header>
                        </div>
                        <div class="card-body">
                            <div id="chart2"></div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-muted font-15 text-truncate">Target</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$15.3k
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 text-truncate">Last
                                        week</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-down col-red ms-1 me-1"></i>$2.8k
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted text-truncate">Last
                                        Month</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$12.5k
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Chart</header>
                        </div>
                        <div class="card-body">
                            <div id="schart3"></div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-muted font-15 text-truncate">Target</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$15.3k
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 text-truncate">Last
                                        week</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-down col-red ms-1 me-1"></i>$2.8k
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted text-truncate">Last
                                        Month</p>
                                    <h5>
                                        <i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$12.5k
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start new student list -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-head">
                            <header>Current Courses</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <table id="saveStage" class="display" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Credits</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end new student list -->
        </div>
    </div>
    <!-- end page content -->
@endsection
@section('styles')
    <link href="/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet"
          type="text/css" />
@endsection
@section('scripts')
{{--    <script src="/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>--}}
    <script src="/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
    <script src="/admin/assets/js/pages/table/table_data.js"></script>
@endsection
