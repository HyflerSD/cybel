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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>{{ 'Concentration Code: S9501 | Effective Data: 09-22-2029' }}</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <button id="add-button" class="btn btn-info">
                                                    Add To Model <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        style="width: 100%" id="example4">
                                        <thead>
                                        <tr>
                                            <th>
                                            </th>
                                            <th> Course Name </th>
                                            <th> Course Code </th>
                                            <th> Course Level </th>
                                            <th> Type </th>
                                            <th> Credits </th>
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
                                                <td> {{ $course->course_name }} </td>
                                                <td> {{ $course->course_code }} </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> {{ $course->course_level }} </span>
                                                </td>
                                                @switch($course)
                                                    @case($course->core_ed == 1)
                                                        <td> {{ 'Core' }} </td>
                                                        @break
                                                    @case($course->elective_ed == 1)
                                                        <td> {{ 'Elective' }} </td>
                                                        @break
                                                    @default
                                                        <td> {{ 'General' }} </td>
                                                @endswitch
                                                <td> {{ $course->credits }} </td>
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
            <!-- end page content -->
@endsection
