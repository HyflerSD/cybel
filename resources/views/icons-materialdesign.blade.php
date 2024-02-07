@extends('layouts.master')
@section('title')
    {{ __('Materialdesign Icon') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Materialdesign Icon" pagetitle="Icons" />

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">New Icons</h6>
                    </div>
                    <div class="pt-0 card-body">
                        <div>
                            <div class="row icon-demo-content" id="newIcons"></div>
                        </div>

                    </div>
                </div>

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">All Icons</h6>
                    </div>
                    <div class="pt-0 card-body">
                        <div>
                            <div class="row icon-demo-content" id="icons"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-18px mdi-account"></i> mdi-18px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-24px mdi-account"></i> mdi-24px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-36px mdi-account"></i> mdi-36px
                            </div>

                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-48px mdi-account"></i> mdi-48px
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rotate</h6>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-45 mdi-account"></i> mdi-rotate-45
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-90 mdi-account"></i> mdi-rotate-90
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-135 mdi-account"></i> mdi-rotate-135
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-180 mdi-account"></i> mdi-rotate-180
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-225 mdi-account"></i> mdi-rotate-225
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-270 mdi-account"></i> mdi-rotate-270
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-rotate-315 mdi-account"></i> mdi-rotate-315
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Spin</h6>
                    </div>
                    <div class="card-body">
                        <div class="row icon-demo-content">
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-spin mdi-loading"></i> mdi-spin
                            </div>
                            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                <i class="mdi mdi-spin mdi-star"></i> mdi-spin
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
    <!-- materialdesign icon js-->
    <script src="{{ URL::asset('build/js/pages/materialdesign.init.js') }}"></script>
@endsection
