@extends('layouts.admin')
@section('title') {{'Advisor Dashboard'}} @endsection
@section('content')

{{--    <style>--}}

{{--        .card:hover {--}}
{{--            box-shadow: 0 0 10px rgba(173, 216, 230, 0.8); /* Add a box-shadow effect */--}}
{{--            border: 2px solid #f0f0f0; /* Add a border */--}}
{{--            cursor: pointer; /* Change cursor to pointer */--}}
{{--        }--}}
{{--    </style>--}}

    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>

            <!-- start widget -->
            <div class="row">
                <div class="col-xl-5">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-container">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h4 class="info-box-title">Assigned Students</h4>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="l-bg-green info-icon">
                                                        <i class="fa fa-users pull-left col-orange font-30"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="mt-3 mb-3 info-box-title col-green">{{ $students->count() }}</h1>
                                            <div class="content" style="max-height: 100px; overflow-y: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Projected Semester | Fall 2024</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="recent-report__chart">
                                    <div id="barChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Projected Degree Paths | Spring 2027</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="recent-report__chart">
                                    <div id="chart7"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>Assigned Students List</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh"
                                                       href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down"
                                                       href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="#" id="addRow"
                                                               class="btn btn-primary">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> Name </th>
                                                        <th> Department </th>
                                                        <th> Mobile </th>
                                                        <th> Email </th>
                                                        <th>Admission Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($students as  $student)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img alt="image" src="/admin/assets/img/user/profile_pic.jpg">
                                                            </td>
                                                            <td>{{ $student->user->fname . ' ' .  $student->user->lname}}</td>
                                                            <td class="left">Software Engineering</td>
                                                            <td><a href="tel:4444565756">
                                                                    {{ $student->phone }}</a></td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    {{ $student->user->email }} </a></td>
                                                            <td class="left">{{ $student->start_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
