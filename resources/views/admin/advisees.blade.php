@extends('layouts.admin')

@section('title') {{'Advisees'}} @endsection
@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
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
                                                <header>All Students List</header>
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
                                                            <a href="add_professor.html" id="addRow"
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
                                                        <th> GPA </th>
                                                        <th> Action </th>
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
                                                        <td class="left">{{ $student->gpa }}</td>
                                                        <td>
                                                            <a href="edit_student.html" class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
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
