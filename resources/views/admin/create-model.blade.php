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

                    $(".models-table tbody tr").each(function() {
                        var existingCode = $(this).find("td:nth-child(2)").text();
                        if (existingCode === courseCode) {
                            exists = true;
                            alert('Duplicate data found for course code: ' + courseCode);
                            return false;
                        }
                    });

                    if (!exists) {
                        var newRow = `<tr class="odd gradeX">
                                  <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                  <td><input type="hidden" name="courses[${index}][course_code]" value="${courseCode}"/>${courseCode}</td>
                                  <td><input required max="45" type="number" name="courses[${index}][priority_index]"/></td>
                                  <td>
                                    <select style="display:none;" name="courses[${index}][level_combination][]" multiple="multiple" class="form-control">
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="1"> 1</label>
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="2"> 2</label>
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="3"> 3</label>
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="4"> 4</label>
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="5"> 5</label>
                                        <label><input type="checkbox" name="courses[${index}][level_combination][]" value="6"> 6</label>
                                    </select>
                                 </td>
                                  <td><input type="hidden" name="courses[${index}][course_type]" value="${type}"/>${type}</td>
                                <td>
                                    <select required name="courses[${index}][course_level]" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                              </tr>`;
                        $(".models-table tbody").append(newRow);
                        index++;
                    }
                    $(this).prop('checked', false);
                });
                saveModelTableData();
            });

            $("#create-model").submit(function(e) {
                //Make sure at least one level combination is selected
                let isFormValid = true;

                // Iterate over each row in the models table
                $(".models-table tbody tr").each(function() {
                    // For each row, check if there's at least one level_combination checkbox checked
                    let isCheckedInRow = $(this).find('input[type="checkbox"][name^="courses["][name$="][level_combination][]"]:checked').length > 0;

                    // If no checkbox is checked in the current row, mark the form as invalid
                    if (!isCheckedInRow) {
                        isFormValid = false;
                    }
                });

                // If the form is invalid, prevent submission and alert the user
                if (!isFormValid) {
                    e.preventDefault();
                    alert('Please check at least one level combination for every course.');
                    return; // Stop further execution
                }

                let priorityIndices = [];
                let isDuplicate = false;

                // get all priotity values
                $('input[name^="courses["][name$="][priority_index]"]').each(function() {
                    const priorityIndex = $(this).val();
                    if (priorityIndices.includes(priorityIndex)) {
                        isDuplicate = true;
                        return false;
                    }
                    priorityIndices.push(priorityIndex);
                });

                // Check for duplicates
                if (isDuplicate) {
                    e.preventDefault();
                    alert('Duplicate priority index found. Please ensure all priority indices are unique.');
                }

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
                $(this).closest('table').find('tbody  input[type="checkbox"]').prop('checked', isChecked);
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
{{--                                    <th> Course Level </th>--}}
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
{{--                                        <td>--}}
{{--                                            <span class="label label-sm label-warning"> {{ $course->course_level }} </span>--}}
{{--                                        </td>--}}
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
                                        Remove Course <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <form method="POST" id="create-model" action="{{ route('admin.create-model') }}" >
                            @csrf <!-- Can't hack me son -->
                            <div style="margin-bottom: 8px" class="col-md-4 col-sm-4 col-4 d-flex pull-right"> <!-- Use d-flex and align-items-center for proper alignment -->
                                <label class="me-2">Concentration</label> <!-- me-2 adds a margin to the right of the label -->
                                <select required class="form-select" id="selitemIcon" name="concentration">
                                    @foreach($concentrations as $concentration)
                                        @if($concentration->concentration_code == 'S9501')
                                            <option disabled value="">{{ "Concentration" }}</option>
                                            <option value="{{ $concentration->concentration_code }}">{{ $concentration->name }}</option>
                                        @else
                                            <option disabled value="">{{ $concentration->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <table id="example4"
                                   class="table models-table table-striped table-bordered table-hover table-checkable order-column"
                                   style="width: 100%">
                                <thead>
                                <tr>
                                    <th >
                                        <label class="col-select rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input id="select-all-courses" type="checkbox" class="group-checkable"
                                                   data-set="#sample_1 .checkboxes" />
                                            <span></span>
                                        </label>
                                    </th>
                                    <th> Course Code </th>
                                    <th> Priority Index </th>
                                    <th> Level Combination </th>
                                    <th> Type </th>
                                    <th> Level </th>
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
@endsection
