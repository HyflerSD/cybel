@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student History</div>
                    </div>
                </div>
            </div>
{{--            @foreach($students as $student)--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>{{ 'courses' }}</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column"
                                    style="width: 100%" id="example4">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input disabled type="checkbox" class="group-checkable"
                                                       data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Course Code</th>
                                        <th> Course Name</th>
                                        <th>Credits</th>
                                        <th> Grade </th>
                                        <th> Semester </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coursesHistory as $course)
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input disabled type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> {{ $course->course_code }} </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td> {{ $course->credits_attempted }} </td>
                                        <td>
                                            @if($course->grade != 'null')
                                                {{ $course->grade }}
                                            @else
                                                {{ 'in progress' }}
                                            @endif
                                        </td>
                                        <td> {{ $course->term_code }} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <form method="POST" action="{{ route('admin.approve-student-map') }}" >
                                    @csrf
                                    <input type="hidden" name="student_email" value="{{ 'student email' }}"/>
                                    <div class="btn-group pull-left">
                                        <button type="submit" id="add-button" class="btn btn-circle btn-success">
                                            Approve <i class="fa"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
{{--            @endforeach--}}
        </div>
    </div>
    <!-- end page content -->
@endsection
