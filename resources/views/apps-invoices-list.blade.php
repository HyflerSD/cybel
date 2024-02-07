@extends('layouts.master')
@section('title')
    {{ __('Invoice List') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('build/libs/flowbite/flowbite.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Invoice List" pagetitle="Apps" />


                <div class="card dark:bg-zinc-700 dark:border-zinc-600">
                    <div class="card-body">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 md:col-span-4">
                                <div>
                                    <button type="button"
                                        class="mb-6 text-gray-900 bg-gray-50 border-transparent btn hover:bg-gray-200"><i
                                            class="mr-1 mdi mdi-plus"></i> Add Invoice</button>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-8">
                                <div class="ltr:md:float-right rtl:float-left">
                                    <div class="mb-6">
                                        <div date-rangepicker class="flex items-center">
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 left-0 -top-3 flex items-center pl-3.5 pointer-events-none text-lg">
                                                    <div class="w-4 h-4 text-gray-500 dark:text-gray-400">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <input name="start" type="text"
                                                    class=" border border-gray-50/50 text-gray-900 text-sm rounded focus:ring-violet-500 focus:border-violet-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                                                    placeholder="Select date start">
                                            </div>
                                            <div class="relative dropdown px-3">
                                                <button
                                                    class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                            href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                            href="#">Another Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                            href="#">Somithing else here</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="mb-5 overflow-auto table-responsive">
                                <table
                                    class="table w-full table-centered datatable dt-responsive nowrap table-card-list dark:text-zinc-100 rtl:text-left">
                                    <thead>
                                        <tr
                                            class="text-left text-gray-800 bg-transparent dark:text-gray-200 rtl:text-right">
                                            <th
                                                class="whitespace-nowrap w-[20px] p-3 border-b border-gray-50/30 dark:border-zinc-600">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck">
                                                    <label class="form-check-label" for="ordercheck"></label>
                                                </div>
                                            </th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Invoice ID</th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Date</th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Billing Name</th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Amount</th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Status</th>
                                            <th
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Download Pdf</th>
                                            <th class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right"
                                                style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0131</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                10 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Connie Franco</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $142
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-600 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0130</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                09 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Paul Reynolds</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $130
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-600 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0129</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                08 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Ronald Patterson</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $123
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-yellow-500/20 text-yellow-500 inline-block font-medium">
                                                    Unpaid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0128</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                07 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Adella Perez</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $173
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0127</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                07 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Theresa Mayers</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $160
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0126</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                06 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Michael Wallace</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $150
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0125</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                05 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Oliver Gonzales</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $165
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-yellow-500/20 text-yellow-500 inline-block font-medium">
                                                    Pending</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0124</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                05 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                David Burke</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $170
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0123</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                04 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Willie Verner</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $140
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-yellow-500/20 text-yellow-500 inline-block font-medium">
                                                    Pending</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0122</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                03 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Felix Perry</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $155
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0121</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                02 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Virgil Kelley</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $165
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-green-500/20 text-green-500 inline-block font-medium">
                                                    Paid</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="mx-3 text-center lg:mx-0 form-check text-16 lg:text-left">
                                                    <input type="checkbox"
                                                        class="rounded cursor-pointer border-gray-50 dark:border-zinc-600 border-z form-check-input ring-0 focus:ring-1 focus:ring-blue-100 ring-offset-0 dark:bg-zinc-600 dark:checked:bg-blue-500 dark:checked:border-transparent dark:focus:ring-zinc-500/50"
                                                        id="ordercheck1">
                                                    <label class="form-check-label" for="ordercheck1"></label>
                                                </div>
                                            </td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <a href="javascript: void(0);"
                                                    class="font-bold text-gray-900 dark:text-gray-200">#MN0120</a> </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                02 Jul, 2020
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                Matthew Lawler</td>

                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                $170
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div
                                                    class="py-[1px] px-1.5 rounded text-xs bg-yellow-500/20 text-yellow-500 inline-block font-medium">
                                                    Pending</div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div>
                                                    <button
                                                        class="py-1 border-gray-50/30 dark:border-zinc-600 btn bg-gray-50/50 dark:bg-zinc-600 dark:text-zinc-50">
                                                        <i class="mr-2 bx bx-download"></i> Pdf</button>
                                                </div>
                                            </td>
                                            <td
                                                class="whitespace-nowrap p-3 border-b border-gray-50/30 dark:border-zinc-600 rtl:text-right">
                                                <div class="relative dropdown">
                                                    <button
                                                        class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenuButton1">
                                                        <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!left-auto ltr:!right-0 rtl:!right-auto rtl:!left-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Edit</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Print</a>
                                                        </li>
                                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 rtl:text-right"
                                                                href="#">Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('build/libs/flowbite/datepicker.min.js') }}"></script>

    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('build/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection
