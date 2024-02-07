@extends('layouts.master')
@section('title')
    {{ __('Progress Bars') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Progress Bars" pagetitle="Components" />

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Default Examples</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 100%;" role="progressbar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Backgrounds</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-sky-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-yellow-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-red-400 rounded-full" style="width: 100%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Labels Example</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none text-center flex justify-center items-center"
                                            style="width: 25%;" role="progressbar">
                                            <p class="text-white align-middle text-11 ">25%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Multiple bars</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="flex">
                                            <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                                style="width: 15%;" role="progressbar"></div>
                                            <div class="progress-bar h-2.5 bg-green-600 " style="width: 30%;"
                                                role="progressbar"></div>
                                            <div class="progress-bar h-2.5 bg-sky-500 " style="width: 20%;"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Height</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <h6 class="text-gray-600 text-13 dark:text-gray-100">Progress sm</h6>
                                    <div
                                        class="progress h-1.5  w-full mt-1 bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="text-gray-600 text-13 dark:text-gray-100">Progress sm</h6>
                                    <div class="relative w-full h-2 mt-1 rounded-full progress bg-gray-50 dark:bg-zinc-600">
                                        <div class="h-2 bg-green-600 rounded-full progress-bar ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 40%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="text-gray-600 text-13 dark:text-gray-100">Progress sm</h6>
                                    <div
                                        class="relative w-full h-3 mt-1 rounded-full progress bg-gray-50 dark:bg-zinc-600">
                                        <div class="h-3 bg-yellow-400 rounded-full progress-bar ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 50%;" role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="text-gray-600 text-13 dark:text-gray-100">Progress sm</h6>
                                    <div
                                        class="relative w-full h-4 mt-1 rounded-full progress bg-gray-50 dark:bg-zinc-600">
                                        <div class="h-4 bg-red-400 rounded-full progress-bar ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 70%;" role="progressbar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="mb-4 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Striped</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped"
                                            style="width: 25%;" role="progressbar"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped"
                                            style="width: 40%;" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Animated stripes</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="progress h-2.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none progress-bar-striped animate-strip"
                                            style="width: 75%;" role="progressbar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Animated Progress</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5  w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-violet-500 rounded-full" style="width: 10%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-green-600 rounded-full" style="width: 20%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-sky-500 rounded-full" style="width: 50%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <div
                                        class="progress h-2.5 w-full bg-gray-50 mb-4 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-2.5 bg-yellow-400 rounded-full" style="width: 75%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="progress h-2.5 w-full bg-gray-50 rounded-full relative">
                                        <div class="progress-bar h-2.5 bg-red-400 rounded-full" style="width: 100%;"
                                            role="progressbar"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Custom progress</h6>
                            </div>
                            <div class="card-body">
                                <div class="relative ">
                                    <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-red-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 84%;" role="progressbar"></div>
                                    </div>
                                    <div
                                        class="avatar-sm h-9 w-9 border border-red-400 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="text-lg leading-loose text-red-400 bx bxl-html5"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="relative mt-12">
                                    <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-violet-500 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 75%;" role="progressbar"></div>
                                    </div>
                                    <div
                                        class="avatar-sm h-9 w-9 border border-violet-500 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="text-lg leading-loose bx bxl-css3 text-violet-500"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="relative mt-12">
                                    <div class="progress h-1.5 w-full bg-gray-50 rounded-full dark:bg-zinc-600">
                                        <div class="progress-bar h-1.5 bg-sky-400 rounded-full ltr:rounded-r-none rtl:rounded-l-none"
                                            style="width: 62%;" role="progressbar"></div>
                                    </div>
                                    <div
                                        class="avatar-sm h-9 w-9 border border-sky-400 rounded-full text-center bg-white absolute -top-3.5">
                                        <span class="avatar-title rounded-circle ">
                                            <i class="text-lg leading-loose bx bxl-jquery text-sky-400"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Progress Example</h6>
                            </div>
                            <div class="card-body">
                                <div class="relative p-5">
                                    <div class="progress h-0.5  w-full bg-gray-50 rounded-full relative dark:bg-zinc-600">
                                        <div class="progress-bar h-0.5 bg-violet-500 rounded-full" style="width: 50%;"
                                            role="progressbar"></div>
                                    </div>
                                    <button type="button"
                                        class="h-8 w-8 rounded-full bg-violet-500 text-white absolute top-1.5 left-0">1</button>
                                    <button type="button"
                                        class="h-8 w-8 rounded-full bg-violet-500 text-white absolute top-1.5 left-[48%]">2</button>
                                    <button type="button"
                                        class="h-8 w-8 rounded-full bg-gray-500 text-white absolute top-1.5 right-0">3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end grid -->


                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
