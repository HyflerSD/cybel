@extends('layouts.master')
@section('title')
    {{ __('SweetAlert 2') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="SweetAlert 2" pagetitle="Extended" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-50 dark:border-zinc-600">
                            <h6 class="mb-2 text-gray-700 text-15 dark:text-gray-100">Examples</h6>
                            <p class="text-13 text-gray-700 dark:text-gray-100">A beautiful, responsive, customizable and
                                accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies.</p>
                        </div>
                        <div class="relative overflow-x-auto card-body">
                            <table class="table w-full text-gray-700 dark:text-zinc-100">
                                <thead>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="col" class="w-[50%] text-start p-3">
                                            Sweet Alert Type
                                        </th>
                                        <th scope="col" class="p-3 text-center">
                                            Sweet Alert Examples
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A Basic Message
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-basic">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A Title with a Text Under
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-title">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A success message!
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-success">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A warning message, with a function attached to the "Confirm"-button...
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-warning">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            By passing a parameter, you can execute something else for "Cancel".
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-params">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A message with custom Image Header
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-image">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A message with auto close timer
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-close">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            Custom HTML description and buttons
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="custom-html-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A custom positioned dialog
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="sa-position">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            A message with custom width, padding and background
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="custom-padding-width-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-50 dark:border-zinc-600">
                                        <th scope="row" class="p-3 text-start">
                                            Ajax request example
                                        </th>
                                        <td class="p-3 text-center">
                                            <button type="button"
                                                class="text-xs text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30"
                                                id="ajax-alert">Click me</button>
                                        </td>
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
    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ URL::asset('build/js/pages/sweetalert.init.js') }}"></script>
@endsection
