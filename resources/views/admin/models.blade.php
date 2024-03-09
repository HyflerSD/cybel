@extends('layouts.admin')

@section('title') {{'Models'}} @endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            let index = 0; // for array keys to add courses

            $('#add-button').click(function() {
                $(".table-checkable input[type='checkbox']:checked").each(function() {
                    var row = $(this).closest("tr");
                    var courseCode = row.find("td:nth-child(3)").text();
                    var type = row.find("td:nth-child(5)").text();
                    var level = row.find("td:nth-child(4)").text();
                    var exists = false;

                    $("#models-table tbody tr").each(function() {
                        if ($(this).find("input[name='courses[" + index + "][course_code]']").val() === courseCode) {
                            exists = true;
                            return false;
                        }
                    });

                    if (!exists) {
                        var newRow = `<tr class="odd gradeX">
                                  <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                  <td><input type="hidden" name="courses[${index}][course_code]" value="${courseCode}"/>${courseCode}</td>
                                  <td><input type="text" name="courses[${index}][priority_index]"/></td>
                                  <td><input type="hidden" name="courses[${index}][course_type]" value="${type}"/>${type}</td>
                                  <td><input type="hidden" name="courses[${index}][course_level]" value="${level}"/>${level}</td>
                                  <td><input type="text" name="courses[${index}][level_combination]"/></td>
                              </tr>`;
                        $("#models-table tbody").append(newRow);
                        index++;
                    }
                    $(this).prop('checked', false); //clear checkboxes
                });
                saveModelTableData();
            });


            //Remove COurses
            $('#remove-course').click(function() {
                $(".table-checkable tbody input[type='checkbox']:checked").each(function() {
                    $((this).closest("tr")).empty()
                    $(".table-checkable input[type='checkbox']:checked").each(function() {
                    }).prop('checked', false);
                });
                saveModelTableData();
            });

            $('#select-all-courses').change(function() {
                var isChecked = $(this).prop('checked');
                $(this).closest('table').find('tbody input[type="checkbox"]').prop('checked', isChecked);
            });
        });


    </script>
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Degree Model Creation</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-head">
                            <header>Course List</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head">
                        <header>Degree Model</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <button id="remove-course" class="btn btn-danger">
                                        Remove Course <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.create-model') }}" >
                            @csrf <!-- Can't hack me son -->
                            <table id="models-table"
                                   class="table table-striped table-bordered table-hover table-checkable order-column"
                                   style="width: 100%">
                                <thead>
                                <tr>
                                    <th >
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input id="select-all-courses" type="checkbox" class="group-checkable"
                                                   data-set="#sample_1 .checkboxes" />
                                            <span></span>
                                        </label>
                                    </th>
                                    <th> Course Code </th>
                                    <th> Priority Index </th>
                                    <th> Type </th>
                                    <th> Level </th>
                                    <th> Level Combination </th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="btn-group pull-right">
                                <button id="add-button" class="btn btn-round btn-default">
                                    Save Model <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </form>
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
@section('scripts')
    <script src="/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
    <script src="/admin/assets/js/pages/table/table_data.js"></script>
@endsection
