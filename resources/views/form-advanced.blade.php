@extends('layouts.master')
@section('title')
    {{ __('Form Validation') }}
@endsection
@section('css')
    <!-- choices css -->
    <link href="{{ URL::asset('build/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/classic.min.css') }}" />
    <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/monolith.min.css') }}" />
    <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/nano.min.css') }}" /> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Form Validation" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Css Switch</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-6">
                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Example switch</h5>
                                    <div class="flex flex-wrap gap-2">
                                        <input type="checkbox" id="switch1" switch="none" checked />
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                                        <input type="checkbox" id="switch2" switch="default" checked />
                                        <label for="switch2" data-on-label="" data-off-label=""></label>

                                        <input type="checkbox" id="switch3" switch="bool" checked />
                                        <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch6" switch="primary" checked />
                                        <label for="switch6" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch4" switch="success" checked />
                                        <label for="switch4" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch7" switch="info" checked />
                                        <label for="switch7" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch5" switch="warning" checked />
                                        <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch8" switch="danger" checked />
                                        <label for="switch8" data-on-label="Yes" data-off-label="No"></label>

                                        <input type="checkbox" id="switch9" switch="dark" checked />
                                        <label for="switch9" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Square switch</h5>

                                    <div class="flex flex-wrap gap-2">
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch1" switch="none" checked />
                                            <label for="square-switch1" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch2" switch="info" checked />
                                            <label for="square-switch2" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch3" switch="bool" checked />
                                            <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch4" switch="warning" checked />
                                            <label for="square-switch4" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                        <div class="square-switch">
                                            <input type="checkbox" id="square-switch5" switch="danger" checked />
                                            <label for="square-switch5" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Choices</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-x-5 gap-y-3">
                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Single select input Example
                                    </h5>
                                    <div>
                                        <div class="mb-2">
                                            <label for="choices-single-default"
                                                class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Default</label>
                                        </div>
                                        <select class="border-gray-100" data-trigger name="choices-single-default"
                                            id="choices-single-default" placeholder="This is a search placeholder">
                                            <option value="">This is a placeholder</option>
                                            <option value="Choice 1">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Single select input Example
                                    </h5>
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-groups"
                                                class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Option
                                                groups</label>
                                        </div>
                                        <select class="" data-trigger name="choices-single-groups"
                                            id="choices-single-groups">
                                            <option value="">Choose a city</option>
                                            <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                            </optgroup>
                                            <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                            </optgroup>
                                            <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                            </optgroup>
                                            <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                            </optgroup>
                                            <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                            </optgroup>
                                            <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Single select input Example
                                    </h5>
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-no-search"
                                                class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Options
                                                added
                                                via config with no search</label>
                                        </div>
                                        <select class="" name="choices-single-no-search"
                                            id="choices-single-no-search">
                                            <option value="0">Zero</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <label for="choices-single-no-sorting"
                                                class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Options
                                                added
                                                via config with no search</label>

                                        </div>
                                        <select class="" name="choices-single-no-sorting"
                                            id="choices-single-no-sorting">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Malaga">Malaga</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Montreal">Montreal</option>
                                            <option value="New York">New York</option>
                                            <option value="Michigan">Michigan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-6">
                                <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Multiple select input</h5>
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-multiple-default"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Default</label>
                                            </div>
                                            <select class="choice_place" data-trigger name="choices-multiple-default"
                                                id="choices-multiple-default" placeholder="This is a placeholder"
                                                multiple>
                                                <option value="Choice 1" selected>Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                                <option value="Choice 4" disabled>Choice 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">With
                                                    remove button</label>
                                            </div>
                                            <select class="" name="choices-multiple-remove-button"
                                                id="choices-multiple-remove-button" placeholder="This is a placeholder"
                                                multiple>
                                                <option value="Choice 1" selected>Choice 1</option>
                                                <option value="Choice 2">Choice 2</option>
                                                <option value="Choice 3">Choice 3</option>
                                                <option value="Choice 4">Choice 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-no-search"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Option
                                                    groups</label>
                                            </div>
                                            <select class="" name="choices-multiple-groups"
                                                id="choices-multiple-groups" placeholder="This is a placeholder" multiple>
                                                <option value="">Choose a city</option>
                                                <optgroup label="UK">
                                                    <option value="London">London</option>
                                                    <option value="Manchester">Manchester</option>
                                                    <option value="Liverpool">Liverpool</option>
                                                </optgroup>
                                                <optgroup label="FR">
                                                    <option value="Paris">Paris</option>
                                                    <option value="Lyon">Lyon</option>
                                                    <option value="Marseille">Marseille</option>
                                                </optgroup>
                                                <optgroup label="DE" disabled>
                                                    <option value="Hamburg">Hamburg</option>
                                                    <option value="Munich">Munich</option>
                                                    <option value="Berlin">Berlin</option>
                                                </optgroup>
                                                <optgroup label="US">
                                                    <option value="New York">New York</option>
                                                    <option value="Washington" disabled>Washington</option>
                                                    <option value="Michigan">Michigan</option>
                                                </optgroup>
                                                <optgroup label="SP">
                                                    <option value="Madrid">Madrid</option>
                                                    <option value="Barcelona">Barcelona</option>
                                                    <option value="Malaga">Malaga</option>
                                                </optgroup>
                                                <optgroup label="CA">
                                                    <option value="Montreal">Montreal</option>
                                                    <option value="Toronto">Toronto</option>
                                                    <option value="Vancouver">Vancouver</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Text inputs</h5>
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-multiple-default"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Limited
                                                    to 5 values with remove button</label>
                                            </div>
                                            <input class="" id="choices-text-remove-button" type="text"
                                                value="Task-1,Task-2" placeholder="Enter something" />
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Unique
                                                    values only, no pasting</label>
                                            </div>
                                            <input class="" id="choices-text-unique-values" type="text"
                                                value="Project-A, Project-B" placeholder="This is a placeholder"
                                                class="custom class" />
                                        </div>
                                    </div>

                                    <div class="col-span-12">
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <label for="choices-single-groups"
                                                    class="font-medium text-gray-500 form-label text-13 dark:text-zinc-100">Disabled</label>
                                            </div>
                                            <input class="" id="choices-text-disabled" type="text"
                                                value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk"
                                                placeholder="This is a placeholder" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Colorpicker</h6>
                        </div>
                        <div class="text-center card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Classic Demo</h5>
                                        <div class="classic-colorpicker"></div>
                                    </div>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Monolith Demo</h5>
                                        <div class="monolith-colorpicker"></div>
                                    </div>
                                </div>
                                <div class="col-span-6 lg:col-span-4">
                                    <div class="mt-4">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Monolith Demo</h5>
                                        <div class="nano-colorpicker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Datepicker</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Basic</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-basic">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">DateTime</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-datetime">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Human-friendly Dates</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded flatpickr-input form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-humanfd">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">MinDate and MaxDate</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-minmax">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Disabling dates</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-disable">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Selecting multiple dates
                                        </h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-multiple">
                                    </div>

                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Range</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-range">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Timepicker</h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-timepicker">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Inline Date Picker Demo
                                        </h5>
                                        <input type="text"
                                            class="w-full border-gray-100 rounded form-control dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100"
                                            id="datepicker-inline">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- choices js -->
    <script src="{{ URL::asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- color picker js -->
    <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- datepicker js -->
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
@endsection
