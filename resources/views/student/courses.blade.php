@extends('layouts.admin')
@section('content')
    @php
    $user = auth()->user();
    @endphp
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Courses List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">Courses</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Courses List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="card-box">
                    <div class="card-head">
                        <header>All Courses</header>
                    </div>
                        <!-- start course list -->
                    <div class="card-body ">
                        <div class="row">
                        @foreach($courses as $course)
                                <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                    <div class="blogThumb">
                                        <div class="thumb-center"><img class="img-responsive" alt="user"
                                                                       src="/admin/assets/img/course/course4.jpg"></div>
                                        <div class="course-box">
                                            <h4>{{ $course->courseName }}</h4>
                                            <div class="text-muted"><span class="m-r-10">April 23</span>
                                                <a class="course-likes m-l-10" href="#"><i
                                                        class="fa fa-heart-o"></i> 654</a>
                                            </div>
                                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                                            <button type="button"
                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>
                    </div>
                        <!-- End course list -->
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
