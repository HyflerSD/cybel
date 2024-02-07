@extends('layouts.master')
@section('title')
    {{ __('Utilities') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Utilities" pagetitle="Components" />

                <div class="grid lg:grid-cols-3 gap-x-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">All sides borders</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="p-12 border border-gray-200 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-2 border-gray-200 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-4 border-gray-200 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-8 border-gray-200 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">All sides borders</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="p-12 border-t-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-r-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-b-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-l-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Horizontal and vertical sides borders
                            </h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="p-12 border-x-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                            <div class="p-12 border-y-2 border-violet-500 bg-gray-50/50 dark:bg-zinc-700"></div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-x-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Changing the opacity</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="p-12 border-2 border-violet-500/5"></div>
                            <div class="p-12 border-2 border-violet-500/25"></div>
                            <div class="p-12 border-2 border-violet-500/50"></div>
                            <div class="p-12 border-2 border-violet-500/75"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Individual sides</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div
                                class="p-12 border-2 border-gray-100 border-t-gray-500 dark:border-violet-500/30 dark:border-t-violet-500">
                            </div>
                            <div
                                class="p-12 border-2 border-gray-100 border-r-gray-500 dark:border-violet-500/30 dark:border-r-violet-500">
                            </div>
                            <div
                                class="p-12 border-2 border-gray-100 border-b-gray-500 dark:border-violet-500/30 dark:border-b-violet-500">
                            </div>
                            <div
                                class="p-12 border-2 border-gray-100 border-l-gray-500 dark:border-violet-500/30 dark:border-l-violet-500">
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Horizontal and vertical sides borders
                            </h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div
                                class="p-12 border-2 border-violet-100 border-x-violet-500 dark:border-violet-500/20 dark:border-x-violet-500">
                            </div>
                            <div
                                class="p-12 border-2 border-violet-100 border-y-violet-500 dark:border-violet-500/20 dark:border-y-violet-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-x-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Border style</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="p-12 border-2 border-solid border-violet-500"></div>
                            <div class="p-12 border-2 border-dashed border-violet-500"></div>
                            <div class="p-12 border-2 border-dotted border-violet-500"></div>
                            <div class="p-12 border-2 border-double border-violet-500"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Outline style</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div
                                class="p-12 outline outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20">
                            </div>
                            <div
                                class="p-12 outline-dashed outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20">
                            </div>
                            <div
                                class="p-12 outline-dotted outline-2 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20">
                            </div>
                            <div
                                class="p-12 outline-double outline-3 outline-offset-2 outline-violet-200 bg-violet-200 dark:bg-violet-500/20">
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Outline offset</h6>
                        </div>
                        <div class="flex flex-wrap gap-6 card-body">
                            <div class="p-12 outline outline-offset-0 outline-gray-100 bg-gray-50 dark:bg-gray-500/20">
                            </div>
                            <div class="p-12 outline outline-offset-2 outline-gray-100 bg-gray-50 dark:bg-gray-500/20">
                            </div>
                            <div class="p-12 outline outline-offset-4 outline-gray-100 bg-gray-50 dark:bg-gray-500/20">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-x-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Adding a ring</h6>
                        </div>
                        <div class="flex flex-wrap gap-8 card-body">
                            <div class="p-12 ring-2 ring-gray-100 bg-gray-50 dark:bg-gray-500/20"></div>
                            <div class="p-12 ring ring-gray-100 bg-gray-50 dark:bg-gray-500/20"></div>
                            <div class="p-12 ring-4 ring-gray-100 bg-gray-50 dark:bg-gray-500/20"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100"> Ring offset width</h6>
                        </div>
                        <div class="flex flex-wrap gap-8 card-body">
                            <div class="p-12 ring-offset-0 ring-2 ring-violet-50 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="p-12 ring-offset-2 ring-2 ring-violet-50 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="p-12 ring-offset-4 ring-2 ring-violet-50 bg-violet-200 dark:bg-violet-500/20"></div>
                            <div class="p-12 ring-offset-8 ring-2 ring-violet-50 bg-violet-200 dark:bg-violet-500/20"></div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rounded corners</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-sm" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-md" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-2xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-3xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-full" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-x-6">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rounding sides separately</h6>
                        </div>
                        <div class="flex flex-wrap gap-4 card-body">
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-t-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-r-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-b-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-l-xl" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100"> Rounding corners separately</h6>
                        </div>
                        <div class="flex flex-wrap gap-8 card-body">
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-tl-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-tr-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-br-xl" alt="">
                            </div>
                            <div class="w-20 h-20">
                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" class="rounded-bl-xl" alt="">
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
