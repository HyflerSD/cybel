@extends('layouts.master')
@section('title')
    {{ __('Form Mask') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Form Mask" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Basic pills Wizard</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div>
                                        <div>
                                            <label for="regexp-mask"
                                                class="font-medium text-gray-700 dark:text-gray-100">RegExp (Russian postal
                                                code)</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="regexp-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">/^[1-6]\d{0,5}$/</div>
                                        </div>

                                        <div class="mt-4">
                                            <label for="phone-mask"
                                                class="font-medium text-gray-700 dark:text-gray-100">Pattern (Phone)</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="phone-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">+{7}(000)000-00-00</div>
                                        </div>
                                        <div class="mt-4">
                                            <label for="number-mask"
                                                class="font-medium text-gray-700 dark:text-gray-100">Number</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="number-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">in range [-10000, 10000]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div>
                                        <div>
                                            <label for="date-mask"
                                                class="font-medium text-gray-700 dark:text-gray-100">Date</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="date-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">'dd.mm.yyyy' in range
                                                [01.01.1990, 01.01.2020]</div>
                                        </div>

                                        <div class="mt-4">
                                            <label class="font-medium text-gray-700 dark:text-gray-100">On-the-fly
                                                select</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="dynamic-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">phone or email</div>
                                        </div>
                                        <div class="mt-4">
                                            <label class="font-medium text-gray-700 dark:text-gray-100">Mask in mask</label>
                                            <input type="text"
                                                class="block w-full mt-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 "
                                                id="currency-mask">
                                            <div class="mt-1 text-gray-500 dark:text-zinc-100/60">currency input</div>
                                        </div>
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
    <!-- form mask -->
    <script src="{{ URL::asset('build/libs/imask/imask.min.js') }}"></script>

    <!-- form mask init -->
    <script src="{{ URL::asset('build/js/pages/form-mask.init.js') }}"></script>
@endsection
