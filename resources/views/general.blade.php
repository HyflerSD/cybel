@extends('layouts.master')
@section('title')
    {{ __('General') }}
@endsection
@section('content')
    <!-- start grid -->

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="General" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Badges</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Default</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="badge font-medium bg-violet-500 text-white text-11 px-1.5 py-[1.5px] rounded">Primary</span>
                                        <span
                                            class="badge font-medium bg-green-600 text-white text-11 px-1.5 py-[1.5px] rounded">Success</span>
                                        <span
                                            class="badge font-medium bg-blue-400 text-white text-11 px-1.5 py-[1.5px] rounded">Info</span>
                                        <span
                                            class="badge font-medium bg-yellow-400 text-white text-11 px-1.5 py-[1.5px] rounded">Warning</span>
                                        <span
                                            class="badge font-medium bg-red-400 text-white text-11 px-1.5 py-[1.5px] rounded">Danger</span>
                                        <span
                                            class="badge font-medium bg-gray-900 text-white text-11 px-1.5 py-[1.5px] rounded">Dark</span>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Soft Badge</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="badge font-medium bg-violet-50 text-violet-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-violet-500/20">Primary</span>
                                        <span
                                            class="badge font-medium bg-green-50 text-green-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-green-500/20">Success</span>
                                        <span
                                            class="badge font-medium bg-blue-50 text-blue-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-blue-500/20">Info</span>
                                        <span
                                            class="badge font-medium bg-yellow-50 text-yellow-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-yellow-500/20">Warning</span>
                                        <span
                                            class="badge font-medium bg-red-50 text-red-500 text-11 px-1.5 py-[1.5px] rounded dark:bg-red-500/20">Danger</span>
                                        <span
                                            class="badge font-medium bg-gray-200 text-gray-900 text-11 px-1.5 py-[1.5px] rounded dark:bg-gray-500/20">Dark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rounded ( Pill ) Badges</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Default</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="badge font-medium rounded-full bg-violet-500 text-white text-11 px-1.5 py-[1.5px] ">Primary</span>
                                        <span
                                            class="badge font-medium rounded-full bg-green-600 text-white text-11 px-1.5 py-[1.5px] ">Success</span>
                                        <span
                                            class="badge font-medium rounded-full bg-blue-400 text-white text-11 px-1.5 py-[1.5px] ">Info</span>
                                        <span
                                            class="badge font-medium rounded-full bg-yellow-400 text-white text-11 px-1.5 py-[1.5px] ">Warning</span>
                                        <span
                                            class="badge font-medium rounded-full bg-red-400 text-white text-11 px-1.5 py-[1.5px] ">Danger</span>
                                        <span
                                            class="badge font-medium rounded-full bg-gray-900 text-white text-11 px-1.5 py-[1.5px] ">Dark</span>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Soft Badge</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="badge font-medium rounded-full bg-violet-50 text-violet-500 text-11 px-1.5 py-[1.5px] dark:bg-violet-500/20">Primary</span>
                                        <span
                                            class="badge font-medium rounded-full bg-green-50 text-green-500 text-11 px-1.5 py-[1.5px] dark:bg-green-500/20">Success</span>
                                        <span
                                            class="badge font-medium rounded-full bg-blue-50 text-blue-500 text-11 px-1.5 py-[1.5px] dark:bg-blue-500/20">Info</span>
                                        <span
                                            class="badge font-medium rounded-full bg-yellow-50 text-yellow-500 text-11 px-1.5 py-[1.5px] dark:bg-yellow-500/20">Warning</span>
                                        <span
                                            class="badge font-medium rounded-full bg-red-50 text-red-500 text-11 px-1.5 py-[1.5px] dark:bg-red-500/20">Danger</span>
                                        <span
                                            class="badge font-medium rounded-full bg-gray-200 text-gray-900 text-11 px-1.5 py-[1.5px] dark:bg-gray-500/20">Dark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Badge with dot</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Default</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="px-2 py-1 text-xs font-medium rounded badge bg-violet-50 text-violet-500"><span
                                                class="inline-block p-1 mr-1 rounded-full bg-violet-500"></span>
                                            Primary</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-green-500 rounded badge bg-green-50"><span
                                                class="inline-block p-1 mr-1 bg-green-500 rounded-full"></span>
                                            Success</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium rounded badge bg-blue-50 text-sky-500"><span
                                                class="inline-block p-1 mr-1 rounded-full bg-sky-500"></span> Info</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-yellow-500 rounded badge bg-yellow-50"><span
                                                class="inline-block p-1 mr-1 bg-yellow-500 rounded-full"></span>
                                            Warning</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-red-500 rounded badge bg-red-50"><span
                                                class="inline-block p-1 mr-1 bg-red-500 rounded-full"></span> Danger</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-gray-900 rounded badge bg-gray-50"><span
                                                class="inline-block p-1 mr-1 bg-gray-800 rounded-full"></span> Dark</span>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Rounded Badge</h6>
                                    <div class="flex flex-wrap gap-2 ">
                                        <span
                                            class="px-2 py-1 text-xs font-medium rounded-full badge bg-violet-50 text-violet-500"><span
                                                class="inline-block p-1 mr-1 rounded-full bg-violet-500"></span>
                                            Primary</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-green-500 rounded-full badge bg-green-50"><span
                                                class="inline-block p-1 mr-1 bg-green-500 rounded-full"></span>
                                            Success</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium rounded-full badge bg-blue-50 text-sky-500"><span
                                                class="inline-block p-1 mr-1 rounded-full bg-sky-500"></span> Info</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-yellow-500 rounded-full badge bg-yellow-50"><span
                                                class="inline-block p-1 mr-1 bg-yellow-500 rounded-full"></span>
                                            Warning</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-red-500 rounded-full badge bg-red-50"><span
                                                class="inline-block p-1 mr-1 bg-red-500 rounded-full"></span> Danger</span>
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-gray-900 rounded-full badge bg-gray-50"><span
                                                class="inline-block p-1 mr-1 bg-gray-800 rounded-full"></span> Dark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rounded badges with size</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Badges with dot</h6>
                                    <div class="space-2">
                                        <span
                                            class="inline-block font-medium bg-violet-500 text-white text-11 px-1.5 py-0.5 rounded ltr:ml-0 rtl:ml-2"><span
                                                class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span>
                                            Small</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white rounded bg-violet-500"><span
                                                class="inline-block w-1 h-1 p-1 bg-white rounded-full"></span> Large</span>
                                        <span
                                            class="inline-block font-medium bg-green-500 text-white text-11 px-1.5 py-0.5 rounded"><span
                                                class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span>
                                            Small</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-green-500 rounded"><span
                                                class="inline-block w-1 h-1 p-1 bg-white rounded-full"></span> Large</span>
                                        <span
                                            class="inline-block font-medium bg-yellow-500 text-white text-11 px-1.5 py-0.5 rounded-full"><span
                                                class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span>
                                            Small</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-yellow-500 rounded-full"><span
                                                class="inline-block w-1 h-1 p-1 bg-white rounded-full"></span> Large</span>
                                        <span
                                            class="inline-block font-medium bg-red-500 text-white text-11 px-1.5 py-0.5 rounded-full"><span
                                                class="p-0.5 rounded-full bg-white h-1 w-1 inline-block align-middle"></span>
                                            Small</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-red-500 rounded-full"><span
                                                class="inline-block w-1 h-1 p-1 bg-white rounded-full"></span> Large</span>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <h6 class="mb-2 text-gray-700 text-14 dark:text-gray-100">Badge with remove button</h6>
                                    <div class="space-2">
                                        <span
                                            class="inline-block font-medium bg-violet-500 text-white text-11 px-1.5 py-0.5 rounded ltr:ml-0 rtl:ml-2">Small
                                            <a href=""><i class="align-middle mdi mdi-close"></i></a></span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white rounded bg-violet-500">
                                            Large <a href=""><i
                                                    class="align-middle mdi mdi-close text-13"></i></a></span>
                                        <span
                                            class="inline-block font-medium bg-green-500 text-white text-11 px-1.5 py-0.5 rounded">
                                            Small <a href=""><i class="align-middle mdi mdi-close"></i></a></span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                            Large <a href=""><i
                                                    class="align-middle mdi mdi-close text-13"></i></a></span>
                                        <span
                                            class="inline-block font-medium bg-yellow-500 text-white text-11 px-1.5 py-0.5 rounded-full">
                                            Small <a href=""><i class="align-middle mdi mdi-close"></i></a></span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-yellow-500 rounded-full">
                                            Large <a href=""><i
                                                    class="align-middle mdi mdi-close text-13"></i></a></span>
                                        <span
                                            class="inline-block font-medium bg-red-500 text-white text-11 px-1.5 py-0.5 rounded-full">
                                            Small <a href=""><i class="align-middle mdi mdi-close"></i></a></span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-medium text-white bg-red-500 rounded-full">
                                            Large <a href=""><i
                                                    class="align-middle mdi mdi-close text-13"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Badges in Buttons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <button
                                        class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/20">Notifications
                                        <span class="px-1 ml-1 text-xs bg-green-500 rounded">4</span></button>
                                    <button
                                        class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-100 dark:focus:ring-green-500/20">Messages
                                        <span class="px-1 ml-1 text-xs bg-red-400 rounded ">2</span></button>
                                    <button
                                        class="text-gray-500 border border-gray-400 btn hover:bg-gray-500 hover:text-white focus:bg-gray-500 focus:text-white focus:ring focus:ring-gray-100 dark:focus:ring-gray-500/20">Draft
                                        <span class="px-1 ml-1 text-xs text-white bg-green-500 rounded">2</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Badges Position Examples</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-4">
                                    <button
                                        class="relative text-white btn bg-violet-500 border-violet-500 focus:bg-violet-600 focus:ring focus:ring-violet-200 dark:focus:ring-violet-500/20">Mails
                                        <span
                                            class="absolute px-1 ml-1 text-xs bg-green-500 rounded-full -top-2 ltr:-right-3 rtl:-left-3">+99</span>
                                    </button>
                                    <button
                                        class="relative text-gray-700 btn bg-gray-50 dark:text-gray-100 border-gray-50 hover:bg-gray-50/50 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-transparent dark:focus:ring-0">Alerts
                                        <span
                                            class="px-1 bg-red-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring ring-white -top-1 ltr:-right-1 rtl:-left-1"></span>
                                    </button>
                                    <button
                                        class="relative inline-block w-8 h-8 text-white rounded bg-violet-500 border-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-50 dark:focus:ring-violet-500/20"><i
                                            class="bx bxs-envelope text-15 leading-[2.2]"></i>
                                        <span
                                            class="px-1 bg-red-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring-2 ring-white -top-1 ltr:-right-1 rtl:-left-1"></span>
                                    </button>
                                    <button
                                        class="relative inline-block w-8 h-8 text-center text-gray-700 transition-all duration-200 border rounded-full bg-gray-50 border-gray-50 dark:text-gray-100 hover:bg-gray-50/50 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-zinc-700 dark:focus:ring-gray-500/20"><i
                                            class="bx bxs-bell leading-[2.2]"></i></button>
                                    <button
                                        class="relative inline-block w-8 h-8 text-gray-700 transition-all duration-200 border rounded-full bg-gray-50 border-gray-50 dark:text-gray-100 hover:bg-gray-50/50 focus:bg-gray-100 focus:ring focus:ring-gray-50/50 dark:bg-zinc-700 dark:border-zinc-700 dark:focus:ring-gray-500/20"><i
                                            class="bx bx-menu leading-[2.2]"></i>
                                        <span
                                            class="px-1 bg-green-500 text-xs rounded-full ml-1 absolute w-2.5 h-2.5 ring-2 ring-white -top-1 ltr:-right-0 rtl:-left-0"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Pagination - Default Example</h6>
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation example border">
                                    <ul class="flex list-style-none">
                                        <li
                                            class="border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                            <a class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600 hover:bg-gray-50/50"
                                                href="#">Previous</a>
                                        </li>
                                        <li class="border border-violet-500 bg-violet-100"><a
                                                class="relative block px-4 py-2 transition-all duration-300 bg-transparent outline-none page-link text-violet-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-900 dark:hover:text-gray-100 dark:hover:bg-zinc-600"
                                                href="#">1</a></li>
                                        <li class="border border-l-0 rtl:border-l dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">2</a></li>
                                        <li class="border border-l-0 border-r-0 rtl:border-l dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">3</a></li>
                                        <li class="border border-r-0 dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">...</a></li>
                                        <li class="border border-r-0 dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">8</a></li>
                                        <li class="border border-r-0 dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">9</a></li>
                                        <li class="border border-r-0 rtl:border-l-0 dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">10</a></li>
                                        <li class="border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Pagination with icons</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-3">
                                    <nav aria-label="Page navigation example border">
                                        <ul class="flex list-style-none">
                                            <li
                                                class="border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="relative block px-4 py-2 text-gray-300 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600 hover:bg-gray-50/50"
                                                    href="#"><i class="mdi mdi-chevron-double-left"></i></a>
                                            </li>
                                            <li class="border dark:border-zinc-600"><a
                                                    class="relative block px-4 py-2 transition-all duration-300 bg-transparent outline-none page-link text-violet-500 hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-violet-500 dark:hover:bg-zinc-600"
                                                    href="#">1</a></li>
                                            <li class="border border-l-0 border-r-0 dark:border-zinc-600"><a
                                                    class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#">2</a></li>
                                            <li
                                                class="border border-l-0 ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#">3</a></li>
                                            <li class="border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                    class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#"><i class="mdi mdi-chevron-double-right"></i></a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example border">
                                        <ul class="flex list-style-none">
                                            <li
                                                class="border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="relative block px-4 py-2 text-gray-300 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none hover:bg-gray-50/50 dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="border dark:border-zinc-600"><a
                                                    class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#">1</a></li>
                                            <li
                                                class="border border-l-0 bg-violet-500 border-violet-500 dark:border-zinc-600">
                                                <a class="relative block px-4 py-2 text-white transition-all duration-300 bg-transparent border-0 outline-none page-link hover:bg-violet-600 ring ring-violet-200 dark:ring-violet-500/30"
                                                    href="#">2</a></li>
                                            <li
                                                class="border border-l-0 ltr:border-r-0 rtl:border-l-0 dark:border-zinc-600">
                                                <a class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#">3</a></li>
                                            <li class="border ltr:rounded-r rtl:rounded-l dark:border-zinc-600"><a
                                                    class="relative block px-4 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 focus:shadow-none dark:text-zinc-100 dark:hover:bg-zinc-600"
                                                    href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Centered page numbers</h6>
                            </div>
                            <div class="card-body">
                                <div
                                    class="flex w-full border-t border-gray-50 place-content-between dark:border-zinc-600">
                                    <div class="mt-3">
                                        <a class="relative text-gray-500 align-middle transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 dark:text-zinc-100"
                                            href="#"><i class="mr-2 align-middle mdi mdi-arrow-left "></i>
                                            Previous</a>
                                    </div>
                                    <div>
                                        <nav>
                                            <ul class="flex text-gray-400 list-style-none">
                                                <li
                                                    class="pt-3 transition-all duration-300 border-t-2 border-transparent hover:border-gray-200 dark:hover:border-zinc-500">
                                                    <a class="relative block px-4 page-link" href="#">1</a></li>
                                                <li class="pt-3 border-t-2 border-violet-500 text-violet-500"><a
                                                        class="relative block px-4 page-link" href="#">2</a></li>
                                                <li
                                                    class="pt-3 transition-all duration-300 border-t-2 border-transparent hover:border-gray-200 dark:hover:border-zinc-500">
                                                    <a class="relative block px-4 page-link" href="#">...</a></li>
                                                <li
                                                    class="pt-3 transition-all duration-300 border-t-2 border-transparent hover:border-gray-200 dark:hover:border-zinc-500">
                                                    <a class="relative block px-4 page-link" href="#">7</a></li>
                                                <li
                                                    class="pt-3 transition-all duration-300 border-t-2 border-transparent hover:border-gray-200 dark:hover:border-zinc-500">
                                                    <a class="relative block px-4 page-link" href="#">8</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3">
                                        <a class="relative text-gray-500 align-middle transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 dark:text-zinc-100"
                                            href="#"> Next <i
                                                class="ml-2 align-middle mdi mdi-arrow-right "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Simple card footer</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap items-center gap-3 place-content-between">
                                    <div class="font-medium text-gray-500 dark:text-zinc-100">
                                        <p>Showing <strong class="text-gray-600 dark:text-zinc-50">1</strong> to <strong
                                                class="text-gray-600 dark:text-zinc-50">10</strong> of <strong
                                                class="text-gray-600 dark:text-zinc-50">20</strong> result</p>
                                    </div>
                                    <div class="flex flex-wrap gap-3">
                                        <button
                                            class="text-gray-500 border-gray-100 btn hover:bg-gray-50/50 hover:text-gray-700 dark:text-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Previous</button>
                                        <button
                                            class="text-gray-500 border-gray-100 btn hover:bg-gray-50/50 hover:text-gray-700 dark:text-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Sizing</h6>
                            </div>
                            <div class="card-body">
                                <nav class="block">
                                    <ul class="flex list-style-none">
                                        <li class=" disabled"><a
                                                class="relative block px-6 py-3 text-xl text-gray-500 transition-all duration-300 bg-transparent border-0 rounded-md outline-none pointer-events-none page-link focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                                class="relative block px-3 sm:px-6 py-3 text-xl text-gray-800 transition-all duration-300 bg-transparent border-0 rounded-md outline-none page-link hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">1</a></li>
                                        <li class=" active"><a
                                                class="relative block px-3 sm:px-6 py-3 text-xl text-white transition-all duration-300 border-0 rounded-md shadow-md outline-none page-link bg-violet-500 hover:text-white hover:bg-violet-600 focus:shadow-md"
                                                href="#">2</a></li>
                                        <li class=""><a
                                                class="relative block px-3 sm:px-6 py-3 text-xl text-gray-800 transition-all duration-300 bg-transparent border-0 rounded-md outline-none page-link hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">3</a></li>
                                        <li class=""><a
                                                class="relative block px-3 sm:px-6 py-3 text-xl text-gray-800 transition-all duration-300 bg-transparent border-0 rounded-md outline-none page-link hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">Next</a></li>
                                    </ul>
                                    <ul class="flex mt-5 list-style-none">
                                        <li class=" disabled"><a
                                                class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                                class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">1</a></li>
                                        <li class=" active"><a
                                                class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-violet-500 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-violet-600 shadow-md focus:shadow-md"
                                                href="#">2</a></li>
                                        <li class=""><a
                                                class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">3</a></li>
                                        <li class=""><a
                                                class="page-link text-sm px-2.5 py-1.5 relative block border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Shape</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <ul class="flex list-style-none">
                                        <li class=" disabled"><a
                                                class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                        <li class=""><a
                                                class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">1</a></li>
                                        <li class=" active"><a
                                                class="page-link relative block py-1.5 px-3 border-0 bg-violet-500 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-violet-600 shadow-md focus:shadow-md"
                                                href="#">2</a></li>
                                        <li class=""><a
                                                class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">3</a></li>
                                        <li class=""><a
                                                class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-50/50 focus:shadow-none dark:text-gray-100 dark:hover:bg-zinc-700"
                                                href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Border Spinner</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-violet-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-gray-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-green-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-sky-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-yellow-500 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-red-400 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                    <div
                                        class="spinner-border animate-spin inline-block w-8 h-8 border-[3px] border-l-transparent border-gray-700 rounded-full">
                                        <span class="hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Ping</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-8">
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-violet-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-gray-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-green-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-sky-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-yellow-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-red-500/75"></span>
                                    </span>
                                    <span class="relative w-5 h-5">
                                        <span
                                            class="inline-flex w-full h-full rounded-full animate-ping bg-gray-800/75 dark:bg-zinc-700"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Pulse</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 rounded-full bg-violet-500"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 bg-gray-500 rounded-full"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 bg-green-500 rounded-full"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 rounded-full bg-sky-500"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-full"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 bg-red-500 rounded-full"></div>
                                    </div>
                                    <div class="animate-pulse">
                                        <div class="w-8 h-8 bg-gray-800 rounded-full dark:bg-zinc-700"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Bounce</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 rounded-full animate-bounce bg-violet-500"></div>
                                    <div class="w-8 h-8 bg-gray-500 rounded-full animate-bounce"></div>
                                    <div class="w-8 h-8 bg-green-500 rounded-full animate-bounce"></div>
                                    <div class="w-8 h-8 rounded-full animate-bounce bg-sky-500"></div>
                                    <div class="w-8 h-8 bg-yellow-500 rounded-full animate-bounce"></div>
                                    <div class="w-8 h-8 bg-red-500 rounded-full animate-bounce"></div>
                                    <div class="w-8 h-8 bg-gray-800 rounded-full animate-bounce dark:bg-zinc-700"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Animation example</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <button type="button"
                                        class="btn border-violet-500 bg-violet-500 text-white relative py-2.5">
                                        <span
                                            class="spinner-border animate-spin inline-block w-5 h-5 border-[2px] border-l-transparent border-white rounded-full ltr:mr-2 rtl:ml-2 align-middle">
                                            <span class="hidden">Loading...</span>
                                        </span>
                                        Processing...
                                    </button>
                                    <div class="relative">
                                        <button type="button"
                                            class="btn bg-gray-50 border-gray-50 dark:bg-zinc-700 dark:text-zinc-100 dark:border-zinc-600">Transition</button>
                                        <div class="absolute top-0 ltr:right-0 rtl:left-0">
                                            <span class="flex h-2.5 w-2.5 relative">
                                                <span
                                                    class="absolute inline-flex w-full h-full rounded-full opacity-50 animate-ping bg-sky-400"></span>
                                                <span
                                                    class="relative inline-flex rounded-full h-2.5 w-2.5 bg-sky-500"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="w-10 h-10 text-center bg-gray-800 border border-gray-800 rounded-full shadow animate-pulse dark:bg-zinc-600">
                                            <i class="mdi mdi-alert-outline text-lg text-white leading-[2.2]"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="w-10 h-10 text-center bg-red-500 rounded-full animate-bounce">
                                            <i class="text-xl leading-loose text-white mdi mdi-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--
                    <div class="absolute p-4 bg-white border rounded-md popover fade show w-80" role="tooltip" id="popover869150" data-popper-placement="top">
                        <div class="popover-arrow border-8 border-r-transparent border-b-transparent absolute -top-2 left-[48%] rotate-45"></div>
                        <div class="popover-body">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                    </div> -->

                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
