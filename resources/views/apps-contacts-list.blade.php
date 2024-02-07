@extends('layouts.master')
@section('title')
    {{ __('User List') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="User List" pagetitle="Apps" />

                <div class="grid grid-cols-1 ">
                    <div class="grid items-stretch grid-cols-12">
                        <div class="self-center col-span-12 lg:col-span-6">
                            <h5 class="text-gray-800 text-15 dark:text-gray-100">Contact List <span
                                    class="ml-2 font-normal text-gray-500 dark:text-zinc-100">(834)</span></h5>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                                <div>
                                    <ul class="flex flex-wrap ">
                                        <li class="nav-item">
                                            <a class="px-4 py-2 text-white rounded nav-link active bg-violet-500 text-16"
                                                href="{{ url('apps-contacts-list') }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Grid"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="px-4 py-2 text-gray-800 nav-link text-16 dark:text-gray-100"
                                                href="{{ url('apps-contacts-grid') }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="List"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="#"
                                        class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i
                                            class="bx bx-plus me-1"></i> Add New</a>
                                </div>
                                <div>
                                    <div class="relative dropdown text-center">
                                        <a href="#!" class="text-gray-800 border-0 btn dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                            <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex flex-wrap items-center">
                            <div>
                                <label for="countries_multiple" class="text-gray-800 dark:text-gray-100">Show
                                    <select id="countries"
                                        class="py-0.5 w-16 inline-block text-11 bg-white border border-gray-100 text-gray-900 rounded p-2.5 focus:ring-1 focus:ring-violet-50 dark:focus:ring-zinc-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100">
                                        <option selected>10</option>
                                        <option value="US">20</option>
                                        <option value="CA">30</option>
                                        <option value="FR">40</option>
                                        <option value="DE">50</option>
                                    </select>
                                    entries</label>
                            </div>
                            <div class="mt-4 ltr:md:ml-auto rtl:md:mr-auto md:mt-0">
                                <label class="text-gray-100 dar">Search:
                                    <input type="search"
                                        class="py-0.5 px-1 w-40 rounded border-gray-100 ml-2 dark:bg-zinc-700/50 dark:border-zinc-600"
                                        placeholder="" aria-controls="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-5 overflow-x-auto">
                        <table class="w-full">
                            <thead class="border-b cursor-pointer border-gray-50 dark:border-zinc-600">
                                <tr class="text-gray-800 dark:text-gray-100">
                                    <th class="relative p-4 text-start dark:text-gray-100">
                                        <input type="checkbox" value=""
                                            class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                    <th class="relative p-4 text-start dark:text-gray-100">Name
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                    <th class="relative p-4 text-start dark:text-gray-100">Position
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                    <th class="relative p-4 text-start dark:text-gray-100">Email
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                    <th class="relative p-4 text-start dark:text-gray-100">Tags
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                    <th class="relative p-4 w-28 text-start dark:text-gray-100">Action
                                        <div
                                            class="after:content-['↓'] absolute top-4 text-gray-200 text-15 ltr:right-1 rtl:left-1">
                                        </div>
                                        <div
                                            class="before:content-['↑'] absolute top-4 text-gray-200 text-15 ltr:right-3 rtl:left-3">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100">Phyllis Gatlin</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">UI/UX Designer</td>
                                    <td class="p-4 dark:text-zinc-50">phyllisgatlin@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Photoshop</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            illustrator</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100">James Nix</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Frontend Developer</td>
                                    <td class="p-4 dark:text-zinc-50">jamesnix@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Html</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Css</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            2 + more</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100">Darlene Smith</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Backend Developer</td>
                                    <td class="p-4 dark:text-zinc-50">darlenesmith@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Php</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Java</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Python</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 ltr:mr-2 rtl:ml-2">
                                            <i class="text-2xl leading-snug text-gray-100 bx bxs-user-circle"></i>
                                        </div>
                                        <a href="#" class="text-gray-800 dark:text-gray-100">William Swift</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Full Stack Developer</td>
                                    <td class="p-4 dark:text-zinc-50">williamswift@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Ruby</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Php</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            2 + more</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 ltr:mr-2 rtl:ml-2">
                                            <i class="text-2xl leading-snug text-gray-100 bx bxs-user-circle"></i>
                                        </div>
                                        <a href="#" class="text-gray-800 dark:text-gray-100">Kevin West</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Frontend Developer</td>
                                    <td class="p-4 dark:text-zinc-50">kevinwest@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Html</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Css</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            2 + more</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100"> Tommy Hayes</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">UI/UX Designer</td>
                                    <td class="p-4 dark:text-zinc-50">tommyhayes@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Photoshop</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            illustrator</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100"> Diana Owens</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Graphic Designer</td>
                                    <td class="p-4 dark:text-zinc-50">dianaowens@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Photoshop</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            illustrator</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100"> Paul Sanchez</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Angular Developer</td>
                                    <td class="p-4 dark:text-zinc-50">paulsanchez@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Php</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Javascript</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100"> Peter Dryer</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Web Designer</td>
                                    <td class="p-4 dark:text-zinc-50">peterdryer@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Html</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Css</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            2 + more</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-800 border-b border-gray-50 dark:border-zinc-600">
                                    <td>
                                        <div class="p-4">
                                            <input type="checkbox" value=""
                                                class="w-4 h-4 border-gray-100 rounded ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">
                                        </div>
                                    </td>
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2">
                                        <a href="#" class="text-gray-800 dark:text-gray-100">Gerald Moyer</a>
                                    </td>
                                    <td class="p-4 dark:text-zinc-50">Backend Developer</td>
                                    <td class="p-4 dark:text-zinc-50">geraldmoyer@minia.com</td>
                                    <td class="flex flex-wrap gap-1 p-4">
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Php</div>
                                        <div
                                            class="text-11 bg-violet-500/40 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">
                                            Javascript</div>
                                    </td>
                                    <td class="p-4">
                                        <div class="relative dropdown text-center">
                                            <a href="#!" class="p-0 text-gray-800 border-0 btn dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-16 bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Another action</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-800 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right"
                                                        href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex items-center mt-4 mb-16 place-content-between">
                        <div class="mt-4 mb-2">
                            <p class="text-gray-800 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>
                        </div>
                        <div class="flex mt-2.5">
                            <nav aria-label="Page navigation example border">
                                <ul class="flex list-style-none">
                                    <li class="border border-gray-100 rounded-l dark:border-zinc-500 dark:bg-zinc-800"
                                        disabled>
                                        <a class="relative block px-3 py-2 text-gray-400 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100"
                                            href="#">Previous</a>
                                    </li>
                                    <li
                                        class="transition-all duration-300 border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-white transition-all duration-300 border-0 outline-none page-link group-hover bg-violet-500 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">1</a>
                                    </li>
                                    <li
                                        class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">2</a></li>
                                    <li class="border border-gray-100 rounded-l dark:border-zinc-500 dark:bg-zinc-800"
                                        disabled>
                                        <a class="relative block px-3 py-2 text-gray-100 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100"
                                            href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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
