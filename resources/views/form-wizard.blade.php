@extends('layouts.master')
@section('title')
    {{ __('Form Wizard') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Form Wizard" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Basic pills Wizard</h6>
                        </div>
                        <div class="card-body">

                            <div class="nav-tabs">
                                <ul
                                    class="flex flex-wrap w-full py-5 text-sm font-medium text-center text-gray-500 nav dark:text-gray-400">
                                    <li class="relative flex-grow nav-item ">
                                        <a href="#seller-details" class="nav-link active group" data-tw-toggle="tab"
                                            data-tw-target="seller-details">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                                                <i class="bx bx-list-ul text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                        <div
                                            class="after:content-[''] after:absolute after:w-[75%] after:h-[2px] after:bg-gray-50/50 ltr:after:left-[62%] rtl:after:right-[62%] after:top-[50%] sm:block hidden after:dark:bg-zinc-700">
                                        </div>
                                    </li>
                                    <li class="relative flex-grow nav-item">
                                        <a href="#company-document" class="nav-link group" data-tw-toggle="tab"
                                            data-tw-target="company-document">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                                <i class="bx bx-book-bookmark text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                        <div
                                            class="after:content-[''] after:absolute after:w-[75%] after:h-[2px] after:bg-gray-50/50 ltr:after:left-[62%] rtl:after:right-[62%] after:top-[50%] sm:block hidden after:dark:bg-zinc-700">
                                        </div>
                                    </li>
                                    <li class="flex-grow nav-item">
                                        <a href="#bank-detail" class="nav-link group" data-tw-toggle="tab"
                                            data-tw-target="bank-detail">
                                            <div class="bg-white border border-violet-50 inline-block h-14 w-14 rounded-full dark:bg-transparent dark:border-violet-500/30 group-[.active]:bg-violet-500/20"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                                <i class="bx bxs-bank text-22 leading-[2.5] text-violet-500"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="block tab-pane" id="seller-details">
                                        <div class="mt-8 text-center">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">First
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">Last
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Phone</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Email</label>
                                                        <input type="email"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Address</label>
                                                        <textarea
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);"
                                                    class="text-white border-transparent btn bg-violet-500">Next <i
                                                        class="align-middle bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="hidden tab-pane" id="company-document">
                                        <div class="mt-8 text-center">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">First
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">Last
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Phone</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Email</label>
                                                        <input type="email"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Address</label>
                                                        <textarea
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);"
                                                    class="text-white border-transparent btn bg-violet-500">Next <i
                                                        class="align-middle bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="hidden tab-pane" id="bank-detail">
                                        <div class="mt-8 text-center">
                                            <h5 class="text-gray-700 dark:text-gray-100">Seller Details</h5>
                                            <p class="text-gray-500 dark:text-zinc-100/60">Fill all information below</p>
                                        </div>
                                        <form class="mt-8">
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">First
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label class="font-bold text-gray-600 dark:text-gray-100">Last
                                                            name</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Phone</label>
                                                        <input type="text"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Phone No">
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Email</label>
                                                        <input type="email"
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12">
                                                    <div class="mb-4">
                                                        <label
                                                            class="font-bold text-gray-600 dark:text-gray-100">Address</label>
                                                        <textarea
                                                            class="block w-full mt-2 border-gray-100 rounded placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/80 dark:placeholder:text-zinc-100/80 focus:ring-2 focus:ring-offset-0 focus:ring-violet-500/30 focus:border-violet-200 py-1.5 "
                                                            rows="2" placeholder="Enter your address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="text-end">
                                            <li class="next"><a href="javascript: void(0);"
                                                    class="text-white border-transparent btn bg-violet-500">Next <i
                                                        class="align-middle bx bx-chevron-right ms-1"></i></a></li>
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
@section('scripts')
    <script src="{{ URL::asset('build/js/pages/nav&tabs.js') }}"></script>
@endsection
