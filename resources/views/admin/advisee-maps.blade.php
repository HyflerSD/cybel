@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Advisee Maps</div>
                            </div>
                        </div>
                    </div>
                    @foreach($students as $student)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>{{ $student->email }}</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table
                                        class="table search-table table-striped table-bordered table-hover table-checkable order-column"
                                        style="width: 100%">
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
                                                <th> Credits</th>
                                                <th>Semester</th>
                                                <th> Type </th>
                                                <th> Level </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input disabled type="checkbox" class="checkboxes" value="1" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> shuxer </td>
                                            <td>
                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                            </td>
                                            <td>
                                                <span class="label label-sm label-success"> Approved </span>
                                            </td>
                                            <td> 12 Jan 2012 </td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-docs"></i> New Post </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-tag"></i> New Comment </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-user"></i> New User </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="icon-flag"></i> Comments
                                                                <span class="badge badge-success">4</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <form method="POST" action="{{ route('admin.approve-student-map') }}" >
                                        @csrf
                                        <input type="hidden" name="student_email" value="{{ $student->email }}"/>
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
                    @endforeach
                </div>
            </div>
            <!-- end page content -->
@endsection
