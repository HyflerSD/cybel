@extends('layouts.master')
@section('title')
    {{ __('Pricing') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Pricing" pagetitle="Components" />


                <div class="grid grid-cols-1 gap-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 nav-tabs border-b-tabs">
                        <div class=" pb-0 md:py-0 border-b card-body border-gray-50 dark:border-zinc-600">
                            <div class="md:flex items-center justify-between ">
                                <h6 class="text-gray-600 text-15 dark:text-gray-100 whitespace-nowrap">Start your creative
                                    project right plans</h6>

                                <ul
                                    class="justify-end flex flex-wrap w-full text-sm font-medium text-center text-gray-500nav dark:border-gray-700 dark:text-gray-400">
                                    <li>
                                        <a href="javascript:void(0);" data-tw-toggle="tab"
                                            data-tw-target="underline-icon-home"
                                            class="inline-block p-4 text-violet-500  hover:border-gray-300">Monthly</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tw-toggle="tab"
                                            data-tw-target="underline-icon-Profile"
                                            class="inline-block p-4 text-violet-500 active ">Yearly</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 card-body">
                            <div id="tab-contents">
                                <div class="tab-pane" id="underline-icon-home">
                                    <div class="grid grid-cols-12 md:gap-4">
                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Starter</h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$29 <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 ">/
                                                                Month</span></h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Professional
                                                        </h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$49 <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 ">/
                                                                Month</span></h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="overflow-hidden rounded card-body bg-violet-500">
                                                    <div class="relative p-2">
                                                        <div
                                                            class="absolute top-0 w-48 p-1 font-medium text-center bg-white text-violet-500 ltr:rotate-45 rtl:-rotate-45 ltr:-right-20 rtl:-left-20">
                                                            <span>Featured</span>
                                                        </div>
                                                        <h5 class="text-base text-white">Enterprise</h5>
                                                        <h1 class="mt-3 text-white ">$79 <span class="text-base ">/
                                                                Month</span></h1>
                                                        <p class="mt-3 text-white/50 text-15 ">For small teams trying out
                                                            Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-white text-15"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="block transition-all duration-300 bg-white border-transparent shadow btn w-100 hover:bg-gray-50/50 shadow-white/30 dark:bg-zinc-700 dark:text-gray-50 dark:shadow-zinc-500">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6 xl:col-span-3">
                                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                                <div class="card-body">
                                                    <div class="p-2">
                                                        <h5 class="text-base text-gray-600 dark:text-gray-100">Unlimited
                                                        </h5>
                                                        <h1 class="mt-3 text-gray-600 dark:text-gray-100">$99 <span
                                                                class="text-base text-gray-500 dark:text-zinc-100/60 ">/
                                                                Month</span></h1>
                                                        <p class="mt-3 text-gray-500 dark:text-zinc-100/60 text-15 ">For
                                                            small teams trying out Minia for an unlimited
                                                            period of time</p>
                                                        <div class="pt-2 mt-4 text-muted">
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Verifide
                                                                work and
                                                                reviews</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Project
                                                                tracking
                                                            </p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Dedicated
                                                                Ac managers</p>
                                                            <p class="mb-4 text-gray-500 text-15 dark:text-zinc-100/60"><i
                                                                    class="align-middle mdi mdi-check-circle text-secondary text-18 ltr:mr-2 rtl:ml-2"></i>Unlimited
                                                                proposals</p>
                                                        </div>
                                                        <div class="pt-2 mt-5 text-center">
                                                            <a href=""
                                                                class="order-2 w-full btn border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white focus:ring focus:ring-violet-200">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="hidden tab-pane" id="underline-icon-Profile">
                                    <p class="mb-0 dark:text-gray-300">
                                        denim you probably haven't heard of them jean shorts Austin.
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                        cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                        butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                        qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                        iphone. Seitan aliquip quis cardigan american apparel, butcher
                                        voluptate nisi qui.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mb-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-50 dark:border-zinc-600">
                            <h6 class="text-gray-600 text-15 mb-2 dark:text-gray-100">Project Plans</h6>
                            <p class="stext-13 text-gray-500">Call to action pricing table is really crucial to your for
                                your business website. Make your bids stand-out with amazing options.</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-6 text-gray-600 text-13 dark:text-zink-200">
                                Example of Vertical nav tabs
                            </div>
                            <div class="grid grid-cols-12 nav-tabs tab-pill flex vertical-tab gap-6">
                                <div class="col-span-12 md:col-span-3">
                                    <ul class="w-full text-sm text-gray-800">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="underline-home"
                                                class="dark:text-white block p-5 rounded active border border-gray-50 dark:bg-transparent dark:border-zinc-600">
                                                <div class="flex items-center">
                                                    <i
                                                        class="mb-0 text-2xl bx bx-check-circle ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                    <div class="flex-1">
                                                        <h2 class="text-gray-600 dark:text-gray-100">$29 <span
                                                                class="text-gray-500 text-muted text-15 dark:text-zinc-100/60">/
                                                                Month Plans</span></h2>
                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100/60">For small teams
                                                            trying out Minia for an unlimited period of time</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="my-4 md:my-6">
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="underline-profile"
                                                class="dark:text-white block p-5 rounded dark:border-zinc-600 hover:text-blue-700 border border-gray-50 dark:bg-transparent">
                                                <div class="flex items-center">
                                                    <i
                                                        class="mb-0 text-2xl bx bx-check-circle ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                    <div class="flex-1">
                                                        <h2 class="text-gray-600 dark:text-gray-100">$79 <span
                                                                class="text-gray-500 text-muted text-15 dark:text-zinc-100/60">/
                                                                Month Plans</span></h2>
                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100/60">For small teams
                                                            trying out Minia for an unlimited period of time</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="underline-message"
                                                class="dark:text-white block p-5 rounded hover:text-blue-700 border border-gray-50 dark:bg-transparent dark:border-zinc-600">
                                                <div class="flex items-center">
                                                    <i
                                                        class="mb-0 text-2xl bx bx-check-circle ltr:mr-4 rtl:ml-4 text-violet-500"></i>
                                                    <div class="flex-1">
                                                        <h2 class="text-gray-600 dark:text-gray-100">$79 <span
                                                                class="text-gray-500 text-muted text-15 dark:text-zinc-100/60">/
                                                                Month Plans</span></h2>
                                                        <p class="mb-0 text-gray-500 dark:text-zinc-100/60">For small teams
                                                            trying out Minia for an unlimited period of time</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-span-12 md:col-span-9">
                                    <div class="gap-4">
                                        <div class="block tab-pane" id="underline-home">
                                            <table
                                                class="w-full border border-collapse border-gray-50 dark:border-zinc-600">
                                                <tbody>
                                                    <tr class="text-center border-b border-gray-50 dark:border-zinc-600">
                                                        <td class="border-r border-gray-50 dark:border-zinc-600"></td>
                                                        <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                            <div class="py-3">
                                                                <h6 class="text-gray-600 dark:text-gray-100">1 Month</h6>
                                                            </div>
                                                        </td>
                                                        <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                            <div class="py-3">
                                                                <h6 class="text-gray-600 dark:text-gray-100">3 Month</h6>
                                                            </div>
                                                        </td>
                                                        <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                            <div class="py-3">
                                                                <h6 class="text-gray-600 dark:text-gray-100">6 Month</h6>
                                                            </div>
                                                        </td>
                                                        <td class="border-r border-gray-50 dark:border-zinc-600 w-[20%]">
                                                            <div class="py-3">
                                                                <h6 class="text-gray-600 dark:text-gray-100">1 Year</h6>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Users</th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">1</td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">3</td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">5</td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">7</td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Storage
                                                        </th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">5 GB
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">50 GB
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">20 GB
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">40 GB
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Domain
                                                        </th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-red-400 mdi mdi-close-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">1</td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">2</td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">4</td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Hidden
                                                            Fees</th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">No
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">Yes
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">No
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">No
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Support
                                                        </th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="text-center text-gray-600 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <th scope="row"
                                                            class="border-r border-gray-50 dark:border-zinc-600">Update
                                                        </th>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 border-r border-gray-50 dark:border-zinc-600">
                                                            <div>
                                                                <i class="text-xl text-green-600 mdi mdi-check-circle"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
