@extends('layouts.master')
@section('title')
    {{ __('Cards') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Cards" pagetitle="Components" />

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="text-gray-500 text-13 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make
                                    up the bulk of the card's content.</p>
                                <div class="mt-6">
                                    <a href=""
                                        class="btn border-transparent bg-violet-500 text-white py-2.5 shadow-md shadow-violet-200 dark:shadow-zinc-600">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="text-gray-600 card-text dark:text-zinc-100">Some quick example text to build on
                                    the card title and make
                                    up the bulk of the card's content.</p>
                            </div>
                            <div class="flex justify-center">
                                <ul class="w-full text-gray-900 bg-white rounded-none dark:bg-zinc-800">
                                    <li
                                        class="w-full px-6 py-3 text-gray-600 border-t border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                        Cras justo odio</li>
                                    <li
                                        class="w-full px-6 py-3 text-gray-600 border-t border-b border-gray-50 dark:border-zinc-600 dark:text-zinc-100">
                                        Dapibus ac facilisis in</li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <a href="javascript: void(0);" class="card-link text-violet-500">Card link</a>
                                <a href="javascript: void(0);" class="ml-5 card-link text-violet-500">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="text-gray-500 text-13 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make
                                    up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="font-semibold text-gray-500 card-subtitle text-14">Support card subtitle</p>
                            </div>
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="">
                            <div class="card-body">
                                <p class="text-gray-500 text-13 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make
                                    up the bulk of the card's content.</p>

                                <div class="mt-4">
                                    <a href="javascript: void(0);" class="card-link text-violet-500">Card link</a>
                                    <a href="javascript: void(0);" class="ml-5 card-link text-violet-500">Another link</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Special title treatment</h6>
                                <p class="text-gray-600 card-text dark:text-zinc-100">With supporting text below as a
                                    natural lead-in to additional
                                    content.</p>
                                <div class="mt-4">
                                    <a href="javascript: void(0);"
                                        class="block text-center text-white border-transparent shadow btn bg-violet-500 shadow-violet-300 dark:shadow-zinc-600">Go
                                        somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Special title treatment</h6>
                                <p class="text-gray-600 card-text dark:text-zinc-100">With supporting text below as a
                                    natural lead-in to additional
                                    content.</p>
                                <div class="mt-4">
                                    <a href="javascript: void(0);"
                                        class="block text-center text-white border-transparent shadow btn bg-violet-500 shadow-violet-300 dark:shadow-zinc-600">Go
                                        somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="p-5 border-b card-header border-gray-50 dark:border-zinc-600">
                                <h5 class="text-gray-600 uppercase dark:text-gray-100">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Special title treatment</h6>
                                <p class="text-gray-600 card-text dark:text-zinc-100">With supporting text below as a
                                    natural lead-in to additional
                                    content.</p>
                                <div class="mt-6">
                                    <a href="javascript: void(0);"
                                        class="text-center text-white border-transparent shadow btn bg-violet-500 shadow-violet-300 dark:shadow-zinc-600">Go
                                        somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="p-5 border-b card-header border-gray-50 dark:border-zinc-600">
                                <p class="text-sm text-gray-600 dark:text-gray-100">Quote</p>
                            </div>
                            <div class="card-body">
                                <p class="text-gray-600 card-text dark:text-zinc-100">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="mt-3 text-xs text-gray-500 blockquote-footer dark:text-zinc-100">
                                    — &nbsp; Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="p-5 border-b card-header border-gray-50 dark:border-zinc-600">
                                <h6 class="font-normal text-gray-600 uppercase dark:text-gray-100">Featured</h6>
                            </div>
                            <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Special title treatment</h6>
                                <p class="text-gray-600 card-text dark:text-zinc-100">With supporting text below as a
                                    natural lead-in to additional
                                    content.</p>
                                <div class="mt-6">
                                    <a href="javascript: void(0);"
                                        class="text-center text-white border-transparent shadow btn bg-violet-500 shadow-violet-300 dark:shadow-zinc-600">Go
                                        somewhere</a>
                                </div>
                            </div>
                            <div class="p-5 card-footer">
                                <p class="text-gray-500 dark:text-zinc-100">2 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="text-gray-500 text-13 dark:text-zinc-100">This is a wider card with supporting
                                    text below as a natural lead-in to additional content. This content is a little bit
                                    longer.</p>
                                <p class="mt-5 text-xs text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="text-gray-500 text-13 dark:text-zinc-100">This is a wider card with supporting
                                    text below as a natural lead-in to additional content. This content is a little bit
                                    longer.</p>
                                <p class="mt-5 text-xs text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</p>
                            </div>
                            <img class="rounded rounded-t-none" src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="relative card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded rounded-t-none" src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="">
                            <div class="absolute inset-0 p-5 bg-overlay">
                                <h6 class="text-white card-title dark:text-gray-100">Card title</h6>
                                <p class="mt-2 text-white dark:text-zinc-100">This is a wider card with supporting text
                                    below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                                <p class="mt-4 text-xs text-white dark:text-zinc-100">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="grid items-center grid-cols-12">
                                <div class="col-span-4">
                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                        class="rounded rounded-r-none">
                                </div>
                                <div class="col-span-8">
                                    <div class="card-body">
                                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                        <p class="mt-2 text-gray-600 card-text dark:text-zinc-100">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <div class="mt-4">
                                            <p class="text-xs text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="grid items-center grid-cols-12">
                                <div class="col-span-8">
                                    <div class="card-body">
                                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                        <p class="mt-2 text-gray-600 card-text dark:text-zinc-100">This is a wider card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <div class="mt-4">
                                            <p class="text-xs text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                        class="rounded rounded-l-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 rounded card bg-violet-500 border-violet-500">
                            <h5 class="mb-3 text-white text-17">Primary Card</h5>
                            <p class="text-white/60">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 bg-green-600 border-green-600 rounded card">
                            <h5 class="mb-3 text-white text-17">Success Card</h5>
                            <p class="text-white/60">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 rounded card bg-sky-500 border-sky-500">
                            <h5 class="mb-3 text-white text-17">Info Card</h5>
                            <p class="text-white/60">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 bg-yellow-500 border-yellow-500 rounded card">
                            <h5 class="mb-3 text-white text-17"><i class="mr-3 mdi mdi-alert-outline"></i> Warning Card
                            </h5>
                            <p class="text-white/60">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 bg-red-400 border-red-400 rounded card">
                            <h5 class="mb-3 text-white text-17"><i class="mr-3 mdi mdi-block-helper"></i>Danger Card</h5>
                            <p class="text-white/60">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="p-5 rounded card bg-zinc-800 border-zinc-800">
                            <h5 class="mb-3 text-white text-17"><i class="mr-3 mdi mdi-alert-circle-outline"></i> Dark
                                Card</h5>
                            <p class="text-white/90">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <!-- start grid -->
                <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="card border-violet-500 dark:bg-zinc-800">
                            <div class="p-5 border-b border-violet-500">
                                <h5 class="text-violet-500 text-17"> Primary outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="border-red-400 card dark:bg-zinc-800">
                            <div class="p-5 border-b border-red-400">
                                <h5 class="text-red-400 text-17">Danger outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="border-green-500 card dark:bg-zinc-800">
                            <div class="p-5 border-b border-green-500">
                                <h5 class="text-green-500 text-17">Success outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="border-yellow-500 card dark:bg-zinc-800">
                            <div class="p-5 border-b border-yellow-500">
                                <h5 class="text-yellow-500 text-17">Warning outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="card border-sky-500 dark:bg-zinc-800">
                            <div class="p-5 border-b border-sky-500">
                                <h5 class="text-sky-500 text-17">Info outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="border-gray-500 card dark:bg-zinc-800">
                            <div class="p-5 border-b border-gray-500">
                                <h5 class="text-gray-500 text-17">Secondary outline Card</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">card title</h6>
                                <p class="mt-2 text-gray-700 dark:text-zinc-100">Some quick example text to build on the
                                    card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end grid -->

                <div class="card-group">
                    <!-- start grid -->
                    <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                        <div class="col-span-12">
                            <h4 class="mt-2 mb-5 text-gray-700">Card Groups</h4>
                        </div>
                    </div>
                    <!-- end grid -->

                    <!-- start grid -->
                    <div class="grid grid-cols-1 xl:grid-cols-3">
                        <div class="mb-5 card xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This is a longer card with
                                    supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="mb-5 card xl:border-l-0 xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This card has supporting text
                                    below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                        <div class="mb-5 card xl:border-l-0 xl:mb-0 dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This is a wider card with
                                    supporting text below as a natural lead-in to additional content. This card has even
                                    longer content than the first to show that equal height action.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end grid -->
                </div>

                <div class="mb-5 card-group">
                    <!-- start grid -->
                    <div class="grid grid-cols-1 lg:gap-x-6 lg:grid-cols-12">
                        <div class="col-span-12">
                            <h4 class="mt-2 mb-5 text-gray-700 dark:text-gray-100">Cards Masonry</h4>
                        </div>
                    </div>
                    <!-- end grid -->

                    <!-- start grid -->
                    <div class="gap-6 columns-1 xl:columns-3">

                        <!-- 1 -->
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title that wraps to a new
                                    line</h6>
                                <p class="text-gray-700 card-text dark:text-zinc-100">This is a longer card with supporting
                                    text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="mt-5 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="border-l-4 border-gray-100 rounded dark:border-gray-700">
                                    <div class="py-2.5 px-5">
                                        <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">Lorem ipsum dolor sit
                                            amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <p class="card-text">
                                            <small class="text-gray-500 dark:text-gray-100"> — &nbsp; Someone famous in
                                                Source Title</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="mt-5 card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This card has supporting text
                                    below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="p-4 mt-5 text-center border-opacity-50 rounded card bg-violet-500 border-violet-500 ">
                            <p class="text-white dark:text-zinc-100">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Integer posuere.</p>
                            <p class="mt-3 card-text">
                                <small class="text-gray-100"> — &nbsp; Someone famous in Source Title</small>
                            </p>
                        </div>

                        <div
                            class="p-4 mt-5 mb-5 border border-opacity-50 rounded card xl:mb-10 dark:bg-zinc-800 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                            <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This card has a regular title and
                                short paragraphy of text below it.

                            </p>
                            <p class="card-text">
                                <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                            </p>
                        </div>

                        <!-- 3 -->
                        <div class="mt-5 card dark:bg-zinc-800 dark:border-zinc-600">
                            <img class="rounded" src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="">
                        </div>

                        <!-- 6 -->
                        <div class="mt-5 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This is a longer card with
                                    supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="mt-5 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Card title</h6>
                                <p class="mb-4 text-gray-700 card-text dark:text-zinc-100">This is a longer card with
                                    supporting text below as
                                    a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text">
                                    <small class="text-gray-500 dark:text-zinc-100">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>


                    </div>


                    <!-- end grid -->
                </div>


                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
