@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    @php
        $mapId = 0;
    @endphp
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
            @foreach($studentMaps as $student)
                @if($student->degreeMaps->isNotEmpty())
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
                                            <th>Concentration Code</th>
                                            <th>Course Code</th>
                                            <th>Semester</th>
                                            <th>Mode</th>
                                            <th>Days</th>
                                            <th>Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            foreach ($student->degreeMaps as $map)
                                            {
                                                $preg = $map->preRegistrations;
                                                $mapId = $map->map_id;
                                            }
                                        @endphp
                                        @foreach($student->degreeMaps as $s)
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input disabled type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                @php
                                                $studentp = $student->studentProfiles[0];
                                                @endphp
                                                <td> {{ $s->concentration_code }} </td>
                                                <td> {{ $s->course_code }} </td>
                                                <td> {{ $s->term_code }} </td>
                                                <td> {{ $studentp->mode_of_instruction}} </td>
                                                <td> {{ implode(',', json_decode($studentp->days_of_week, true)) }} </td>
                                                <td> {{ implode(',', json_decode($studentp->time_of_day, true)) }} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <form method="POST" action="{{ route('admin.approve-student-map') }}" >
                                        @csrf
                                        <input type="hidden" name="map_id" value="{{ $mapId }}"/>
                                        <input type="hidden" name="student_email" value="{{ $student->email }}"/>
                                        @if(!$preg->is_approved)
                                            <div class="btn-group pull-left">
                                                <button type="submit" id="add-button" class="btn btn-circle btn-success">
                                                    Approve <i class="fa"></i>
                                                </button>
                                            </div>
                                        @else
                                            <div class="btn-group pull-left">
                                                <button disabled type="submit" id="add-button" class="btn btn-circle btn-success">
                                                    Approve <i class="fa"></i>
                                                </button>
                                            </div>

                                        @endif
                                        <div style="margin-left: 10px" class="btn-group pull-left">
                                            <button disabled type="submit" id="add-button" class="btn btn-circle btn-danger">
                                                Edit <i class="fa"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
            </div>
            <!-- end page content -->
@endsection
