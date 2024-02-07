@extends('layouts.master')
@section('title')
    {{ __('Dropdown') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Dropdown" pagetitle="Components" />

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Simple Dropdown</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-2">
                                <div class="col-span-12 md:col-span-6">
                                    <!-- Dropdown button -->
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle shadow-md shadow-gray-100 dark:shadow-zinc-600 border bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropdown button <i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown button -->
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <!-- Dropdown button -->
                                    <div class="relative inline-block dropdown">
                                        <a href="#"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                            "
                                            id="dropdownButton2" data-bs-toggle="dropdown">Dropdown Link<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></a>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownButton2">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown button -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Variant</h6>
                        </div>
                        <div class="card-body">
                            <!-- Dropdown button -->
                            <div class="flex flex-wrap gap-2">
                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 border-violet-500 text-white font-medium leading-tight hover:bg-violet-600 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600
                                        "
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown">Primary <i
                                            class="mdi mdi-chevron-down "></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 dark:focus:ring-gray-500/30 focus:bg-gray-600
                                        "
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i
                                            class="mdi mdi-chevron-down "></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-green-100 dark:shadow-zinc-600 bg-green-500 border-green-500 text-white font-medium leading-tight hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30
                                        "
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i
                                            class="mdi mdi-chevron-down"></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 border-sky-500 text-white font-medium leading-tight hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30
                                        "
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown">Info <i
                                            class="mdi mdi-chevron-down "></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-yellow-100 dark:shadow-zinc-600 bg-yellow-400 border-yellow-400 text-white font-medium leading-tight hover:bg-yellow-600 focus:ring-2 focus:ring-yellow-100 focus:bg-yellow-600 dark:focus:ring-yellow-500/30
                                        "
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown">Warning <i
                                            class="mdi mdi-chevron-down "></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="relative dropdown">
                                    <button type="button"
                                        class="btn py-2.5 dropdown-toggle border shadow-md shadow-red-100 dark:shadow-zinc-600 bg-red-400 border-red-400 text-white font-medium leading-tight hover:bg-red-600 focus:ring focus:ring-red-200 focus:bg-red-600 dark:focus:ring-red-500/30
                                        "
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown">Warning <i
                                            class="mdi mdi-chevron-down "></i></button>

                                    <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                        aria-labelledby="dropdownMenuButton3">
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown button -->
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Split Button Dropdowns</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle border-transparent shadow-md btn shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 hover:bg-violet-600 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600"><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle bg-gray-500 border-transparent shadow-md btn shadow-gray-100 dark:shadow-zinc-600 hover:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600"><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle bg-green-500 border-transparent shadow-md btn shadow-green-100 dark:shadow-zinc-600 hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30 "><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle border-transparent shadow-md btn bg-sky-500 shadow-sky-100 dark:shadow-zinc-600 hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30 "><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle bg-yellow-500 border-transparent shadow-md btn shadow-yellow-100 dark:shadow-zinc-600 hover:bg-yellow-600 focus:ring focus:ring-yellow-200 focus:bg-yellow-600 dark:focus:ring-yellow-500/30 "><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle bg-red-500 border-transparent shadow-md btn shadow-red-100 dark:shadow-zinc-600 hover:bg-red-600 focus:ring focus:ring-red-200 focus:bg-red-600 dark:focus:ring-red-500/30 "><span
                                                class="px-3">Primary</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Sizing</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="py-2 text-lg font-medium leading-tight text-white border rounded shadow-md btn dropdown-toggle shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 border-violet-500 hover:bg-violet-500 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/30 "
                                            id="dropdownM1" data-bs-toggle="dropdown">Large button<i
                                                class="text-xl mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownM1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown button -->

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-lg font-medium text-white align-middle bg-gray-500 rounded shadow-md btn shadow-gray-100 dark:shadow-zinc-600 hover:bg-gray-500 focus:ring focus:ring-gray-100 dark:border-transparent dark:focus:ring-gray-500/30 "><span
                                                class="px-3">Large button</span>
                                            <i class="bx bx-chevron-down bg-white bg-opacity-20 w-10 h-full text-16 py-3.5 align-middle dropdown-toggle focus-visible:border-3 focus-visible:border-gray-500/10"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="py-2 text-xs font-medium leading-tight text-white border rounded shadow-md btn dropdown-toggle shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 border-sky-500 hover:bg-sky-500 focus:ring focus:ring-sky-100 dark:focus:ring-sky-500/30 "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Large button<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 text-xs font-medium text-white align-middle bg-gray-500 rounded shadow-md btn shadow-gray-100 dark:shadow-zinc-600 focus:ring focus:ring-gray-100 dark:border-transparent dark:focus:ring-gray-500/30 "><span
                                                class="px-3">Large button</span>
                                            <i class="w-10 h-full py-2 align-middle bg-white bx bx-chevron-down bg-opacity-20 text-16 dropdown-toggle focus-visible:border-3 focus-visible:border-gray-500/10"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 mt-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">With dividers</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropdown button <i
                                                class="mdi mdi-chevron-down "></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Active Menu</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 focus:bg-gray-600
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Option <i
                                                class="mdi mdi-chevron-down "></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Edit</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Duplicate</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Archive</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Move</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Share</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Add to favorites</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Menu Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-violet-100 dark:shadow-zinc-600 bg-violet-500 border-violet-500 text-white font-medium leading-tight hover:bg-violet-500 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/30 focus:bg-violet-600
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Header <i
                                                class="mdi mdi-chevron-down "></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <div class="px-4 py-1 dropdown-header">
                                                <h6 class="text-gray-500 text-13 text-truncate mn-0 dark:text-gray-100">
                                                    Welcome Jessie!</h6>
                                            </div>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <hr class="dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-green-100 dark:shadow-zinc-600 bg-green-500 border-green-500 text-white font-medium leading-tight hover:bg-green-600 focus:ring focus:ring-green-200 focus:bg-green-600 dark:focus:ring-green-500/30 
                                            focus:outline-none transition duration-150 ease-in-out"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown">Text <i
                                                class="mdi mdi-chevron-down "></i></button>

                                        <div class="absolute z-50 hidden float-left py-2 m-0 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu w-60 bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton3">
                                            <div class="p-3 text-gray-600 dark:text-zinc-100">
                                                <p> Some example text that's free-flowing within the dropdown menu.</p>
                                                <p class="mt-2">And this is more example text.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border bg-gray-50 shadow-md shadow-gray-100 dark:shadow-zinc-600 border-gray-50 text-gray-600 font-medium leading-tight hover:bg-gray-50/50 focus:ring focus:ring-gray-50/50 focus:bg-gray-100 dark:focus:ring-gray-500/30 
                                            focus:outline-none transition duration-150 ease-in-out "
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown">Success <i
                                                class="mdi mdi-chevron-down "></i></button>

                                        <div class="absolute z-50 hidden float-left w-64 py-2 m-0 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton3">
                                            <form class="p-4" autocomplete="off">
                                                <div class="mb-2">
                                                    <label class="form-label text-14 dark:text-gray-100"
                                                        for="exampleDropdownFormEmail">Email address</label>
                                                    <input type="email"
                                                        class="w-full mt-2 border-gray-300 rounded form-control dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder:text-zinc-100"
                                                        id="exampleDropdownFormEmail" placeholder="email@example.com">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label text-14 dark:text-gray-100"
                                                        for="exampleDropdownFormPassword">Password</label>
                                                    <input type="password"
                                                        class="w-full mt-2 border-gray-300 rounded form-control dark:bg-zinc-800 dark:border-zinc-600 dark:placeholder:text-zinc-100"
                                                        id="exampleDropdownFormEmail" placeholder="Password">
                                                </div>
                                                <div class="mb-2">
                                                    <div class="flex items-center form-check">
                                                        <input type="checkbox"
                                                            class="rounded form-check-input dark:text-zinc-100 dark:bg-zinc-800 dark:checked:bg-violet-500 focus:ring-0 focus:ring-offset-0"
                                                            id="rememberdropdownCheck">
                                                        <label class="ml-2 text-sm form-check-label "
                                                            for="rememberdropdownCheck">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button
                                                        class="text-white shadow-lg btn bg-violet-500 shadow-violet-200 dark:shadow-zinc-600 dark:border-zinc-600"
                                                        type="submit">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Menu Alignment</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Right-aligned menu example
                                            <i class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute right-0 left-auto z-50 hidden py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Left-aligned but right
                                            aligned when large screen<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute right-0 left-auto z-50 hidden py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max lg:left-0 lg:right-auto bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Right-aligned but left
                                            aligned when large screen<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max lg:right-0 lg:left-auto bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">With icons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="py-2 font-medium leading-tight text-white bg-gray-500 border border-gray-500 shadow-md btn dropdown-toggle shadow-gray-100 dark:shadow-zinc-600 hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20 "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"><i
                                                class='text-lg align-middle bx bx-hive ltr:mr-2 rtl:ml-2'></i>Option With
                                            icons <i class="mdi mdi-chevron-down "></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 mt-1 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu w-44 bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-edit ltr:mr-2 rtl:ml-2'></i>Edit</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-duplicate ltr:mr-2 rtl:ml-2'></i>
                                                    Duplicate</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-box ltr:mr-2 rtl:ml-2'></i>Archive</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-right-arrow-circle ltr:mr-2 rtl:ml-2'></i>Move</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-user-plus ltr:mr-2 rtl:ml-2'></i>Share</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-heart ltr:mr-2 rtl:ml-2'></i>Add
                                                    to favorites</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-1 text-sm font-medium text-gray-500 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#"><i
                                                        class='text-lg align-middle bx bxs-trash ltr:mr-2 rtl:ml-2'></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Auto Close Behavior</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Default dropdown <i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-left min-w-full py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-500 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            data-tw-auto-close="outside">Clickable outside<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-right min-w-full py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="btn py-2.5 dropdown-toggle border shadow-md shadow-gray-100 dark:shadow-zinc-600 bg-gray-500 border-gray-500 text-white font-medium leading-tight hover:bg-gray-600 focus:bg-gray-600 focus:ring focus:ring-gray-200 focus:ring-gray-500/20
                                            "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            data-tw-auto-close="inside">Clickable inside<i
                                                class="mdi mdi-chevron-down ltr:ml-2 rtl:mr-2"></i></button>

                                        <ul class="absolute z-50 hidden float-right min-w-full py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="javascript:void(0)">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Dropup Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3">
                                    <div class="relative dropup">
                                        <button type="button"
                                            class="py-3 font-medium leading-tight text-white shadow-md btn dropdown-toggle borde shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 border-sky-500 hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30 "
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropup <i
                                                class="ml-1 mdi mdi-chevron-up"></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropup">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle border-transparent shadow-md btn shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30"><span
                                                class="px-3">Dropup</span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-up bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Dropstart Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-3">
                                    <div class="relative dropstart">
                                        <button type="button"
                                            class="py-3 font-medium leading-tight text-white transition duration-150 ease-in-out shadow-md btn dropdown-toggle borde shadow-sky-100 bg-sky-500 border-sky-500 dark:shadow-zinc-600 hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30 focus:outline-none"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"><i
                                                class="mr-1 mdi mdi-chevron-left"></i> Dropstart</button>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropstart">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle border-transparent shadow-md btn shadow-sky-100 dark:shadow-zinc-600 bg-sky-500 focus:ring focus:ring-gray-50 dark:focus:ring-sky-500/30">
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-left bg-opacity-20 text-16 dropdown-toggle"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                            <span class="px-3">Dropstart</span>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                            <hr class="my-1 border-gray-50 dark:border-zinc-600">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Dropend Variation</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3">
                                    <div class="relative dropend">
                                        <button type="button"
                                            class="py-3 font-medium leading-tight text-white transition duration-150 ease-in-out shadow-md btn dropdown-toggle borde shadow-sky-100 bg-sky-500 border-sky-500 dark:shadow-zinc-600 hover:bg-sky-600 focus:ring focus:ring-sky-200 focus:bg-sky-600 dark:focus:ring-sky-500/30 focus:outline-none"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown">Dropend <i
                                                class="ml-1 mdi mdi-chevron-right"></i></button>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="relative dropend">
                                        <button type="button"
                                            class="flex items-center p-0 text-white align-middle border-transparent shadow-md btn bg-sky-500 shadow-sky-100 dark:shadow-zinc-600 focus:ring focus:ring-gray-50 dark:focus:ring-sky-500/40 "><span
                                                class="px-3">Dropend </span>
                                            <i class="w-10 h-full py-3 align-middle bg-white bx bx-chevron-right bg-opacity-20 text-16 dropdown-toggle focus-visible:border-3 focus-visible:border-sky-500/10"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
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
