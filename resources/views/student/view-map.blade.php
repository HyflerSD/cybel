@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
        </div>
        <div class="row">
            @foreach($semesters as $key => $semester)
                @php
                $p = explode('_', $key);
                $cSemester = ucfirst($p[0]) . ' '  . $p[1];
                @endphp
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card  card-box">
                    <div class="card-head">
                        <header>{{ $cSemester }}</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">
                            <table
                                class="table table-striped table-bordered table-hover"
                                <thead>
                                <tr>
                                    <th> Code </th>
                                    <th> Name </th>
                                    <th> Credits </th>
                                </tr>
                                </thead>
                            @foreach($semester as $course)
                                <tbody>
                                <td>{{ $course[0]->course_code }}</td>
                                <td>{{ $course[0]->course_name }}</td>
                                <td> {{ $course[0]->credits }}</td>
                                </tbody>
                            @endforeach
                            </table>
                                    </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 210.39px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>
                        </div>
            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
@endsection

