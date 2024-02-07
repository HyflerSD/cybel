@extends('layouts.master')
@section('title')
    {{ __('Typography') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Typography" pagetitle="Components" />

                <!-- start grid -->
                <div class="grid grid-cols-1 gap-x-6 xl:grid-cols-12">
                    <!-- start col -->
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="flex flex-wrap gap-2 card-body">
                                <div class="shrink-0">
                                    <h1 class="text-6xl font-light text-gray-600 dark:text-gray-100">A</h1>
                                </div>
                                <div class="ltr:ml-4 rtl:mr-4">
                                    <p class="mb-2 text-gray-500 text-muted dark:text-zinc-100">Font Family</p>
                                    <h5 class="text-gray-600 dark:text-gray-100">" IBM Plex Sans", sans-serif</h5>
                                </div>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Headings</h6>
                            </div>
                            <div class="space-y-3 card-body">
                                <h1 class="text-4xl font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-3xl text-gray-400 dark:text-zinc-100/60">2.25rem (36px)</span></h1>
                                <h2 class="text-3xl font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-xl text-gray-400 dark:text-zinc-100/60">1.875rem (30px)</span></h2>
                                <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-xl text-gray-400 dark:text-zinc-100/60">1.5rem (24px)</span></h3>
                                <h4 class="text-xl font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-gray-400 dark:text-zinc-100/60">1.25rem (20px)</span></h4>
                                <h5 class="text-lg font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-gray-400 dark:text-zinc-100/60">1.125rem (18px)</span></h5>
                                <h6 class="text-sm font-semibold text-gray-700 dark:text-gray-100">Tailwind heading <span
                                        class="text-gray-400 text-13 dark:text-zinc-100/60">0.875rem (14px)</span></h6>
                            </div>
                        </div>

                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-6">
                                        <div class="flex flex-wrap items-center">
                                            <div class="shrink-0">
                                                <h1 class="text-6xl font-medium text-gray-600 dark:text-gray-100">Aa</h1>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <p class="mb-2 text-gray-500 text-muted dark:text-zinc-100">Font Weight</p>
                                                <h4 class="mb-0 text-gray-600 dark:text-gray-100">500</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="flex flex-wrap items-center">
                                            <div class="shrink-0">
                                                <h1 class="mb-0 text-6xl font-semibold text-gray-600 dark:text-gray-100">Aa
                                                </h1>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4">
                                                <p class="mb-2 text-gray-500 text-muted dark:text-zinc-100">Font Weight</p>
                                                <h4 class="mb-0 text-gray-600 dark:text-gray-100">600</h4>
                                            </div>
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
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Headings</h6>
                            </div>
                            <div class="space-y-1 card-body">
                                <h1 class="font-normal text-gray-600 dark:text-gray-100 text-9xl">Text-9xl</h1>
                                <h2 class="font-normal text-gray-600 dark:text-gray-100 text-8xl">Text-8xl</h2>
                                <h3 class="font-normal text-gray-600 dark:text-gray-100 text-7xl">Text-7xl</h3>
                                <h4 class="text-6xl font-normal text-gray-600 dark:text-gray-100">Text-6xl</h4>
                                <h5 class="text-5xl font-normal text-gray-600 dark:text-gray-100">Text-5xl</h5>
                                <h6 class="text-4xl font-normal text-gray-600 dark:text-gray-100">Text-4xl</h6>
                                <p class="text-3xl font-normal text-gray-600 dark:text-gray-100">Text-3xl</p>
                                <p class="text-2xl font-normal text-gray-600 dark:text-gray-100">Text-2xl</p>
                                <p class="text-xl font-normal text-gray-600 dark:text-gray-100">Text-xl</p>
                                <p class="text-lg font-normal text-gray-600 dark:text-gray-100">Text-lg</p>
                                <p class="text-base font-normal text-gray-600 dark:text-gray-100">Text-base</p>
                                <p class="text-sm font-normal text-gray-600 dark:text-gray-100">Text-sm</p>
                                <p class="text-xs font-normal text-gray-600 dark:text-gray-100">Text-xs</p>
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
