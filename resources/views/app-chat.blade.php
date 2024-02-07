@extends('layouts.master')
@section('title')
    {{ __('Chat') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
               <x-page-title title="Chat" pagetitle="Apps" />

                <div class="grid grid-cols-1 gap-6 lg:gap-1 mb-6 xl:grid-cols-12">
                    <div class="col-span-12 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="p-0">
                                <div class="flex px-6 py-4 border-b border-gray-50 dark:border-zinc-600">
                                    <div class="self-center ltr:mr-3 rtl:ml-3">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt=""
                                            class="w-8 h-8 rounded-full">
                                    </div>
                                    <div class="flex-grow">
                                        <h6 class="mb-1">
                                            <a href="#"
                                                class="font-medium align-middle text-16 dark:text-gray-100">Shawn
                                                <i class="ml-1 text-green-500 align-middle mdi mdi-circle text-10"></i>
                                            </a>
                                            <p class="mb-0 font-normal text-gray-500">Available</p>
                                        </h6>
                                    </div>
                                    <div>
                                        <div class="relative dropstart">
                                            <button class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown">
                                                <i class="text-xl bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Profile</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Edit</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Add Contact</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Setting</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="relative search-box">
                                        <input type="text"
                                            class="form-control border border-gray-50 py-1.5 px-8 w-full rounded bg-gray-50/30 placeholder:text-gray-300 dark:bg-zinc-700/50 dark:border-zinc-600"
                                            placeholder="Search...">
                                        <i
                                            class="bx bx-search search-icon absolute left-2 top-1.5 text-lg text-gray-600"></i>
                                    </div>
                                </div>
                                <div class="nav-tabs chart-tabpill">
                                    <div class="p-1 bg-gray-50/40 dark:bg-zinc-700">
                                        <ul class="flex text-sm font-medium text-center text-gray-700 nav ">
                                            <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="chat"
                                                    class="inline-block w-full p-2 active" aria-current="page">Chat</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="groups"
                                                    class="inline-block w-full p-2">Groups</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="contacts"
                                                    class="inline-block w-full p-2">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="block w-full tab-pane" id="chat">
                                            <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                <div class="px-3">
                                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Recent</h5>
                                                </div>
                                                <ul class="divide-y divide-gray-50 dark:divide-zinc-600 whitespace-nowrap">
                                                    <li class="active bg-violet-50/30 px-4 py-3.5 dark:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium whitespace-nowrap text-gray-700 dark:text-gray-100">
                                                                        Jennie Sherlock</h5>
                                                                    <p class="mb-0 text-gray-400">Hey! there I'm available
                                                                    </p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">02 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-100">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            S </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Stacie Dube</h5>
                                                                    <p
                                                                        class="mb-0 font-semibold text-gray-700 dark:text-gray-100">
                                                                        I've finished it! See you so</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="font-semibold text-11 dark:text-gray-100">10
                                                                        min</div>
                                                                </div>
                                                                <div class="absolute ltr:right-1.5 rtl:left-1.5 top-5">
                                                                    <span
                                                                        class="px-2 py-0.5 text-11 text-white font-semibold bg-red-400 rounded-full">1</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Katie Olson</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">This
                                                                        theme is awesome!</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Marshall Wilson</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice
                                                                        to meet you</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-100">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            J </span>
                                                                    </div>
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-green-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        James Lee</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Wow
                                                                        that's great</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="font-semibold text-11 dark:text-zinc-100">
                                                                        10 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Ronald Tucker</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice
                                                                        to meet you</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Dennis Stewart</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice
                                                                        to meet you</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-yellow-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Katie Olson</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">This
                                                                        theme is awesome!</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class=" px-4 py-3.5 hover:bg-violet-50/30 transition-all duration-300 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="relative flex items-start">
                                                                <div class="relative self-center ltr:mr-4 rtl:ml-4">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                                        class="w-8 h-8 rounded-full" alt="">
                                                                    <span
                                                                        class="absolute h-1.5 w-1.5 bg-gray-500 rounded-full ring-2 ring-white bottom-0.5"></span>
                                                                </div>

                                                                <div class="flex-grow overflow-hidden">
                                                                    <h5
                                                                        class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Marshall Wilson</h5>
                                                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Nice
                                                                        to meet you</p>
                                                                </div>
                                                                <div class="">
                                                                    <div class="text-11 dark:text-zinc-100">22 min</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hidden w-full tab-pane" id="groups">
                                            <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                <div class="px-3">
                                                    <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Groups</h5>
                                                </div>
                                                <ul class="list-unstyled chat-list">
                                                    <li
                                                        class="px-4 py-3 transition-all duration-300 border-t border-gray-50/50 hover:bg-violet-50/30 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-center">
                                                                <div class="mr-3 shrink-0">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-50">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            G </span>
                                                                    </div>
                                                                </div>

                                                                <div class="grow-1">
                                                                    <h5
                                                                        class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        General</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li
                                                        class="px-4 py-3 transition-all duration-300 border-t border-gray-50/50 hover:bg-violet-50/30 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-center">
                                                                <div class="mr-3 shrink-0">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-50">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            R </span>
                                                                    </div>
                                                                </div>

                                                                <div class="grow-1">
                                                                    <h5
                                                                        class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Reporting</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li
                                                        class="px-4 py-3 transition-all duration-300 border-t border-gray-50/50 hover:bg-violet-50/30 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-center">
                                                                <div class="mr-3 shrink-0">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-50">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            M </span>
                                                                    </div>
                                                                </div>
                                                                <div class="grow-1">
                                                                    <h5
                                                                        class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Meeting</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li
                                                        class="px-4 py-3 transition-all duration-300 border-t border-gray-50/50 hover:bg-violet-50/30 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-center">
                                                                <div class="mr-3 shrink-0">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-50">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            M </span>
                                                                    </div>
                                                                </div>
                                                                <div class="grow-1">
                                                                    <h5
                                                                        class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Project A</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li
                                                        class="px-4 py-3 transition-all duration-300 border-t border-gray-50/50 hover:bg-violet-50/30 dark:hover:bg-violet-500/10">
                                                        <a href="#">
                                                            <div class="flex items-center">
                                                                <div class="mr-3 shrink-0">
                                                                    <div
                                                                        class="w-8 h-8 text-center rounded-full bg-violet-50">
                                                                        <span
                                                                            class="leading-[2.4] text-violet-500 font-medium">
                                                                            B </span>
                                                                    </div>
                                                                </div>
                                                                <div class="grow-1">
                                                                    <h5
                                                                        class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                        Project B</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hidden w-full tab-pane" id="contacts">
                                            <div class="pt-3  max-h-[calc(65vh_-_90px)]" data-simplebar>
                                                <div class="pt-3">
                                                    <div class="px-3">
                                                        <h5 class="mb-3 text-sm text-gray-700 dark:text-gray-100">Contacts
                                                        </h5>
                                                    </div>

                                                    <div>
                                                        <div>
                                                            <div class="px-4 pb-1 border-b border-gray-50">A</div>

                                                            <ul class="list-unstyled">
                                                                <li
                                                                    class="px-4 py-3 transition-all border-b border-gray-50 hover:bg-violet-50/30 ease">
                                                                    <a href="#">
                                                                        <h5
                                                                            class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                            Adam Miller</h5>
                                                                    </a>
                                                                </li>

                                                                <li
                                                                    class="px-4 py-3 transition-all hover:bg-violet-50/30 ease">
                                                                    <a href="#">
                                                                        <h5
                                                                            class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                            Alfonso Fisher</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="px-4 pb-1 border-b border-gray-50">B</div>

                                                            <ul class="list-unstyled">
                                                                <li
                                                                    class="px-4 py-3 transition-all hover:bg-violet-50/30 ease">
                                                                    <a href="#">
                                                                        <h5
                                                                            class="mb-0 text-sm font-medium text-gray-700 dark:text-gray-100">
                                                                            Bonnie Harney</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="px-4 pb-1 border-b border-gray-50">C</div>

                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5
                                                                            class="px-4 py-3 mb-0 text-sm font-medium text-gray-700 transition-all border-b dark:text-gray-100 border-gray-50 hover:bg-violet-50/30 ease">
                                                                            Charles Brown</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5
                                                                            class="px-4 py-3 mb-0 text-sm font-medium text-gray-700 transition-all border-b dark:text-gray-100 border-gray-50 hover:bg-violet-50/30 ease">
                                                                            Carmella Jones</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5
                                                                            class="px-4 py-3 mb-0 text-sm font-medium text-gray-700 transition-all dark:text-gray-100 hover:bg-violet-50/30 ease">
                                                                            Carrie Williams</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="px-4 pb-1 border-b border-gray-50">D</div>

                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5
                                                                            class="px-4 py-3 mb-0 text-sm font-medium text-gray-700 transition-all dark:text-gray-100 hover:bg-violet-50/30 ease">
                                                                            Dolores Minter</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-9">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="p-4 px-6 border-b border-gray-50 dark:border-zinc-600">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class=" avatar-sm ltr:mr-3 rtl:ml-3 d-sm-block d-none">
                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                class="w-8 h-8 rounded-full">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="text-sm"><a href="#"
                                                    class="font-medium text-gray-800 dark:text-gray-100 whitespace-nowrap">Jennie
                                                    Sherlock</a></h5>
                                            <p class="mb-0 text-gray-500 dark:text-zinc-100">Online</p>
                                        </div>
                                    </div>
                                    <ul class="flex space-x-6">
                                        <li>
                                            <div class="relative dropdown">
                                                <button
                                                    class="p-0 text-lg text-gray-500 border-0 btn dropdown-toggle dark:text-gray-300"
                                                    type="button" data-bs-toggle="dropdown" id="dropdownMenuButton10"
                                                    data-tw-auto-close="outside">
                                                    <i class="text-xl bx bx-search-alt-2"></i>
                                                </button>
                                                <ul class="absolute z-50 hidden mt-2 ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto text-left list-none bg-white border rounded shadow-lg w-[240px] border-gray-50 dropdown-menu top-8 dark:bg-zinc-600 bg-clip-padding dark:border-gray-600/50"
                                                    aria-labelledby="dropdownMenuButton10">
                                                    <li class="px-4 py-2">
                                                        <input type="text"
                                                            class="text-base text-gray-500 border rounded border-gray-50/50 bg-gray-50/30 placeholder:text-base dark:bg-zinc-700 dark:text-gray-300 placeholder:dark:text-gray-300 focus:ring focus:ring-violet-50/50 w-full"
                                                            placeholder="Search..">
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="relative dropdown">
                                                <button class="p-0 text-gray-400 border-0 btn dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown">
                                                    <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Profile</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Archive</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Muted</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                            href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="py-4 px-2 h-[570px]" data-simplebar>
                                <li class="relative mb-6 text-center chat-day-title">
                                    <span
                                        class="relative z-40 px-8 py-1 text-gray-700 bg-white title dark:bg-zinc-800 dark:text-gray-100">Today</span>
                                    <div class="absolute w-full border-b top-3 border-gray-50 dark:border-zinc-600"></div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="text-white/50">Jennie Sherlock</a>
                                            <span class="text-xs text-white/50">10:00</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Good morning !</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex justify-end mb-5 mr-5">
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-gray-50 dark:bg-zinc-700">
                                        <h5 class="text-13 "><span
                                                class="mr-2 text-xs text-gray-500 dark:text-zinc-100 ">10:00</span> <a
                                                href="#" class="text-gray-600 dark:text-zinc-100 ">Shawn</a> </h5>
                                        <p class="mb-0 font-normal text-gray-700 mt-0.5 dark:text-gray-100 ">Good morning !
                                        </p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                    </div>
                                </li>

                                <li class="flex mb-3 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:04</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Hello!</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">What about our next meeting?</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Edit</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Add Contact</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                        href="#">Setting</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:00</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">Next meeting tomorrow 10.00AM</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>
                                    </div>
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="flex justify-end mb-5 mr-5">
                                    <div>
                                        <div class="relative dropdown">
                                            <button
                                                class="p-0 text-gray-400 border-0 btn ltr:mr-2 rtl:ml-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Copy</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Save</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Forward</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80"
                                                        href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-gray-50 dark:bg-zinc-700">
                                        <h5 class="text-13 "><span
                                                class="mr-2 text-xs text-gray-500 dark:text-zinc-100 ">10:00</span> <a
                                                href="#" class="text-gray-600 dark:text-zinc-100 ">Shawn</a> </h5>
                                        <p class="mb-0 font-normal text-gray-700 mt-0.5 dark:text-gray-100 ">Wow that's
                                            great</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-gray-50 border-l-gray-50 top-0 -right-3 dark:border-t-zinc-700 dark:border-l-zinc-700"></span>
                                    </div>
                                </li>

                                <li class="flex mb-5 ml-5">
                                    <div class="relative inline-block px-5 py-3 rounded-lg bg-violet-500">
                                        <h5 class="text-13"><a href="#" class="mr-2 text-white/50">Jennie
                                                Sherlock</a> <span class="text-xs text-white/50">10:09</span></h5>
                                        <p class="mb-0 font-normal text-white mt-0.5">img-1.jpg & img-2.jpg images for a
                                            New Projects</p>
                                        <span
                                            class="absolute border-[9px] border-transparent border-t-violet-500 border-r-violet-500 top-0 -left-3"></span>

                                        <ul class="flex gap-4 mt-3">
                                            <li>
                                                <a class="inline-block m-1" href="">
                                                    <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                        class="h-auto rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36">
                                                </a>
                                            </li>

                                            <li>
                                                <a class="inline-block m-1" href="">
                                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                        class="h-auto rounded-sm ring-4 ring-white dark:ring-zinc-600 w-36">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="relative dropdown">
                                        <button class="p-0 text-gray-400 border-0 btn ltr:ml-2 rtl:mr-2 dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                            <i class="text-xl bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-auto ltr:!left-0 rtl:!left-auto rtl:!right-0 dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Profile</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Edit</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Add Contact</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30"
                                                    href="#">Setting</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 border-t border-gray-50 dark:border-zinc-600">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-10 xl:col-span-11 ltr:pr-5 rtl:pl-5">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="py-1.5 rounded border-gray-50 w-full bg-gray-50/30 placeholder:text-sm placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 focus:ring focus:ring-violet-200/10"
                                                placeholder="Enter Message...">
                                        </div>
                                    </div>
                                    <div class="col-span-2 xl:col-span-1">
                                        <button type="submit"
                                            class="w-full text-white border-transparent shadow-md btn bg-violet-500 shadow-violet-200 focus:ring focus:ring-violet-200 dark:shadow-zinc-600"><span
                                                class="mr-2 hidden sm:inline-block">Send</span> <i
                                                class="ml-2 mdi mdi-send float-end"></i></button>
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
