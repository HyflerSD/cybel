@extends('layouts.master')
@section('title')
    {{ __('ChartJS') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="ChartJS" pagetitle="Charts" />

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Line Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="lineChart" height="320"
                                    data-colors='["rgba(81, 86, 190, 0.2)", "#5156be", "rgba(251, 252, 252, 0.5)", "#ecf0f3"]'></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Bar Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="bar" height="320"
                                    data-colors='["rgba(41, 181, 125, 0.8)", "rgba(41, 181, 125, 0.9)"]'></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Pie Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="pie" height="320" data-colors='["#2ab57d", "#ebeff2"]'></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Donut Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="doughnut" height="320" data-colors='["#5156be", "#ebeff2"]'></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Polar Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="polarArea" height="320"
                                    data-colors='["#fd625e", "#2ab57d", "#ffbf53", "#5156be"]'> </canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15">Radar Chart</h6>
                            </div>
                            <div class="flex flex-wrap gap-3 card-body">
                                <canvas id="radar" height="320"
                                    data-colors='["rgba(42, 181, 125, 0.2)", "#2ab57d", "rgba(81, 86, 190, 0.2)", "#5156be"]'></canvas>
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

    <!-- Chart JS -->
    <script src="{{ URL::asset('build/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- chartjs init -->
    <script src="{{ URL::asset('build/js/pages/chartjs.init.js') }}"></script>
@endsection
