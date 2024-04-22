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
                        <div class="page-title">Student Center</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="/admin/assets/img/technology.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">Computer Science</div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>GPA</b> <a class="pull-right">{{ session('student')->gpa }}</a>

                                    </li>
                                    <li class="list-group-item">
                                        <b>Credits Taken</b> <a class="pull-right">{{ $totalCreditsEarned }}</a>

                                    </li>
                                    <li class="list-group-item">
                                        <b>Classes This Semester</b> <a class="pull-right">4</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Academic Standing</b> <a class="pull-right">{{ session('student')->academic_standing }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Student Information</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Email </b>
                                        <div class="profile-desc-item pull-right">{{ session('student')->email }}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone</b>
                                        <div class="profile-desc-item pull-right">{{ session('student')->phone }}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Date of Berf</b>
                                        <div class="profile-desc-item pull-right">{{ session('student')->birthdate }}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Address</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p>{{ session('student')->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Interest In</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="work-monitor work-progress">
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Software Engineering</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 70%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Operating Systems</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">AI Engineer</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 35%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="card">
                                <div class="card-topline-aqua">
                                    <header></header>
                                </div>
                                <div class="white-box">
                                    <!-- Nav tabs -->
                                    <div class="card-head">
                                        <header>Preferences</header>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fontawesome-demo" id="tab1">
                                            <div id="biography">
                                                <div class="row">
                                                    <div class="col-md-3 col-6 b-r"> <strong>Campus</strong>
                                                        <br>
                                                        <p class="text-muted">Courses Per Semester</p>
                                                    </div>
                                                    <div class="col-md-3 col-6 b-r"> <strong>Time Of Day</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 456 7890</p>
                                                    </div>
                                                    <div class="col-md-3 col-6 b-r"> <strong>Days Of Week</strong>
                                                        <br>
                                                        <p class="text-muted">test@example.com</p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Mode of Instruction</strong>
                                                        <br>
                                                        <p class="text-muted">India</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-head">
                                    <header>Current Courses</header>
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
                        <div class="col-12 col-sm-12 col-lg-6">
                        </div>










                        <div class="row">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Todo List</header>
                                    <button id="panel-button"
                                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                            data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="panel-button">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here</li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <ul class="to-do-list ui-sortable" id="sortable-todo">
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check1">
                                                <label for="todo-check1"></label>
                                            </div>
                                            <p class="todo-title">Write 10k Essay before 11:59 TODAY!!
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check2">
                                                <label for="todo-check2"></label>
                                            </div>
                                            <p class="todo-title">Study Whole Book For Algorithms Exam
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check3">
                                                <label for="todo-check3"></label>
                                            </div>
                                            <p class="todo-title">Write code to solve real world problems</p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check4">
                                                <label for="todo-check4"></label>
                                            </div>
                                            <p class="todo-title">if(failedExam) { Ask for Make up Exam; return pass}</p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check5">
                                                <label for="todo-check5"></label>
                                            </div>
                                            <p class="todo-title">Practice LeetCode Hard Questions
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check6">
                                                <label for="todo-check6"></label>
                                            </div>
                                            <p class="todo-title">Don't finish this task please
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="#" class=""><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ul>
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
    <link href="/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet"
          type="text/css" />
@endsection
