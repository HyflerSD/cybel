@extends('layouts.admin')

@section('title') {{'Student Dashboard'}} @endsection

@section('content')
    <style>
        .card {
            position: relative;
            margin: 10px;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s;
            cursor: pointer;
        }

        /* Add hover effect */
        .card:hover {
            outline: 2px solid rgba(173, 216, 230, 0.8);
            box-shadow: 0 0 20px rgba(128, 128, 128, 0.8);
        }

        .card.flipped {
            transform: rotateY(180deg);
        }

        .card-face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            transform-style: preserve-3d;
        }

        .card-front {
            z-index: 2;
        }

        .card-back {
            transform: rotateY(180deg);
        }

    </style>

    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student Dashboard</div>
                    </div>
                </div>
            </div>
            <!-- start widget -->
            <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card" onclick="flipCard(this)">
                        <div class="card-face card-front">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Courses This Semester</h4>
                                        </div>
                                        <h3 class="mt-1 mb-3 info-box-title col-green">4</h3>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-face card-back">
                            <div class="card-body" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 100%;">
                                <p>COP-2800: Java <br>
                                    CTS-1145: Cloud Essentials <br>
                                    CIS-2991C: Cloud Developer <br>
                                    MAC-1105: College Algebra</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card gpa-card"> <!-- Add the 'gpa-card' class here -->
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
                    <div class="card comp-card" onclick="flipCard(this)">
                        <div class="card-face card-front">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Major</h4>
                                        </div>
{{--                                        Todo: Once we have the student profile data this filed will be populated--}}
{{--                                        <h3 class="mt-1 mb-3 info-box-title col-green">{{ session('student')->concentration->name }}</h3>--}}
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-face card-back">
                            <div class="card-body" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 100%;">
                                <p>Click here for more information on the <a href="https://mdc.edu/softwareengineering/" target="_blank" style="color: greenyellow;">Software Engineering</a> major</p>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    function flipCard(card) {
                        card.classList.toggle('flipped');
                    }
                </script>

                <div class="col-xl-3 col-lg-6">
                    <div class="card comp-card" onclick="flipCard(this)">
                        <div class="card-face card-front">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                        <h4 class="info-box-title">Total credits</h4>
                                    </div>
                                        {{--                                        Todo: Once we have the student profile data this filed will be populated--}}
{{--                                    <h3 class="mt-1 mb-3 info-box-title col-green">{{ session('student')->total_credits_earned }} </h3>--}}
                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card-face card-back">
                            <div class="card-body" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 100%;">
                                <p>{{ session('student')->total_credits_earned }} credits out of 120</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end widget -->
            <!-- chart start -->
            <div class="row">
                <div class="my-4"> <!-- Adding margin above and below -->
                        <div class="col-12 col-sm-12 col-lg-13">
                            <div class="card">
                                <div class="card-head">
                                    <header>Student Road Map</header>
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
                    <div class="row">
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
                                            <h5><i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$15.3k</h5>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 text-truncate">Last week</p>
                                            <h5><i class="fa fa-arrow-circle-down col-red ms-1 me-1"></i>$2.8k</h5>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted text-truncate">Last Month</p>
                                            <h5><i class="fa fa-arrow-circle-up col-green ms-1 me-1"></i>$12.5k</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-head">
                                    <header>Current Courses</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th><u>Code</u></th>
                                            <th><u>Name</u></th>
                                            <th><u>Credits</u></th>
                                            <th><u>Type</u></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>COP-2800</td>
                                            <td>Java</td>
                                            <td>4</td>
                                            <td>core</td>
                                        </tr>
                                        <tr>
                                            <td>CTS-1145</td>
                                            <td>Cloud Essentials</td>
                                            <td>4</td>
                                            <td>elective</td>
                                        </tr>
                                        <tr>
                                            <td>CIS-2991C</td>
                                            <td>Cloud Developer</td>
                                            <td>4</td>
                                            <td>elective</td>
                                        </tr>
                                        <tr>
                                            <td>MAC-1105</td>
                                            <td>College Algebra</td>
                                            <td>4</td>
                                            <td>gened</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- end new student list -->
            <!-- start new student list -->
    <!-- end page content -->
@endsection
@section('styles')
    <link href="/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet"
          type="text/css" />
@endsection
