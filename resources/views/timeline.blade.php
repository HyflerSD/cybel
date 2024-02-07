@extends('layouts.master')
@section('title')
    {{ __('Timeline') }}
@endsection
@section('content')

<div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
    <div class="page-content dark:bg-zinc-700">        
        <div class="container-fluid px-[0.625rem]">
            
            <!-- page title -->
            <x-page-title title="Timeline" pagetitle="Components" />

                <!-- start grid -->
                <div class="grid grid-cols-12 gap-6 mb-5">
                    <!-- start col -->
                    <div class="col-span-12 ">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 dark:text-gray-100 text-15">Bootstrap Timeline</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 xl:col-span-10 xl:col-start-2 ">
                                        <div class="reltive ">
                                            <div class="text-center">
                                                <div class="items-center w-20 h-20 rounded-full bg-violet-500 md:mx-auto">
                                                    <p class="text-white uppercase py-[30px]">Start</p>
                                                </div>
                                            </div>

                                            <div class="relative pt-16">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="relative ltr:text-right rtl:text-left mt-9">
                                                            <i class="text-2xl bx bx-briefcase-alt-2 text-violet-500 md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 right-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:pr-6 md:mr-10">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event One</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">Perspitis unde omnis it voluptatem
                                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                                        quae ab illo inventore veritatis et quasi
                                                                        architecto beatae explicabo.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="order-2 col-span-11 md:col-span-6 md:order-1">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 md:mr-8 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 left-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event two</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">At vero eos dignissimos ducimus quos dolores chooses to enjoy pleasure that has no annoying.</p>
                                                                    <div class="flex flex-wrap gap-2 mt-3 md:justify-end">
                                                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="" class="rounded img-fluid w-14">
                                                                        <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="rounded img-fluid w-14">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                    <div class="order-1 col-span-1 md:col-span-6 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="text-2xl bx bx-user-pin text-violet-500 md:text-3xl ltr:mr-10 rtl:ml-10 ltr:md:ml-5 rtl:md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="relative ltr:text-right rtl:text-left mt-9">
                                                            <i class="text-2xl bx bx-bar-chart-square text-violet-500 md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2 md:mr-5"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 right-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">28</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">Des</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:pr-6 md:mr-10">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Three</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">Vivamus ultrices massa turna interdum eu. Pellentesque habitant morbi tristique eget justo sit amet est varius mollis et quis nisi. Suspendisse potenti. senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="order-2 col-span-11 md:col-span-6 md:order-1">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 md:mr-8 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 left-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Four</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">Printing and typesetting industry. been the industry'scrambled it make a type specimen book.</p>
                                                                    <button type="button" class="mt-4 text-white border-transparent rounded-full shadow-md btn bg-violet-500 shadow-violet-500/40">See
                                                                        more detail
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] md:hidden absolute h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                    <div class="order-1 col-span-1 md:col-span-6 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="ltr:mr-10 rtl:ml-10 text-2xl bx bx-camera text-violet-500 md:text-3xl md:ml-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-1 md:col-span-6">
                                                        <div class="relative ltr:text-right rtl:text-left mt-9">
                                                            <i class="text-2xl bx bx-pie-chart-alt text-violet-500 md:text-3xl ltr:mr-10 rtl:ml-10 md:mr-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 hidden md:block ltr:md:-right-2 rtl:md:-left-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-11 md:col-span-6">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 right-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">23</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">Des</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:pr-6 md:mr-10">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event Five</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">Excepturi, obcaecati, quisquam id
                                                                        molestias eaque asperiores voluptatibus cupiditate error
                                                                        assumenda delectus odit
                                                                        similique earum voluptatem
                                                                        Odit, itaque, deserunt corporis vero ipsum nisi repellat ... <a href="#" class="text-violet-500">Read more</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="relative pb-16">
                                                <div class="grid grid-cols-12">
                                                    <div class="order-2 col-span-11 md:col-span-6 md:order-1">
                                                        <div class="relative m-4 ltr:ml-8 rtl:mr-8 border rounded-lg border-gray-50 md:mr-8 dark:border-zinc-600">
                                                            <div class="h-20 mx-5 mt-5 text-center rounded-md md:absolute md:mx-0 md:mt-0 left-5 -top-3 w-14 bg-violet-500" style="clip-path: polygon(0% 0%, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                                                                <div class="p-2">
                                                                    <h3 class="text-white">25</h3>
                                                                    <p class="mb-0 leading-tight text-white-50 text-white/60">June</p>
                                                                </div>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="md:ml-10 md:pl-6 md:text-right">
                                                                    <h3 class="text-lg text-gray-600 dark:text-gray-100">Timeline Event End</h3>
                                                                    <p class="pt-1 mt-2 mb-0 text-gray-500 dark:text-zinc-100/80">Suspendisse tempor porttitor elit non maximus. Sed suscipit, purus in convallis condimentum, risus ex pellentesque sapien, vel tempor arcu dolor ut est. Nam ac felis id mauris fermentum nisl pharetra auctor.</p>
                                                                </div>
                                                            </div>
                                                            <div class="after:content-[''] absolute h-4 w-4 rotate-45 border-r border-t border-gray-50 rounded-sm bg-white top-7 -right-2 md:block hidden dark:bg-zinc-800 dark:border-zinc-600"></div>
                                                            <div class="after:content-[''] absolute md:hidden h-4 w-4 rotate-45 ltr:border-l rtl:border-r ltr:border-b rtl:border-t border-gray-50 rounded-sm bg-white top-7 ltr:-left-2 rtl:-right-2 dark:bg-zinc-800 dark:border-zinc-600 "></div>
                                                        </div>
                                                    </div>
                                                    <div class="order-1 col-span-1 md:col-span-6 md:order-2">
                                                        <div class="relative mt-9">
                                                            <i class="ltr:mr-10 rtl:ml-10 text-2xl bx bx-home-alt text-violet-500 md:text-3xl md:ml-5"></i>
                                                            <div class="after:content-[''] absolute h-4 w-4 rounded-full bg-violet-500 top-2 ltr:-left-2 rtl:-right-2 hidden md:block "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="after:content-[''] absolute ltr:border-l rtl:border-r border-violet-500 h-full top-0 rtl:right-10 ltr:left-10 md:ltr:left-[50%]  md:rtl:right-[50%]"></div>
                                            </div>

                                            <div class="text-center">
                                                <div class="items-center w-20 h-20 rounded-full bg-violet-500 md:mx-auto">
                                                    <p class="text-white uppercase py-[30px]">End</p>
                                                </div>
                                            </div>

                                            <div class="relative md:text-center">
                                                <div class="relative inline-block mt-5 lg:mt-8 border rounded-lg border-gray-50 dark:border-zinc-600">
                                                    <div class="p-5">
                                                        <h3 class="text-lg text-gray-600 dark:text-gray-100">Launched our company on 21 June 2021</h3>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100/80">Pellentesque sapien ut est.</p>
                                                    </div>
                                                    <div class="after:content-[''] absolute h-4 w-4 rotate-45 -translate-x-2 border-l border-t border-gray-50 rounded-sm bg-white -top-2 ltr:left-10 rtl:right-6 md:left-[50%] dark:bg-zinc-800 dark:border-zinc-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end grid -->


                <!-- footer -->
@include('layouts.footer')
            </div>
        </div>
    </div>
@endsection