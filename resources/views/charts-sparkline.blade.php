@extends('layouts.master')
@section('title')
    {{ __('Sparkline Chart') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Sparkline Chart" pagetitle="Charts" />

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Pie Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline1" data-colors='["#2ab57d", "#5156be", "#e9ecef"]' class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Bar Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline2" data-colors='["#2ab57d"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline4" data-colors='["#5156be"]'></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Composite Bar Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline3" data-colors='["#5156be", "#2ab57d"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Line Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline5"
                                    data-colors='["#5156be", "rgba(81, 86, 190, 0.3)", "#2ab57d", "rgba(42, 181, 125, 0.3)"]'
                                    class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card bg-violet-500 dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-white text-15 dark:text-gray-100">Discrete Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline6" data-colors='["#fff"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Bullet Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline7" data-colors='["#5156be", "#fd625e"]' class="items-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Box Plot Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline8" data-colors='["#2ab57d"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Tristate Chart</h6>
                            </div>
                            <div class="card-body">
                                <div id="sparkline9" data-colors='["#5156be", "#2ab57d", "#f46a6a"]' class="text-center">
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

    <!-- jquery-sparkline js -->
    <script src="{{ URL::asset('build/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- sparkline init -->
    <script src="{{ URL::asset('build/js/pages/sparklines.init.js') }}"></script>
@endsection
