@extends('layouts.master')
@section('title')
    {{ __('Sizing') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Sizing" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Width</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-12 space-y-3 xl:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100">Fixed widths</h6>
                                    <div class="w-24 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-24</div>
                                    <div class="w-32 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-32</div>
                                    <div class="w-40 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-40</div>
                                    <div class="w-48 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-48</div>
                                    <div class="w-64 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-64</div>
                                    <div
                                        class="px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 w-full md:w-80">
                                        w-80</div>
                                    <div
                                        class="px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 w-full md:w-96">
                                        w-96</div>
                                </div>

                                <div class="col-span-12 space-y-3 xl:col-span-6">
                                    <h6 class="text-gray-700 dark:text-gray-100">Percentage widths</h6>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-1/2 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/2</div>
                                        <div
                                            class="w-1/2 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/2</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-2/5 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-2/5</div>
                                        <div
                                            class="w-3/5 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-3/5</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-1/3 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/3</div>
                                        <div
                                            class="w-2/3 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-2/3</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-1/4 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/4</div>
                                        <div
                                            class="w-4/5 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-3/4</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-1/5 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/5</div>
                                        <div
                                            class="w-4/5 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-4/5</div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="w-1/6 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-1/6</div>
                                        <div
                                            class="w-5/6 px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            w-5/6</div>
                                    </div>
                                    <div class="w-full px-4 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                        w-full</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Height</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-1 md:gap-3">
                                <div class="col-span-6 space-y-3">
                                    <h6 class="text-gray-700 dark:text-gray-100">Fixed heights</h6>
                                    <div class="flex gap-2 md:gap-4">
                                        <div
                                            class="h-24 px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            h-24</div>
                                        <div
                                            class="h-32 px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            h-32</div>
                                        <div
                                            class="h-40 px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            h-40</div>
                                        <div
                                            class="h-48 px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            h-48</div>
                                        <div
                                            class="h-64 px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100">
                                            h-64</div>
                                        <div
                                            class="px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 h-80">
                                            h-80</div>
                                        <div
                                            class="px-2 py-2 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-zinc-100 h-96">
                                            h-96</div>
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
