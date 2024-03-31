@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const studentSelect = document.getElementById('student_select');
            const studentIdInput = document.getElementById('student_id');

            studentSelect.addEventListener('change', function() {
                const selectedOption = studentSelect.options[studentSelect.selectedIndex];
                studentIdInput.value = selectedOption.getAttribute('data-studentid'); // Update the hidden input field value
            });
        });
    </script>

    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Generate A Students Map</header>
{{--                            May use this if we have time to print maps as pdf file to email students --}}
{{--                            <button id="panel-button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"--}}
{{--                                    data-upgraded=",MaterialButton">--}}
{{--                                <i class="material-icons">more_vert</i>--}}
{{--                            </button>--}}
{{--                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"--}}
{{--                                data-mdl-for="panel-button">--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else--}}
{{--                                    here</li>--}}
{{--                            </ul>--}}
                        </div>
                        <div class="card-body" id="bar-parent">
                            <form method="POST" action="{{ route('admin.handle-create-student-map') }}" id="form_sample_1" class="form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Concentration
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly type="text" id="concentration_code" placeholder="Concentration Code" name="concentration_code"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Student<span class="required"> *
													</span>
                                        </label>
                                        <div class="col-md-5">
                                            <select required class="form-select input-height" id="student_select" name="student">
                                                <option value="">Select...</option>
                                                @foreach($students as $student)
                                                    <option
                                                        value="{{ $student->student_id }}"
                                                        data-studentid="{{ $student->user_id }}"
                                                        data-concentration="{{ $student->concentration_code }}">
                                                        {{ $student->email }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <input readonly hidden type="text" id="student_id" name="student_id" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Courses Per Semester<span class="required"> *
													</span>
                                        </label>
                                        <div class="col-md-5">
                                            <select required class="form-select input-height" name="courses_per_semester">
                                                <option value="">Select...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Topic Of Interest<span class="required">
														* </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height"  name="elective_interests">
                                                <option value="">Select...</option>
                                                <option value="game_development">Game Development</option>
                                                <option value="artificial_intelligence">Artificial Intelligence</option>
                                                <option value="micro_processors">Micro Processors</option>
                                                <option value="operating_systems">Operating System</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
                                                <button type="button"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
