@extends('layouts.master')
@section('title')
    {{ __('Blog Grid') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Blog Grid" pagetitle="Apps" />

                <div class="grid grid-cols-1">
                    <div class="grid items-stretch grid-cols-12 mb-4">
                        <div class="self-center col-span-12 lg:col-span-6">
                            <h5 class="text-gray-600 text-15 dark:text-gray-100">Blog List <span
                                    class="ml-2 font-normal text-gray-500 dark:text-zinc-100">(535)</span></h5>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                                <div>
                                    <ul class="flex flex-wrap ">
                                        <li class="nav-item ">
                                            <a class="px-4 py-2 text-gray-600 nav-link text-16 dark:text-gray-100"
                                                href="{{ url('apps-blog-list') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="List"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="px-4 py-2 text-white rounded nav-link active bg-violet-500 text-16"
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
                                        <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max top-6 bg-clip-padding dark:bg-zinc-800"
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
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">10 Apr, 2022</p>
                                    <h5><a href="#"
                                            class="font-medium text-gray-700 dark:text-gray-100 text-[17.5px]">Beautiful Day
                                            with Friends</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">Contrary to popular
                                        belief, Lorem Ipsum is not simply random text,a Latin professor at Hampden-Sydney
                                        College in Virginia.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">24 May, 2022</p>
                                    <h5><a href="#"
                                            class="font-medium text-gray-700 dark:text-gray-100 text-[17.5px]">Drawing a
                                            sketch</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">It is a long established
                                        fact that a reader will be distracted by the readable content of a page when looking
                                        at its layout.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">12 june, 2022</p>
                                    <h5><a href="#"
                                            class="font-medium text-gray-700 dark:text-gray-100 text-[17.5px]">Project
                                            discussion with team</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">Richard McClintock, a
                                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                        obscure Latin words.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">10 July, 2022</p>
                                    <h5><a href="#"
                                            class="font-medium text-gray-700 dark:text-gray-100 text-[17.5px]">Morning with
                                            Photoshoot</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">It is a long established
                                        fact that a reader will be distracted by the readable content of a page when looking
                                        at its layout.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">16 June, 2022</p>
                                    <h5><a href="#" class="font-medium text-gray-700 dark:text-gray-100">Coffee with
                                            friends</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">Contrary to popular
                                        belief, Lorem Ipsum is not simply random text,a Latin professor at Hampden-Sydney
                                        College in Virginia.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                            <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                                <div>
                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <p class="mb-2 text-gray-400 dark:text-zinc-100">22 May, 2022</p>
                                    <h5><a href="#" class="font-medium text-gray-700 dark:text-gray-100">Working day
                                            with our new ideas</a></h5>
                                    <p class="mt-2 mb-0 text-gray-700 text-15 dark:text-zinc-100">There are many variations
                                        of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form, by injected humour.</p>
                                    <div class="mt-4">
                                        <a href="#" class="align-middle text-violet-500 text-15">Read more <i
                                                class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-6">
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
