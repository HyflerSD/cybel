@extends('layouts.master')
@section('title')
    {{ __('Avatars') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Avatars" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Avatar group stacked bottom to top</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid items-center grid-cols-12 space-y-5 lg:space-y-0">
                                <div class="col-span-12 lg:col-span-2 xl:col-span-2">
                                    <div class="flex -space-x-1 rtl:space-x-reverse">
                                        <img class="inline-block w-6 h-6 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                        <img class="inline-block w-6 h-6 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <img class="inline-block w-6 h-6 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <img class="inline-block w-6 h-6 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 xl:col-span-2">
                                    <div class="flex -space-x-1 rtl:space-x-reverse">
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 xl:col-span-2">
                                    <div class="flex -space-x-1 rtl:space-x-reverse">
                                        <img class="inline-block w-10 h-10 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                        <img class="inline-block w-10 h-10 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <img class="inline-block w-10 h-10 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <img class="inline-block w-10 h-10 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-4 xl:col-span-2">
                                    <div class="flex -space-x-1 rtl:space-x-reverse">
                                        <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                        <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Circular avatars</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-16">
                                <img class="inline-block w-6 h-6 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                <img class="inline-block w-10 h-10 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                <img class="inline-block rounded-full h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                <img class="inline-block w-20 h-20 rounded-full ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Rounded avatars</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-16">
                                <img class="inline-block w-6 h-6 rounded ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                <img class="inline-block w-8 h-8 rounded ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                <img class="inline-block w-10 h-10 rounded ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                <img class="inline-block rounded h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                <img class="inline-block w-20 h-20 rounded ring-2 ring-white dark:ring-zinc-500"
                                    src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Avatars with notification</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-16">
                                <div class="relative">
                                    <img class="inline-block rounded h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                    <div
                                        class="absolute inline-flex w-3 h-3 rounded-full bg-sky-500 ring ring-white ltr:-right-1 rtl:-top-1 -top-1">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block rounded-full h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                        src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                    <div
                                        class="absolute top-0 right-0 inline-flex w-3 h-3 rounded-full bg-sky-500 ring ring-white">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block rounded h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                        src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                    <div
                                        class="absolute inline-flex w-3 h-3 rounded-full bg-sky-500 ring ring-white ltr:-right-1 rtl:-top-1 -bottom-1">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img class="inline-block rounded-full h-14 w-14 ring-2 ring-white dark:ring-zinc-500"
                                        src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                    <div
                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 inline-flex w-3 h-3 rounded-full bg-sky-500 ring ring-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Circular avatars with placeholder
                                icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-16">
                                <div class="relative">
                                    <div class="w-6 h-6 text-center bg-gray-100 rounded-full"><i
                                            class="mdi mdi-account text-16"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="w-8 h-8 text-center bg-gray-100 rounded-full"><i
                                            class="leading-relaxed mdi mdi-account text-19"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="w-10 h-10 text-center bg-gray-100 rounded-full"><i
                                            class="mdi mdi-account text-22 leading-[1.8]"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="text-center bg-gray-100 rounded-full h-14 w-14"><i
                                            class="mdi mdi-account text-3xl leading-[1.8]"></i></div>
                                </div>
                                <div class="relative">
                                    <div class="w-20 h-20 text-center bg-gray-100 rounded-full"><i
                                            class="mdi mdi-account text-5xl leading-[1.6]"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Circular avatars with placeholder
                                icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-16">
                                <div class="relative">
                                    <div
                                        class="bg-gray-100 text-gray-700 h-8 w-8 rounded-full text-center font-medium leading-[2.2]">
                                        TW</div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="bg-gray-100 text-gray-700 h-10 w-10 rounded-full text-center font-medium leading-[2.9]">
                                        TW</div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="bg-gray-100 text-gray-700 h-14 w-14 rounded-full text-center text-xl font-medium leading-[2.8]">
                                        TW</div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="bg-gray-100 text-gray-700 h-20 w-20 rounded-full text-center text-3xl font-medium leading-[2.7]">
                                        TW</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Media Object</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-start space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                        alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Basic</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex items-center space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-6.jpg') }}"
                                        alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Aligned to center</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex items-end space-x-4">
                                    <img class="w-10 h-10 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                        alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Aligned to bottom</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex space-x-4">
                                    <img class="w-auto h-20 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                        alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Stretched to fit</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-50 dark:border-zinc-600">
                                <div class="flex space-x-4">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Media on right</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>
                                    </div>
                                    <img class="w-auto rounded h-14 rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Nested</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex items-start space-x-4">
                                    <img class="w-auto h-16 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                        alt="">
                                    <div class="font-medium dark:text-white">
                                        <div class="text-gray-700 text-17 dark:text-gray-100">Basic</div>
                                        <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis</div>

                                        <hr class="my-5 border-gray-50 dark:border-zinc-600">

                                        <div class="flex items-center space-x-4">
                                            <img class="w-10 h-10 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                alt="">
                                            <div class="font-medium dark:text-white">
                                                <div class="text-gray-700 text-17 dark:text-gray-100">Item 1</div>
                                                <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh
                                                    libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                            </div>
                                        </div>

                                        <hr class="my-5 border-gray-50 dark:border-zinc-600">

                                        <div class="flex items-center space-x-4">
                                            <img class="w-10 h-10 rounded rtl:ml-3" src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                                alt="">
                                            <div class="font-medium dark:text-white">
                                                <div class="text-gray-700 text-17 dark:text-gray-100">Item 2</div>
                                                <div class="mt-1 text-gray-400 dark:text-zinc-100">Cras sit amet nibh
                                                    libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis</div>
                                            </div>
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
