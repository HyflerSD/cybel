@extends('layouts.admin')

@section('title') {{'Models'}} @endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            //Get Local Storage Data
            loadModelTableData();

            $('#add-button').click(function() {
                $(".table-checkable input[type='checkbox']:checked").each(function() {
                    var row = $(this).closest("tr"); // Find the row
                    var courseCode = row.find("td:nth-child(3)").text();

                    // Check for duplicates
                    var exists = false;
                    $("#models-table tbody tr").each(function() {
                        var existingCode = $(this).find("td:nth-child(2)").text();
                        if (existingCode === courseCode) {
                            exists = true;
                            return false;
                        }
                    });

                    if (!exists) {
                        var type = row.find("td:nth-child(5)").text();
                        var level = row.find("td:nth-child(4)").text();

                        //Build data to send to template
                        var newRow = `<tr class="odd gradeX">
                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                    <td>${courseCode}</td>
                    <td><input type="text"/></td>
                    <td>${type}</td>
                    <td>${level}</td>
                    <td><input type="text"/></td>
                </tr>`;
                        $("#models-table tbody").append(newRow);
                    }

                    //CLear talbe
                    $(this).prop('checked', false);
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
        function saveModelTableData() {
            var tableData = [];
            $("#models-table tbody tr").each(function() {
                var row = $(this).find('td').map(function() {
                    return $(this).text();
                }).get();
                tableData.push(row);
            });
            localStorage.setItem('modelTableData', JSON.stringify(tableData));
        }

        function loadModelTableData() {
            var tableData = JSON.parse(localStorage.getItem('modelTableData'));
            if (tableData) {
                $("#models-table tbody").empty();
                tableData.forEach(function (rowData) {
                    var row = `<tr class="odd gradeX">
                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                <td>${rowData[1]}</td> <!-- Course Code -->
                <td><input type="text"/></td>
                <td>${rowData[3]}</td> <!-- COurse type -->
                <td>${rowData[4]}</td> <!-- Course level-->
                <td><input type="text"/></td>
            </tr>`;
                    $("#models-table tbody").append(row);
                });
            }
        }

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
                                    <button id="remove-course" class="btn btn-info">
                                        Remove <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                                <th>Level</th>
                                <th>Level Combination</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
