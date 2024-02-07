@extends('layouts.master')
@section('title')
    {{ __('Blog List') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Blog List" pagetitle="Apps" />

                <div class="grid grid-cols-1 ">
                    <div class="grid items-stretch grid-cols-12 mb-4">
                        <div class="self-center col-span-12 lg:col-span-6">
                            <h5 class="text-gray-600 text-15 dark:text-gray-100">Blog List <span
                                    class="ml-2 font-normal text-gray-500 dark:text-zinc-100">(535)</span></h5>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 justify-end">
                                <div>
                                    <ul class="flex flex-wrap ">
                                        <li class="nav-item ">
                                            <a class="px-4 py-2 text-white rounded nav-link active bg-violet-500 text-16"
                                                href="{{ url('apps-blog-list') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="List"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="px-4 py-2 text-gray-600 nav-link text-16 dark:text-gray-100"
                                                href="{{ url('apps-blog-grid') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="#"
                                        class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i
                                            class="bx bx-plus me-1"></i> Add New</a>
                                </div>
                                <div>
                                    <div class="relative dropstart text-end ">
                                        <a class="py-1 text-gray-500 border-transparent shadow-none btn text-16 dropdown-toggle dark:text-gray-100"
                                            href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1"
                                            aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <ul class="absolute z-50 hidden float-left w-40 py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max -right-10 top-6 bg-clip-padding dark:bg-zinc-800"
                                            aria-labelledby="dropdownMenu1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:hover:bg-zinc-600/50 dark:text-gray-100"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:hover:bg-zinc-600/50 dark:text-gray-100"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:hover:bg-zinc-600/50 dark:text-gray-100"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="w-full img-fluid">
                                <div class="card-body">
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100 ">16 June, 2022</p>
                                    <h5><a href="#" class="font-medium text-gray-900 dark:text-gray-100">Coffee with
                                            friends</a></h5>
                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100mt-1 text-15 dark:text-zinc-100">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text,a Latin professor
                                        at Hampden-Sydney College in Virginia.</p>
                                    <div class="mt-3">
                                        <a href="#" class="align-middle text-15 text-violet-500">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="w-full img-fluid">
                                <div class="card-body">
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">22 May, 2022</p>
                                    <h5><a href="#" class="font-medium text-gray-900 dark:text-gray-100">Working day
                                            with our new ideas</a></h5>
                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100mt-1 text-15 dark:text-zinc-100">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour.</p>
                                    <div class="mt-3">
                                        <a href="#" class="align-middle text-15 text-violet-500">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="" class="w-full img-fluid">
                                <div class="card-body">
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100 ">12 june, 2022</p>
                                    <h5><a href="#" class="font-medium text-gray-900 dark:text-gray-100">Project
                                            discussion with team</a></h5>
                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100mt-1 text-15 dark:text-zinc-100">
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                        up one of the more obscure Latin words.</p>
                                    <div class="mt-3">
                                        <a href="#" class="align-middle text-15 text-violet-500">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <div class="search-box">
                                        <h5 class="mb-3 font-medium text-gray-700 dark:text-gray-100">Search</h5>
                                        <div class="relative px-2">
                                            <input type="text"
                                                class="py-1.5 w-full pl-10 text-gray-700 border-transparent rounded bg-gray-50/80 placeholder:text-13 placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600"
                                                placeholder="Search...">
                                            <i
                                                class="absolute text-lg text-gray-600 mdi mdi-magnify search-icon left-5 top-2"></i>
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Categories</h5>
                                        <ul class="px-2 font-medium list-unstyled">
                                            <li><a href="#"
                                                    class="block pb-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Design<span
                                                        class="bg-violet-500/40 text-violet-500 ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 rounded-full">02</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Development
                                                    <span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left ms-1 text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">04</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Business<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">12</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Project<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">08</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block pt-4 pb-0 text-gray-700 dark:text-gray-100 dark:border-zinc-600">Travel<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">10</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Upcoming Post</h5>
                                        <div>
                                            <div class="px-2 pb-4 border-b border-gray-50">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Beautiful Day
                                                            with Friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:00 AM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="px-2 py-4 border-b border-gray-50">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Drawing a
                                                            sketch</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:05 AM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="px-2 py-4 border-b border-gray-50">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Project
                                                            discussion with team</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:10 PM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="px-2">
                                                <div class="flex items-center pt-4">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Coffee with
                                                            friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:30 PM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <h5 class="font-medium text-gray-700 dark:text-gray-100">Popular Post</h5>
                                        <div class="list-group list-group-flush">
                                            <a href="javascript: void(0);"
                                                class="px-2 pt-0 pb-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Beautiful Day
                                                            with Friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">10 Apr, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Drawing a
                                                            sketch</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">24 May, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Coffee with
                                                            friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">15 June, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Tag Clouds</h5>
                                        <div class="flex flex-wrap gap-2 px-2">
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Design</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Development</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Wordpress</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">HTML</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Project</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Business</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Travel</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Photography</span></a>
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Instagram Post</h5>
                                        <div class="flex flex-wrap gap-2">
                                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-3 font-medium text-gray-700 dark:text-gray-100">Email Newsletter</h5>
                                        <div class="">
                                            <div class="inline-flex w-full py-0 mb-0">
                                                <input type="text"
                                                    class="w-full border-gray-100 rounded placeholder:text-13 ltr:rounded-r-none rtl:rounded-l-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-gray-200 bg-[#f8f9fa] focus:ring focus:ring-violet-500/20 focus:border focus:border-violet-100"
                                                    placeholder="Enter Email">
                                                <button
                                                    class="px-4 py-0 border border-gray-100 btn bg-[#f8f9fa] ltr:border-l-0 rtl:border-r-0 ltr:rounded-l-none rtl:rounded-r-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-200">
                                                    <i class="mdi mdi-send-outline"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="flex justify-center">
                            <nav aria-label="Page navigation example border">
                                <ul class="flex list-style-none">
                                    <li class="border border-gray-100 ltr:rounded-l rtl:rounded-r dark:border-zinc-500 dark:bg-zinc-800"
                                        disabled>
                                        <a class="relative block px-3 py-2 text-gray-100 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100"
                                            href="#"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li
                                        class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">1</a></li>
                                    <li
                                        class="transition-all duration-300 border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-white transition-all duration-300 border-0 outline-none page-link group-hover bg-violet-500 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">2</a>
                                    </li>
                                    <li class="border border-l-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">3</a></li>
                                    <li class="border border-l-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                            class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">4</a></li>
                                    <li
                                        class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#">5</a></li>
                                    <li
                                        class="border border-gray-100 ltr:rounded-r rtl:rounded-l dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                            href="#"><i class="mdi mdi-chevron-right"></i></a></li>

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
