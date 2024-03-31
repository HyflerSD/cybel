@extends('layouts.admin')
@section('title') {{'Degree Models'}} @endsection
@section('content')
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const studentSelect = document.getElementById('student_select');
                const concentrationCodeInput = document.getElementById('concentration_code');

                studentSelect.addEventListener('change', function() {
                    const selectedOption = studentSelect.options[studentSelect.selectedIndex];
                    const concentrationCode = selectedOption.getAttribute('data-concentration');
                    concentrationCodeInput.value = concentrationCode; // Update the input field value
                });
            });
        </script>

    @endsection
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Generate Map</header>
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
                        <div class="card-body" id="bar-parent">
                            <form method="POST" action="{{ route('student.create-map') }}" id="form_sample_1" class="form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Profile:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select required class="form-select input-height" name="priority">
                                                @foreach($studentProfiles as $profile)
                                                    @if($profile->priority == 1)
                                                        <option value="1">{{ $profile->concentrations->name }}</option>
                                                    @else

                                                        <option disabled value="1">{{ $profile->concentrations->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @php
                                        $sProfiles = $studentProfiles->first();
                                    @endphp
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Campus
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ $sProfiles->campus->description }}" name=""
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Time of Day
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ implode(',', json_decode($sProfiles->time_of_day)) }}"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Days of Week
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ implode(',', json_decode($sProfiles->days_of_week)) }}"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Area Of Interest
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ $sProfiles->interest_area }}"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Mode of Instruction
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ ucfirst($profile->mode_of_instruction) }}"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-4 control-label">Courses Per Semester
                                        </label>
                                        <div class="col-md-5">
                                            <input readonly disabled type="text" value="{{ $sProfiles->courses_per_semester }}"
                                                   class="form-control input-height" /> </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Generate Map</button>
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
