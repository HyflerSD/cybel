@extends('layouts.master')
@section('title')
    {{ __('Toasts') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Toasts" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Default </h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-default"
                                    class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 shadow-gray-50 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center  w-8 h-8 text-blue-500 bg-blue-100 rounded-lg">
                                        <div class="p-5 text-center"><i class='text-lg bx bxs-hot'></i></div>
                                    </div>
                                    <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">Set yourself free.</div>
                                    <button type="button"
                                        class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                        data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Colors</h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-success"
                                    class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center  w-8 h-8 text-green-500 rounded-lg bg-green-50 dark:bg-green-500/20 dark:text-green-200">
                                        <div class="p-5 text-center"><i class='text-lg bx bx-check'></i></div>
                                    </div>
                                    <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">Item moved successfully.</div>
                                    <button type="button"
                                        class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                        data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                                <div id="toast-success"
                                    class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center  w-8 h-8 text-red-500 rounded-lg bg-red-50 dark:bg-red-500/20">
                                        <div class="p-5 text-center"><i class='text-lg bx bx-x'></i></div>
                                    </div>
                                    <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">Item has been deleted.</div>
                                    <button type="button"
                                        class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                        data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                                <div id="toast-success"
                                    class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div
                                        class="inline-flex items-center justify-center  w-8 h-8 text-orange-500 rounded-lg bg-orange-50 dark:bg-orange-500/20">
                                        <div class="p-5 text-center"><i class='text-lg bx bx-error'></i></div>
                                    </div>
                                    <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">Item has been deleted.</div>
                                    <button type="button"
                                        class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                        data-dismiss-target="#toast-default" aria-label="Close">
                                        <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Simple toast </h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-simple"
                                    class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-gray-200 rounded-lg shadow dark:text-zinc-100/80 dark:divide-gray-700 space-x dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div class="text-center text-blue-500 "><i class='text-lg -rotate-45 bx bxs-send'></i>
                                    </div>
                                    <div class="text-sm font-normal ltr:pl-4 rtl:pr-4">Message sent successfully.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Toast message</h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-message-cta"
                                    class="w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 shadow-gray-50 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div class="flex">
                                        <img class="w-8 h-8 rounded-full shadow-lg " src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                            alt="Phyllis Gatlin image" />
                                        <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">
                                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Phyllis
                                                Gatlin</span>
                                            <div class="mb-2 text-sm font-normal">Hi Neil, thanks for sharing your thoughts
                                                regarding Flowbite.</div>
                                            <a href="#"
                                                class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-500/30 dark:bg-blue-500 dark:hover:bg-blue-600">Reply</a>
                                        </div>
                                        <button type="button"
                                            class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50 flex-shrink-0"
                                            data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                        </button>
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
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Push notification</h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-notification"
                                    class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div class="flex items-center mb-3">
                                        <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New
                                            notification</span>
                                        <button type="button"
                                            class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                            data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="relative inline-block shrink-0">
                                            <img class="w-12 h-12 rounded-full" src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                alt="Phyllis Gatlin image" />
                                            <span
                                                class="absolute bottom-0 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full -right-2">
                                                <i class='text-white bx bxs-message-check'></i>
                                            </span>
                                        </div>
                                        <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">
                                            <div class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green
                                            </div>
                                            <div class="text-sm font-normal">commmented on your photo</div>
                                            <span class="text-xs font-medium text-blue-600 dark:text-blue-500">a few
                                                seconds ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Toast message</h6>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 card-body">
                                <div id="toast-interactive"
                                    class="w-full max-w-sm p-4 text-gray-500 bg-white rounded-lg shadow dark:text-zinc-100/80 dark:text-gray-400 dark:bg-zinc-700 dark:shadow-zinc-600"
                                    role="alert">
                                    <div class="flex">
                                        <div
                                            class="inline-flex items-center justify-center  w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:text-blue-300 dark:bg-blue-900">
                                            <i class='text-lg bx bx-recycle'></i>
                                        </div>
                                        <div class="text-sm font-normal ltr:ml-3 rtl:mr-3">
                                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Update
                                                available</span>
                                            <div class="mb-2 text-sm font-normal">A new software version is available for
                                                download.</div>
                                            <div class="grid grid-cols-2 gap-2">
                                                <div>
                                                    <a href="#"
                                                        class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-500/30 dark:bg-blue-500 dark:hover:bg-blue-600">Update</a>
                                                </div>
                                                <div>
                                                    <a href="#"
                                                        class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-50/50 focus:ring-2 focus:outline-none focus:ring-gray-500/30 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700">Not
                                                        now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="ltr:ml-auto rtl:mr-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-50/50 py-[5px] hover:bg-gray-50/50 text-center h-8 w-8 dark:bg-zinc-800 dark:text-gray-100 dark:focus:ring-zinc-500/50"
                                            data-dismiss-target="#toast-default" aria-label="Close">
                                            <i class='-mt-1 text-2xl text-center bx bx-x' data-tw-dismiss="toast"></i>
                                        </button>
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
