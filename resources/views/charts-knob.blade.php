@extends('layouts.master')
@section('title')
    {{ __('Jquery Knob') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Jquery Knob" pagetitle="Charts" />

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h4 class="text-gray-700 text-15 dark:text-gray-100">Examples</h4>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Disable display input</h6>
                                    <input class="knob" data-width="150" data-fgcolor="#5156be" data-displayinput="false"
                                        value="35">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Cursor mode</h6>
                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#2ab57d"
                                        value="29">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Display previous value</h6>
                                    <input class="knob" data-width="150" data-min="-100" data-fgcolor="#4ba6ef"
                                        data-displayprevious="true" value="44">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Angle offset</h6>
                                    <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round"
                                        data-fgcolor="#f1734f" value="35">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">5-digit values, step 1000</h6>
                                    <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true"
                                        data-max="15000" data-step="1000" value="-11000" data-fgcolor="#ffbf53">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Angle offset and arc</h6>
                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#fd625e"
                                        value="29">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100">Readonly</h6>
                                    <input class="knob knob-small" data-width="150" data-height="150" data-linecap=round
                                        data-fgColor="#f06292" value="80" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="flex flex-col items-center justify-center">
                                    <h6 class="mb-4 text-gray-600 text-15 dark:text-gray-100"> Angle offset and arc</h6>
                                    <input class="knob knob-small" data-width="150" data-height="150"
                                        data-displayPrevious=true data-fgColor="#8d6e63" data-skin="tron" data-cursor=true
                                        value="75" data-thickness=".2" data-angleOffset=-125 data-angleArc=250
                                        value="44" />
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery-knob plugin  -->
    <script src="{{ URL::asset('build/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- jquery-knob init -->
    <script src="{{ URL::asset('build/js/pages/jquery-knob.init.js') }}"></script>
@endsection
