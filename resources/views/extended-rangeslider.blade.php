@extends('layouts.master')
@section('title')
    {{ __('Range Slider') }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/nouislider/nouislider.min.css') }}">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Range Slider" pagetitle="Extended" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">noUiSlider</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Basic Example</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div id="slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Colorpicker</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div class="sliders" id="red"></div>
                                        <div class="sliders" id="green"></div>
                                        <div class="sliders" id="blue"></div>

                                        <div id="result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Using HTML5 input elements</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div id="html5"></div>
                                        <div class="flex flex-wrap">
                                            <select id="input-select"
                                                class="border-gray-100 rounded select-number dark:bg-zinc-700 dark:text-gray-100 dark:border-zinc-600"></select>
                                            <input type="number"
                                                class="border-gray-100 rounded dark:bg-zinc-700 dark:text-gray-100 dark:border-zinc-600"
                                                min="-20" max="40" step="1" id="input-number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Non linear slider</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div id="nonlinear"></div>
                                        <span class="text-gray-600 example-val dark:text-zinc-100" id="lower-value"></span>
                                        <span class="text-gray-600 example-val dark:text-zinc-100" id="upper-value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Locking sliders together</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div class="slider" id="slider1"></div>
                                        <span class="mt-2 text-gray-600 example-val dark:text-zinc-100"
                                            id="slider1-span"></span>

                                        <div class="slider" id="slider2"></div>
                                        <span class="mt-2 text-gray-600 example-val dark:text-zinc-100"
                                            id="slider2-span"></span>

                                        <button id="lockbutton" class="text-white border-transparent btn bg-violet-500"
                                            style="float: right; margin: 20px 0 0;">Lock</button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Only showing tooltips when sliding
                                        handle</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div class="slider" id="slider-hide"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Colored Connect Elements</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div class="slider" id="slider-color"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Creating a toggle</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div id="slider-toggle"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mb-12">
                                <div class="col-span-12 lg:col-span-3">
                                    <h5 class="text-sm text-gray-700 dark:text-gray-100">Soft limits</h5>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div>
                                        <div id="soft"></div>
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
    <script src="{{ URL::asset('build/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/wnumb/wNumb.min.js') }}"></script>

    <!-- lightbox init -->
    <script src="{{ URL::asset('build/js/pages/rangeslider.init.js') }}"></script>
@endsection
