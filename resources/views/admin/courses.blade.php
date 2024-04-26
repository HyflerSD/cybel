@extends('layouts.admin')

@section('title') {{'Courses'}} @endsection
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
                                                               href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Courses</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                                                                       src="/admin/assets/img/course/course_image.webp"></div>
                                        <div class="course-box">
                                            <div class="text-muted" style="padding-top: 20px;">
                                                {{--m-r-10 = margin right 10--}}
                                                <span class="m-r-10">{{$course->course_code}}</span>
                                            </div>
                                            <p>Name: {{$course->course_name}}</p>
                                            <p>Credits: {{$course->credits}}</p>
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
