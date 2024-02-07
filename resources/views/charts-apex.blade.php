@extends('layouts.master')
@section('title')
    {{ __('Apexcharts') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Apexcharts" pagetitle="Charts" />

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line with Data Labels</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="line_chart_datalabel" data-colors='["#5156be", "#2ab57d"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Dashed Line</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="line_chart_dashed" data-colors='["#5156be", "#fd625e", "#2ab57d"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Spline Area</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="spline_area" data-colors='["#5156be", "#2ab57d"]' class="w-full apex-charts"
                                    dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Column Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="column_chart" data-colors='["#2ab57d", "#5156be", "#fd625e"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Column with Data Labels</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="column_chart_datalabel" data-colors='["#5156be"]' class="w-full apex-charts"
                                    dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Bar Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="bar_chart" data-colors='["#2ab57d"]' class="w-full apex-charts" dir="ltr">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line, Column & Area Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="mixed_chart" data-colors='["#fd625e", "#5156be", "#2ab57d"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Radial Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="radial_chart" data-colors='["#5156be", "#2ab57d", "#fd625e", "#ffbf53"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Pie Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="pie_chart" data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                    class="w-full apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Radial Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="donut_chart" data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                    class="w-full apex-charts" dir="ltr"></div>
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

    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- apexcharts init -->
    <script src="{{ URL::asset('build/js/pages/apexcharts.init.js') }}"></script>
@endsection
