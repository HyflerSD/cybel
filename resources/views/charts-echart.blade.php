@extends('layouts.master')
@section('title')
    {{ __('Echarts') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Echarts" pagetitle="Charts" />

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="line-chart" data-colors='["#2ab57d", "#ccc"]' class="e-charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Mix Line-Bar</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="mix-line-bar" data-colors='["#2ab57d", "#5156be", "#fd625e"]' class="e-charts">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Doughnut Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="doughnut-chart"
                                    data-colors='["#5156be", "#ffbf53", "#fd625e", "#4ba6ef", "#2ab57d"]' class="e-charts">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Pie Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="pie-chart" data-colors='["#fd625e", "#2ab57d", "#4ba6ef", "#ffbf53", "#5156be"]'
                                    class="e-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Scatter Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="scatter-chart" data-colors='["#2ab57d"]' class="e-charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Bubble Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="bubble-chart"
                                    data-colors='["rgb(81, 86, 190)", "rgb(143, 148, 255)", "rgba(81, 86, 190, 0.5)", "rgb(42, 181, 125)", "rgb(111, 255, 203)",  "rgb(42, 181, 125, 0.5)"]'
                                    class="e-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Candlestick Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="candlestick-chart" data-colors='["#5156be", "#2ab57d"]' class="e-charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Gauge Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <div id="gauge-chart" data-colors='["#2ab57d", "#5156be", "#fd625e"]' class="e-charts">
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

    <!-- echarts js -->
    <script src="{{ URL::asset('build/libs/echarts/echarts.min.js') }}"></script>
    <!-- echarts init -->
    <script src="{{ URL::asset('build/js/pages/echarts.init.js') }}"></script>
@endsection
