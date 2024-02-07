@extends('layouts.master')
@section('title')
    {{ __('Buttons') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Buttons" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Default Buttons</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button"
                                class="text-white bg-gray-500 border-gray-500 btn hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button"
                                class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button"
                                class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button"
                                class="text-white bg-yellow-500 border-yellow-500 btn hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button"
                                class="text-white bg-red-500 border-red-500 btn hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button"
                                class="text-white btn bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button" class="border-0 btn text-violet-500 group"> <span
                                    class="transition-all duration-100 ease-in-out group-hover:border-b group-hover:border-violet-500">Link</span></button>
                            <button type="button"
                                class="text-black bg-gray-100 border-gray-100 btn focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Outline Buttons</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="btn text-violet-500 hover:text-white border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:text-white focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button"
                                class="text-gray-500 border-gray-500 btn hover:text-white hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:text-white focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button"
                                class="text-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:text-white focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button"
                                class="btn text-sky-500 hover:text-white border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:text-white focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button"
                                class="text-yellow-500 border-yellow-500 btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:text-white focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button"
                                class="text-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:text-white focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button"
                                class="btn text-neutral-500 hover:text-white border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:text-white focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button"
                                class="text-black border-gray-100 btn hover:bg-gray-50/50 hover:border-gray-100 focus:bg-gray-100 focus:border-gray-100 focus:ring focus:ring-gray-500/10 active:bg-gray-100 active:border-gray-100 dark:text-gray-100 dark:hover:text-white dark:hover:border-zinc-100 dark:focus:text-gray-700">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Rounded Buttons</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="text-white rounded-full btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">Primary</button>
                            <button type="button"
                                class="text-white bg-gray-500 border-gray-500 rounded-full btn hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600">Secondary</button>
                            <button type="button"
                                class="text-white bg-green-500 border-green-500 rounded-full btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Success</button>
                            <button type="button"
                                class="text-white rounded-full btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Info</button>
                            <button type="button"
                                class="text-white bg-yellow-500 border-yellow-500 rounded-full btn hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">Warning</button>
                            <button type="button"
                                class="text-white bg-red-500 border-red-500 rounded-full btn hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">Danger</button>
                            <button type="button"
                                class="text-white rounded-full btn bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900">Dark</button>
                            <button type="button" class="border-0 rounded-full btn text-violet-500 group"> <span
                                    class="transition-all duration-100 ease-in-out group-hover:border-b group-hover:border-violet-500">Link</span></button>
                            <button type="button"
                                class="text-black bg-gray-100 border-gray-100 rounded-full btn hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Soft Buttons</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600 dark:focus:ring-violet-500/10 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                            <button type="button"
                                class="text-gray-500 btn bg-gray-50 border-gray-50 hover:text-white hover:bg-gray-600 hover:border-gray-600 focus:text-white focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600 dark:bg-gray-500/20 dark:focus:ring-gray-500/10 dark:border-transparent">Secondary</button>
                            <button type="button"
                                class="text-green-500 btn bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600 dark:focus:ring-green-500/10 dark:bg-green-500/20 dark:border-transparent">Success</button>
                            <button type="button"
                                class="btn text-sky-500 bg-sky-50 border-sky-50 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600 dark:focus:ring-sky-500/10 dark:bg-sky-500/20 dark:border-transparent">Info</button>
                            <button type="button"
                                class="text-yellow-500 btn bg-yellow-50 hover:text-white border-yellow-50 hover:bg-yellow-600 focus:text-white hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600 dark:focus:ring-yellow-500/10 dark:bg-yellow-500/20 dark:border-transparent">Warning</button>
                            <button type="button"
                                class="text-red-500 btn bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600 dark:focus:ring-red-500/10 dark:bg-red-500/20 dark:border-transparent">Danger</button>
                            <button type="button"
                                class="btn text-neutral-800 bg-neutral-50 hover:text-white border-neutral-50 hover:bg-neutral-900 focus:text-white hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900 dark:focus:ring-neutral-500/10 dark:bg-neutral-500/20 dark:border-transparent">Dark</button>
                            <button type="button" class="border-0 btn text-violet-500 group"> <span
                                    class="transition-all duration-100 ease-in-out group-hover:border-b group-hover:border-violet-500">Link</span></button>
                            <button type="button"
                                class="text-gray-800 btn bg-gray-50 border-gray-50 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300">Light</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Buttons with Label</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="p-0 text-white align-middle border-0 btn bg-violet-500 focus:ring-2 focus:ring-violet-500/30 hover:bg-violet-600"><i
                                    class="w-10 h-full py-3 align-middle bg-white rounded-l bx bx-smile bg-opacity-20 text-16"></i><span
                                    class="px-3 leading-[2.8]">Primary</span></button>
                            <button type="button"
                                class="p-0 text-white align-middle bg-green-500 border-0 btn focus:ring-2 focus:ring-green-500/30 hover:bg-green-600"><i
                                    class="w-10 h-full py-3 align-middle bg-white rounded-l bx bx-check-double bg-opacity-20 text-16"></i><span
                                    class="px-3 leading-[2.8]">Success</span></button>
                            <button type="button"
                                class="p-0 text-white align-middle bg-yellow-500 border-0 btn focus:ring-2 focus:ring-yellow-500/30 hover:bg-yellow-600"><i
                                    class="w-10 h-full py-3 align-middle bg-white rounded-l bx bx-error bg-opacity-20 text-16"></i><span
                                    class="px-3 leading-[2.8]">Warning</span></button>
                            <button type="button"
                                class="p-0 text-white align-middle bg-red-500 border-0 btn focus:ring-2 focus:ring-red-500/30 hover:bg-red-600"><i
                                    class="w-10 h-full py-3 align-middle bg-white rounded-l bx bx-block bg-opacity-20 text-16"></i><span
                                    class="px-3 leading-[2.8]">Danger</span></button>
                            <button type="button"
                                class="p-0 text-white align-middle border-0 btn bg-neutral-700 focus:ring-2 focus:ring-neutral-500/30 hover:bg-neutral-800"><i
                                    class="w-10 h-full py-3 align-middle bg-white rounded-l bx bx-loader bg-opacity-20 text-16"></i><span
                                    class="px-3 leading-[2.8]">Dark</span></button>
                            <button type="button"
                                class="p-0 text-black align-middle border-0 btn bg-gray-50 focus:ring-2 focus:ring-neutral-500/30 hover:bg-neutral-800"><i
                                    class="w-10 h-full py-3 align-middle bg-black rounded-l bx bx-hourglass bg-opacity-10 text-16"></i><span
                                    class="px-3 leading-[2.8]">Light</span></button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Button with leading icon</h6>
                        </div>
                        <div class="flex flex-wrap gap-3 card-body">
                            <button type="button"
                                class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600"><i
                                    class="align-middle bx bx-smile text-16 ltr:mr-1 rtl:ml-1 "></i><span
                                    class="align-middle">Primary</span></button>
                            <button type="button"
                                class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i
                                    class="align-middle bx bx-check-double text-16 ltr:mr-1 rtl:ml-1 "></i><span
                                    class="align-middle">Success</span></button>
                            <button type="button"
                                class="text-white bg-yellow-500 border-yellow-500 btn hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600"><i
                                    class="align-middle bx bx-error text-16 ltr:mr-1 rtl:ml-1 "></i><span
                                    class="align-middle">Warning</span></button>
                            <button type="button"
                                class="text-white bg-red-500 border-red-500 btn hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600"><i
                                    class="align-middle bx bx-block text-16 ltr:mr-1 rtl:ml-1"></i><span
                                    class="align-middle">Danger</span></button>
                            <button type="button"
                                class="text-white btn bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900"><i
                                    class="align-middle bx bx-loader text-16 ltr:mr-1 rtl:ml-1 animate-spin"></i><span
                                    class="align-middle">Dark</span></button>
                            <button type="button"
                                class="text-black btn bg-gray-50 border-gray-50 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300"><i
                                    class="align-middle bx bx-hourglass text-16 ltr:mr-1 rtl:ml-1 animate-spin"></i><span
                                    class="align-middle">Light</span></button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Soft Icon Buttons</h6>
                                </div>
                                <div class="flex flex-wrap gap-3 card-body">
                                    <button type="button"
                                        class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/10 active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent"><i
                                            class="align-middle bx bx-smile text-16"></i></button>
                                    <button type="button"
                                        class="text-green-500 btn bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/10 active:bg-green-600 active:border-green-600 dark:bg-green-500/20 dark:border-transparent"><i
                                            class="align-middle bx bx-check-double text-16"></i></button>
                                    <button type="button"
                                        class="text-yellow-500 btn bg-yellow-50 border-yellow-50 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/10 active:bg-yellow-600 active:border-yellow-600 dark:bg-yellow-500/20 dark:border-transparent"><i
                                            class="align-middle bx bx-error text-16"></i></button>
                                    <button type="button"
                                        class="text-red-500 btn bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:text-white focus:border-red-600 focus:ring focus:ring-red-500/10 active:bg-red-600 active:border-red-600 dark:bg-red-500/20 dark:border-transparent"><i
                                            class="align-middle bx bx-block text-16"></i></button>
                                    <button type="button"
                                        class="btn text-neutral-800 bg-neutral-100 border-neutral-100 hover:text-white hover:bg-neutral-900 hover:border-neutral-900 focus:text-white focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/10 active:bg-neutral-900 active:border-neutral-900 dark:bg-neutral-500/20 dark:border-transparent dark:text-gray-100"><i
                                            class="align-middle bx bx-loader text-16"></i></button>
                                    <button type="button"
                                        class="text-black btn bg-gray-50 border-gray-50 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/10 active:bg-gray-300 active:border-gray-300 dark:bg-gray-500/20 dark:border-transparent"><i
                                            class="align-middle bx bx-hourglass text-16"></i></button>
                                </div>
                            </div>

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Icon Buttons</h6>
                                </div>
                                <div class="flex flex-wrap gap-3 card-body">
                                    <button type="button"
                                        class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600"><i
                                            class="align-middle bx bx-smile text-16 "></i></button>
                                    <button type="button"
                                        class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i
                                            class="align-middle bx bx-check-double text-16 "></i></button>
                                    <button type="button"
                                        class="text-white bg-yellow-500 border-yellow-500 btn hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600"><i
                                            class="align-middle bx bx-error text-16 "></i></button>
                                    <button type="button"
                                        class="text-white bg-red-500 border-red-500 btn hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600"><i
                                            class="align-middle bx bx-block text-16"></i></button>
                                    <button type="button"
                                        class="text-white btn bg-neutral-800 border-neutral-800 hover:bg-neutral-900 hover:border-neutral-900 focus:bg-neutral-900 focus:border-neutral-900 focus:ring focus:ring-neutral-500/30 active:bg-neutral-900 active:border-neutral-900"><i
                                            class="align-middle bx bx-loader text-16 animate-spin"></i></button>
                                    <button type="button"
                                        class="text-black btn bg-gray-50 border-gray-50 hover:bg-gray-300 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-500/30 active:bg-gray-300 active:border-gray-300"><i
                                            class="align-middle bx bx-hourglass text-16 animate-spin"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Icon Buttons with Text</h6>
                                </div>
                                <div class="flex flex-wrap gap-3 card-body">
                                    <button type="button" class="px-5 text-white border-0 btn bg-violet-500"><i
                                            class="block text-lg mdi mdi-download"></i><span
                                            class="">Download</span></button>
                                    <button type="button" class="px-5 text-black border-0 btn bg-gray-50"><i
                                            class="block text-lg mdi mdi-upload"></i><span
                                            class="">Upload</span></button>
                                    <button type="button" class="px-5 text-white bg-green-600 border-0 btn"><i
                                            class="block text-lg mdi mdi-pencil"></i><span
                                            class="">Edit</span></button>
                                    <button type="button" class="px-5 text-white bg-red-400 border-0 btn"><i
                                            class="block text-lg mdi mdi-trash-can"></i><span
                                            class="">Delete</span></button>
                                </div>
                            </div>
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Block Buttons</h6>
                                </div>
                                <div class="flex flex-wrap items-center gap-3 card-body">
                                    <button
                                        class="block w-full py-3 text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-500/30 dark:border-zinc-600"
                                        type="submit">Block level button</button>
                                    <button
                                        class="block w-full py-1 text-white bg-gray-300 border-transparent btn focus:ring focus:ring-gray-500/30 dark:border-zinc-600"
                                        type="submit">Block level button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Soft Buttons Sizes</h6>
                                </div>
                                <div class="flex flex-wrap items-center gap-3 card-body">
                                    <button type="button"
                                        class="btn py-1 px-3 text-[11.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="btn py-1.5 px-4 text-13 text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="btn text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="px-5 py-2 btn text-15 text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="btn py-2.5 px-6 text-[15.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-500/10 focus:ring focus:ring-violet-50 active:text-white active:bg-violet-600 active:border-violet-600 dark:bg-violet-500/20 dark:border-transparent">Primary</button>
                                </div>
                            </div>

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Soft Buttons Sizes With Color
                                    </h6>
                                </div>
                                <div class="flex flex-wrap items-center gap-3 card-body">
                                    <button type="button"
                                        class="btn py-1 px-3 text-[11.5px] text-violet-500 bg-violet-50 border-violet-50 hover:text-white hover:bg-violet-600 hover:border-violet-600 focus:text-white focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:text-white active:bg-violet-600 active:border-violet-600 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="btn py-1.5 px-4 text-13 text-green-500 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:text-white active:bg-green-600 active:border-green-600 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="text-yellow-500 btn bg-yellow-50 border-yellow-50 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:text-white active:bg-yellow-600 active:border-yellow-600 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="px-5 py-2 text-red-500 btn text-15 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:text-white active:bg-red-600 active:border-red-600 dark:border-transparent">Primary</button>
                                    <button type="button"
                                        class="btn py-2.5 px-6 text-[15.5px] text-gray-500 bg-gray-50 border-gray-50 hover:text-white hover:bg-gray-600 hover:border-gray-600 focus:text-white focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:text-white active:bg-gray-600 active:border-gray-600 dark:border-transparent">Primary</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-3">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Basic Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex">
                                        <button type="button"
                                            class="btn ltr:rounded-r-none rtl:rounded-l-none px-4 py-2.5 text-sm font-medium text-violet-500 bg-white border border-violet-500 rounded-l hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Left
                                        </button>
                                        <button type="button"
                                            class="btn border-l-0 border-r-0 rounded-l-none rounded-r-none px-4 py-2.5 text-sm font-medium text-violet-500 bg-white border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Middle
                                        </button>
                                        <button type="button"
                                            class="btn px-4 py-2.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-violet-500 bg-white border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:text-white dark:bg-zinc-700 focus:bg-violet-500 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-violet-500 dark:focus:text-white dark:focus:ring-violet-500/40">
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Icon Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium bg-transparent border rounded-l btn ltr:rounded-r-none rtl:rounded-l-none text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bxs-user-circle ltr:mr-2 rtl:ml-2'></i>
                                            Left
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium bg-transparent border-t border-b border-l-0 border-r-0 rounded-l-none rounded-r-none btn text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bx-check-double ltr:mr-2 rtl:ml-2'></i>
                                            Middle
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium bg-transparent border rounded-r btn ltr:rounded-l-none rtl:rounded-r-none text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-300 dark:focus:bg-violet-300 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bx-time-five ltr:mr-2 rtl:ml-2'></i>
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Active Button Groups</h6>
                                </div>
                                <div class="card-body">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white border rounded-l btn ltr:rounded-r-none rtl:rounded-l-none bg-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bxs-user-circle ltr:mr-2 rtl:ml-2'></i>
                                            Left
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium bg-transparent border-t border-b border-l-0 border-r-0 rounded-l-none rounded-r-none btn text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bx-check-double ltr:mr-2 rtl:ml-2'></i>
                                            Middle
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium bg-transparent border rounded-r btn ltr:rounded-l-none rtl:rounded-r-none text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-violet-50 focus:bg-violet-500 focus:text-white dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-violet-500 dark:focus:bg-violet-500 dark:focus:ring-violet-500/40">
                                            <i class='text-lg bx bx-time-five ltr:mr-2 rtl:ml-2'></i>
                                            Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Icon only</h6>
                                </div>
                                <div class="flex flex-wrap gap-4 card-body">
                                    <div class="inline-flex">
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium bg-white border-t border-b btn ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:z-10 focus:ring-2 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-chevron-left'></i>
                                        </button>
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium bg-white border rounded-r btn ltr:rounded-l-none rtl:rounded-r-none text-violet-500 border-violet-500 hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-violet-500 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-chevron-right'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-green-500 bg-white border-t border-b border-green-500 btn ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:z-10 focus:ring-2 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-left-arrow-alt'></i>
                                        </button>
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-green-500 bg-white border border-green-500 rounded-r btn ltr:rounded-l-none rtl:rounded-r-none hover:bg-green-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-green-500 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-right-arrow-alt'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-yellow-500 bg-white border-t border-b border-yellow-500 btn ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:z-10 focus:ring-2 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-chevrons-left'></i>
                                        </button>
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-yellow-500 bg-white border border-yellow-500 rounded-r btn ltr:rounded-l-none rtl:rounded-r-none hover:bg-yellow-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-yellow-500 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-chevrons-right'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-red-500 bg-white border-t border-b border-red-500 btn ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:z-10 focus:ring-2 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-left-arrow-circle'></i>
                                        </button>
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-red-500 bg-white border border-red-500 rounded-r btn ltr:rounded-l-none rtl:rounded-r-none hover:bg-red-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-red-500 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='text-2xl bx bx-right-arrow-circle'></i>
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-gray-500 bg-white border-t border-b border-gray-500 btn ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 hover:bg-gray-500 hover:text-white focus:bg-gray-500 focus:z-10 focus:ring-2 focus:ring-gray-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-gray-500 dark:focus:text-white">
                                            <i class='text-2xl bx bxs-left-arrow-alt'></i>
                                        </button>
                                        <button type="button"
                                            class="px-2 py-1 text-sm font-medium text-gray-500 bg-white border border-gray-500 rounded-r btn ltr:rounded-l-none rtl:rounded-r-none hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-gray-500 focus:ring-gray-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-gray-500 dark:focus:text-white">
                                            <i class='text-2xl bx bxs-right-arrow-alt'></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">With stat</h6>
                                </div>
                                <div class="flex flex-wrap gap-4 card-body">
                                    <div class="inline-flex">
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-violet-500 bg-white border-t border-b border-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:z-10 focus:ring-2 focus:ring-violet-500/30 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-violet-500 dark:hover:text-white dark:hover:bg-violet-500 dark:focus:ring-violet-500 dark:focus:text-white">
                                            <i class='text-xl align-middle bx bxs-bookmark'></i><span
                                                class="align-middle ltr:ml-2 rtl:mr-2">Bookmark</span>
                                        </button>
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-violet-500 bg-white border border-violet-500 rounded-r hover:bg-violet-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-violet-500 focus:ring-violet-50focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-violet-500 dark:hover:text-white dark:hover:bg-violet-500 dark:focus:ring-violet-500 dark:focus:text-white">
                                            12K
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-green-500 bg-white border-t border-b border-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500 focus:z-10 focus:ring-2 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500 dark:focus:text-white">
                                            <i class='text-xl align-middle bx bxs-user-circle'></i><span
                                                class="align-middle ltr:ml-2 rtl:mr-2">Account</span>
                                        </button>
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-green-500 bg-white border border-green-500 rounded-r hover:bg-green-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-green-500 focus:ring-green-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500 dark:focus:text-white">
                                            2.5M
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-yellow-500 bg-white border-t border-b border-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:z-10 focus:ring-2 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-500 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            <i class='text-xl align-middle bx bx-check-double'></i><span
                                                class="align-middle ltr:ml-2 rtl:mr-2">Check</span>
                                        </button>
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-yellow-500 bg-white border border-yellow-500 rounded-r hover:bg-yellow-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-yellow-500 focus:ring-yellow-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-500 dark:focus:ring-yellow-500 dark:focus:text-white">
                                            20K
                                        </button>
                                    </div>

                                    <div class="inline-flex">
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 font-medium text-red-500 bg-white border-t border-b border-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:z-10 focus:ring-2 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-500 dark:focus:text-white">
                                            <i class='text-xl align-middle bx bxs-party'></i><span
                                                class="align-middle ltr:ml-2 rtl:mr-2">Party</span>
                                        </button>
                                        <button type="button"
                                            class="btn px-3 py-1.5 text-sm ltr:rounded-l-none rtl:rounded-r-none font-medium text-red-500 bg-white border border-red-500 rounded-r hover:bg-red-500 hover:text-white focus:z-10 focus:ring-2 focus:bg-red-500 focus:ring-red-200 focus:text-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-500 dark:focus:text-white">
                                            65K
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="grid grid-cols-1 xl:grid-cols-2">
                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">With dropdown</h6>
                                </div>
                                <div class="flex flex-wrap gap-4 card-body">
                                    <div class="relative dropdown">
                                        <button type="button"
                                            class="flex items-center p-0 align-middle btn border-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white"><span
                                                class="px-3">Save changes</span>
                                            <i class="w-10 h-full py-3 align-middle bx bx-chevron-down ltr:border-l rtl:border-r border-violet-500 bg-white/20 text-16 dropdown-toggle focus:border-3 focus:border-violet-500/10 dark:text-white dark:hover:bg-white/30 dark:focus:bg-white/30"
                                                id="dropdownMenu1" data-bs-toggle="dropdown"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu dark:bg-zinc-700 bg-clip-padding"
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

                            <div>
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">With checkbox and dropdown
                                    </h6>
                                </div>
                                <div class="flex flex-wrap gap-4 card-body">
                                    <div class="relative dropdown">
                                        <div class="inline-flex">
                                            <button
                                                class="btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none border-violet-500">
                                                <input type="checkbox"
                                                    class="rounded checked:bg-violet-500 ring-0 ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500" />
                                            </button>
                                            <button type="button"
                                                class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-violet-500 flex items-center align-middle text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500  dropdown-toggle focus:text-white"
                                                id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save
                                                    changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button
                                                class="border-green-500 btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none">
                                                <input type="checkbox"
                                                    class="rounded checked:bg-green-500 ring-0 ring-offset-0 dark:bg-zinc-700 dark:checked:bg-green-500" />
                                            </button>
                                            <button type="button"
                                                class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-green-500 flex items-center align-middle text-green-500 hover:bg-green-500 hover:text-white focus:bg-green-500  dropdown-toggle focus:text-white"
                                                id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save
                                                    changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button
                                                class="border-yellow-500 btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none">
                                                <input type="checkbox"
                                                    class="rounded checked:bg-yellow-500 ring-0 ring-offset-0 dark:bg-zinc-700 dark:checked:bg-yellow-500" />
                                            </button>
                                            <button type="button"
                                                class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-yellow-500 flex items-center align-middle text-yellow-500 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500  dropdown-toggle focus:text-white"
                                                id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save
                                                    changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu2">
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
                                        <div class="inline-flex">
                                            <button
                                                class="border-red-500 btn ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none">
                                                <input type="checkbox"
                                                    class="rounded checked:bg-red-500 ring-0 ring-offset-0 dark:bg-zinc-700 dark:checked:bg-red-500" />
                                            </button>
                                            <button type="button"
                                                class="btn py-2.5 ltr:rounded-l-none rtl:rounded-r-none border-red-500 flex items-center align-middle text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500  dropdown-toggle focus:text-white"
                                                id="dropdownMenu2" data-bs-toggle="dropdown"><span class="px-3">Save
                                                    changes</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </button>
                                        </div>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding dark:bg-zinc-700"
                                            aria-labelledby="dropdownMenu2">
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
