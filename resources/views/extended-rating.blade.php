@extends('layouts.master')
@section('title')
    {{ __('Rating') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Rating" pagetitle="Extended" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rater Js</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Basic Rater</h5>
                                    <div id="basic-rater"></div>
                                </div>
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Rater with Step</h5>
                                    <div id="rater-step"></div>
                                </div>
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Custom Messages</h5>
                                    <div id="rater-message"></div>
                                </div>
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Example with unlimited number
                                        of stars. readOnly option is set to true.</h5>
                                    <div id="rater-unlimitedstar"></div>
                                </div>
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">On Hover event</h5>
                                    <div id="rater-onhover" class="align-middle"></div>
                                    <span
                                        class="ratingnum badge px-1.5 py-0.5 text-sm text-gray-900 dark:text-gray-200 rounded align-middle ms-2"></span>
                                </div>
                                <div class="col-span-12 py-6 md:p-12 text-center lg:col-span-6">
                                    <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Clear/Reset rater</h5>
                                    <div id="raterreset" class="align-middle"></div>
                                    <span class="clear-rating"></span>
                                    <button id="raterreset-button"
                                        class="px-2 py-1 ml-2 text-sm btn border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white">Reset</button>
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
    <!-- rater-js plugin -->
    <script src="{{ URL::asset('build/libs/rater-js/index.js') }}"></script>
    <!-- rating init -->
    <script src="{{ URL::asset('build/js/pages/rating.init.js') }}"></script>
@endsection
