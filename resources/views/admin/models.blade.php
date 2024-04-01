@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Degree Models</div>
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @foreach($degreeModels as $degreeModel)
                        @php
                        $courses = json_decode($degreeModel->courses, true);
                        @endphp
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>{{
                                    'Concentration Code: ' . $degreeModel['concentration_code']
                                    . ' | Effective Date: ' .  $degreeModel['effective_date']
                                    }}</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table
                                        class="table table-striped search-table table-bordered table-hover table-checkable order-column"
                                        style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th>
                                            </th>
                                            <th>Code</th>
                                            <th>Priority Index </th>
                                            <th>Level</th>
                                            <th>Level Combination</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">

                                            @foreach($courses as $course)
{{--                                             todo: fill this with actual model data @foreach($models as $model)--}}
                                                <td>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> {{ $course['course_code'] }} </td>
                                                <td> {{ $course['priority_index'] }} </td>
                                                <td> {{ $course['course_level'] }} </td>
                                                <td> {{ implode(',', json_decode($course['level_combination'])) }} </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end page content -->
@endsection
