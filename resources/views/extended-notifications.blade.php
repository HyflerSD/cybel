@extends('layouts.master')
@section('title')
    {{ __('Notifications') }}
@endsection
@section('css')
    <!-- alertifyjs Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content xl:h-screen dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Notifications" pagetitle="Extended" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">AlertifyJs</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Default Dialogs</h4>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 text-center lg:col-span-4">
                                    <div class="my-4">
                                        <h5 class="mb-4 text-gray-700 dark:text-gray-100">Alert</h5>
                                        <a href="javascript: void(0);" id="alert"
                                            class="text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-500/30">Click
                                            me</a>
                                    </div>
                                </div>
                                <div class="col-span-12 text-center lg:col-span-4">
                                    <div class="my-4">
                                        <h5 class="mb-4 text-gray-700 dark:text-gray-100">Confirm</h5>
                                        <a href="javascript: void(0);" id="alert-confirm"
                                            class="text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-500/30">Click
                                            me</a>
                                    </div>
                                </div>
                                <div class="col-span-12 text-center lg:col-span-4">
                                    <div class="my-4">
                                        <h5 class="mb-4 text-gray-700 dark:text-gray-100">Prompt</h5>
                                        <a href="javascript: void(0);" id="alert-prompt"
                                            class="text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-500/30">Click
                                            me</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="mt-5 mb-3 text-gray-700 text-15 dark:text-gray-100">Default Notifications</h4>
                            <table class="table w-full">
                                <tbody>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <td class="p-3 text-gray-700 dark:text-zinc-100">Default alert</td>
                                        <td class="p-3"><a href="javascript: void(0);" id="alert-message"
                                                class="btn text-xs py-1.5 px-2.5 border-transparent bg-violet-500 text-white focus:ring focus:ring-violet-500/30">Click
                                                me</a></td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <td class="p-3 text-gray-700 dark:text-zinc-100">Success alert</td>
                                        <td class="p-3"><a href="javascript: void(0);" id="alert-success"
                                                class="btn text-xs py-1.5 px-2.5 border-transparent bg-violet-500 text-white focus:ring focus:ring-violet-500/30">Click
                                                me</a></td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <td class="p-3 text-gray-700 dark:text-zinc-100">Error alert</td>
                                        <td class="p-3"><a href="javascript: void(0);" id="alert-error"
                                                class="btn text-xs py-1.5 px-2.5 border-transparent bg-violet-500 text-white focus:ring focus:ring-violet-500/30">Click
                                                me</a></td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <td class="p-3 text-gray-700 dark:text-zinc-100">Warning alert</td>
                                        <td class="p-3"><a href="javascript: void(0);" id="alert-warning"
                                                class="btn text-xs py-1.5 px-2.5 border-transparent bg-violet-500 text-white focus:ring focus:ring-violet-500/30">Click
                                                me</a></td>
                                    </tr>
                                </tbody>
                            </table>
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
    <!-- alertifyjs js -->
    <script src="{{ URL::asset('build/libs/alertifyjs/build/alertify.min.js') }}"></script>

    <!-- notification init -->
    <script src="{{ URL::asset('build/js/pages/notification.init.js') }}"></script>
@endsection
