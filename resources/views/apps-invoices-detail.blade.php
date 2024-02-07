@extends('layouts.master')
@section('title')
    {{ __('Invoice List') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Invoice List" pagetitle="Apps" />

                <div class="grid grid-cols-1 ">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div class="flex items-center mb-6">
                                <div class="flex-grow">
                                    <div class="inline-flex items-center">
                                        <img src="{{ URL::asset('build/images/logo-sm.svg') }}" class="h-6" alt=""><span
                                            class="text-lg font-medium text-gray-700 ltr:ml-1.5 rtl:mr-1.5 dark:text-gray-100">Minia</span>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h4 class="mb-2 text-gray-600 float-end text-16 dark:text-gray-100">Invoice # 12345
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-1 text-gray-700 dark:text-zinc-100">1874 County Line Road City, FL 33566</p>
                                <p class="mb-1 text-gray-700 dark:text-zinc-100"><i
                                        class="align-middle mdi mdi-email ltr:mr-1 rtl:ml-1"></i> abc@123.com</p>
                                <p class="mb-1 text-gray-700 dark:text-zinc-100"><i
                                        class="align-middle mdi mdi-phone ltr:mr-1 rtl:ml-1"></i> 012-345-6789</p>
                                <hr class="my-5 border-gray-100 dark:border-zinc-600">
                            </div>

                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-6">
                                    <h5 class="mb-3 text-gray-700 text-15 dark:text-gray-100">Billed To:</h5>
                                    <h5 class="mb-2 text-base text-gray-700 dark:text-zinc-100">Richard Saul</h5>
                                    <p class="mb-1 text-gray-600 dark:text-zinc-100">1208 Sherwood Circle Lafayette, LA
                                        70506</p>
                                    <p class="mb-1 text-gray-600 dark:text-zinc-100">RichardSaul@rhyta.com</p>
                                    <p class="text-gray-600 dark:text-zinc-100">337-256-9134</p>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <h5 class="mb-2 text-gray-700 text-15 dark:text-gray-100">Order Date:</h5>
                                    <p class="text-gray-600 dark:text-zinc-100">February 16, 2020</p>
                                    <div class="my-4">
                                        <h5 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Payment Method:</h5>
                                        <p class="mb-1 text-gray-600 dark:text-zinc-100">Visa ending **** 4242</p>
                                        <p class="text-gray-600 dark:text-zinc-100">richards@email.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 mt-3">
                                <h5 class="text-gray-700 text-15 dark:text-gray-100">Order summary</h5>
                                <div class="mt-3 card dark:border-zinc-600 p-6">
                                    <div class=" overflow-x-auto">
                                        <table class="w-full">
                                            <thead class="border-b border-gray-50 dark:border-zinc-600 ">
                                                <th class="p-3 text-gray-700 w-[70px] text-start dark:text-gray-100">No.
                                                </th>
                                                <th class="p-3 text-gray-700 text-start dark:text-gray-100">Item</th>
                                                <th class="w-32 p-3 text-gray-700 text-end dark:text-gray-100">Price</th>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 ">
                                                    <th scope="row"
                                                        class="p-3 text-gray-700 text-start dark:text-gray-100">01</th>
                                                    <td class="p-3">
                                                        <h5 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Minia</h5>
                                                        <p class="mb-0 text-gray-500 text-13 dark:text-zinc-100">Bootstrap 5
                                                            Admin Dashboard </p>
                                                    </td>
                                                    <td class="p-3 text-gray-700 text-end dark:text-zinc-100">$499.00</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 ">
                                                    <th scope="row"
                                                        class="p-3 text-gray-700 text-start dark:text-gray-100">02</th>
                                                    <td class="p-3">
                                                        <h5 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Skote</h5>
                                                        <p class="mb-0 text-gray-500 text-13 dark:text-zinc-100">Bootstrap 5
                                                            Admin Dashboard </p>
                                                    </td>
                                                    <td class="p-3 text-gray-700 text-end dark:text-zinc-100">$499.00</td>
                                                </tr>
                                                <tr class="border-b border-gray-50 dark:border-zinc-600 ">
                                                    <th scope="row" colspan="2"
                                                        class="p-3 text-gray-700 text-end dark:text-gray-100">Sub Total</th>
                                                    <td class="p-3 text-gray-700 text-end dark:text-zinc-100">$998.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2"
                                                        class="p-3 text-gray-700 text-end dark:text-gray-100">Tax</th>
                                                    <td class="p-3 text-gray-700 text-end dark:text-zinc-100">$12.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2"
                                                        class="p-3 text-gray-700 text-end dark:text-gray-100">Total</th>
                                                    <td class="p-3 text-gray-700 dark:text-gray-100 text-end">
                                                        <h4 class="m-0">$1010.00</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="float-right pb-5 space-x-2">
                                    <a href=""
                                        class="text-white bg-green-500 border-transparent shadow-md btn shadow-green-200 dark:shadow-zinc-600"><i
                                            class="fa fa-print"></i></a>
                                    <a href="#"
                                        class="text-white shadow-md btn bg-violet-500 border-violet-500 w-28 shadow-violet-100 dark:shadow-zinc-600">Send</a>
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
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection
