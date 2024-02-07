@extends('layouts.master')
@section('title')
    {{ __('Email Inbox') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Email Inbox" pagetitle="Apps" />

                <div class="gap-5 md:flex">
                    <div class="email-leftbar card lg:w-[236px] md:h-max dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <button type="button"
                                class="w-full text-white bg-red-500 border-transparent shadow-md btn shadow-red-200 dark:shadow-zinc-600"
                                data-tw-toggle="modal" data-tw-target="#composemodal">
                                Compose
                            </button>
                            <div class="mt-6">
                                <a href="#" class="block px-[5px] py-2 font-medium text-red-500 active"><i
                                        class="text-base mdi mdi-email-outline ltr:mr-2 rtl:ml-2"></i> Inbox <span
                                        class="mt-[5px] ms-1 ltr:ltr:!float-right rtl:!float-left">(18)</span></a>
                                <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><i
                                        class="text-base mdi mdi-star-outline ltr:mr-2 rtl:ml-2"></i>Starred</a>
                                <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><i
                                        class="text-base mdi mdi-diamond-stone ltr:mr-2 rtl:ml-2"></i>Important</a>
                                <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><i
                                        class="text-base mdi mdi-file-outline ltr:mr-2 rtl:ml-2"></i>Draft</a>
                                <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><i
                                        class="text-base mdi mdi-email-check-outline ltr:mr-2 rtl:ml-2"></i>Sent Mail</a>
                                <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><i
                                        class="text-base mdi mdi-trash-can-outline ltr:mr-2 rtl:ml-2"></i>Trash</a>
                            </div>

                            <div>
                                <h6 class="mt-6 mb-2 text-gray-700 dark:text-white">Labels</h6>
                                <div class="mt-1">
                                    <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><span
                                            class="mdi mdi-arrow-right-drop-circle text-sky-500 ltr:ltr:!float-right rtl:!float-left"></span>Theme
                                        Support</a>
                                    <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><span
                                            class="text-yellow-500 mdi mdi-arrow-right-drop-circle ltr:ltr:!float-right rtl:!float-left"></span>Freelance</a>
                                    <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><span
                                            class="text-blue-500 mdi mdi-arrow-right-drop-circle ltr:ltr:!float-right rtl:!float-left"></span>Social</a>
                                    <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><span
                                            class="text-red-500 mdi mdi-arrow-right-drop-circle ltr:ltr:!float-right rtl:!float-left"></span>Friends</a>
                                    <a href="#" class="block px-[5px] py-2 text-gray-500 dark:text-zinc-100"><span
                                            class="text-green-500 mdi mdi-arrow-right-drop-circle ltr:ltr:!float-right rtl:!float-left"></span>Family</a>
                                </div>
                            </div>

                            <div>
                                <h6 class="mt-6 mb-2 text-gray-700 dark:text-gray-100">Chat</h6>
                                <div class="mt-4">
                                    <a href="#" class="flex items-start mb-4">
                                        <img class="rounded-full  ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Scott Median
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-zinc-100 ">Hello</p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start mb-4">
                                        <img class="rounded-full  ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Julian Rosa</p>
                                            <p class="text-xs text-gray-500 dark:text-zinc-100">What about our next..</p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start mb-4">
                                        <img class="rounded-full  ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">David Medina
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-zinc-100">Yeah everything is fine</p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start">
                                        <img class="rounded-full  ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Jay Baker</p>
                                            <p class="text-xs text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full ">
                        <div class="overflow-hidden transition-all duration-150 card dark:bg-zinc-700 dark:border-zinc-600">
                            <div class="dark:bg-zinc-700 dark:border-zinc-600 ">
                                <div class="flex flex-wrap gap-2 p-4">
                                    <div class="inline-flex shadow-md shadow-violet-100" role="group">
                                        <div class="inline-flex" role="group">
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-white border border-violet-500 bg-violet-500 ltr:rounded-l rtl:rounded-r focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                                <i class="fa fa-inbox"></i>
                                            </button>
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-white border-t border-b border-violet-500 bg-violet-500 focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                                <i class="fa fa-exclamation-circle"></i>
                                            </button>
                                            <button type="button"
                                                class="px-3 py-2 text-sm font-medium text-white border border-violet-500 bg-violet-500 ltr:rounded-r rtl:rounded-l focus:ring focus:ring-violet-500/30 focus:bg-violet-700">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="relative dropdown">
                                            <button type="button"
                                                class="text-white shadow-md border-violet-500 bg-violet-500 btn dropdown-toggle focus:ring focus:ring-blue-50 focus:bg-violet-700 dark:focus:ring-blue-500/40 shadow-violet-100"
                                                id="dropdownMenu1" data-bs-toggle="dropdown">
                                                <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <ul class="absolute top-auto z-50 hidden py-2 text-left list-none bg-white border border-transparent rounded shadow-md ltr:left-0 ltr:right-auto rtl:right-0 rtl:left-auto dropdown-menu w-36 bg-clip-padding dark:bg-zinc-700 dark:border-zinc-600"
                                                aria-labelledby="dropdownMenu1">
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Updates</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Social</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="relative dropdown">
                                            <button type="button"
                                                class="text-white shadow-md border-violet-500 bg-violet-500 btn dropdown-toggle focus:ring focus:ring-blue-50 focus:bg-violet-700 dark:focus:ring-blue-500/40 shadow-violet-100"
                                                id="dropdownMenu2" data-bs-toggle="dropdown">
                                                <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <ul class="absolute top-auto z-50 hidden py-2 text-left list-none bg-white border border-transparent rounded shadow-md ltr:left-0 ltr:right-auto rtl:right-0 rtl:left-auto dropdown-menu w-36 bg-clip-padding dark:bg-zinc-700 dark:border-zinc-600"
                                                aria-labelledby="dropdownMenu2">
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Updates</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href=" #">Social</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Team Manage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="relative dropdown">
                                            <button type="button"
                                                class="text-white shadow-md border-violet-500 bg-violet-500 btn dropdown-toggle focus:ring focus:ring-blue-50 focus:bg-violet-700 dark:focus:ring-blue-500/40 shadow-violet-100"
                                                id="dropdownMenu3" data-bs-toggle="dropdown">
                                                <span>More <i class="mdi mdi-dots-vertical ltr:ml-2 rtl:mr-2"></i></span>
                                            </button>
                                            <ul class="absolute top-auto z-50 hidden py-2 text-left list-none bg-white border border-transparent rounded shadow-md ltr:left-0 ltr:right-auto rtl:right-0 rtl:left-auto dropdown-menu w-36 bg-clip-padding dark:bg-zinc-700 dark:border-zinc-600"
                                                aria-labelledby="dropdownMenu3">
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Mark as Unread</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Mark as Important</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Add to Tasks</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Add Star</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-[5px] text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-gray-100 dark:hover:bg-zinc-600/50 hover:bg-gray-50/30"
                                                        href="#">Mute</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <ul class="block">
                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Peter,
                                                me (3)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">Hello
                                                – <span class="teaser">Trip home from Colombo has been arranged, then Jenna
                                                    will come get me from Stockholm. :)</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 6</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">me,
                                                Susanna (7)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                <span
                                                    class="ltr:mr-2 rtl:ml-2 bg-yellow-500 px-1.5 py-0 rounded text-11 text-white font-medium">Freelance</span>
                                                Since you asked... and i'minconceivably bored at the train station –
                                                <span class="teaser">Alright thanks. I'll have to re-book that somehow,
                                                    i'll get back to you.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 6</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Web
                                                Support Dennis</a><span
                                                class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Re: New mail settings – <span class="teaser">Will you answer him
                                                    asap?</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 7</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">me,
                                                Peter (2)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-sky-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Support</span>
                                                Off on Thursday - <span class="teaser">Eff that place, you might as well
                                                    stay here with us instead! Sent from my iPhone 4 4 mar 2014 at 5:55
                                                    pm</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 4</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">me,
                                                Peter (2)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-violet-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Social</span>This
                                                Week's Top Stories –<span class="teaser">Our top pick for you on Medium
                                                    this week The Man Who Destroyed America’s Ego</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 28</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Death
                                                to Stock</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Montly High-Res Photos – <span class="teaser">To create this month's pack,
                                                    we hosted a party with local musician Jared Mahone here in Columbus,
                                                    Ohio.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 7</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-800 font-medium dark:text-gray-50 bg-gray-50/30 dark:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Randy,
                                                me (5)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-green-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Family</span>Last
                                                pic over my village –<span class="teaser">Yeah i'd like that! Do you
                                                    remember the video you showed me of your train ride between Colombo and
                                                    Kandy? The one with the mountain view? I would love to see that one
                                                    again!</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                5:01 am</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Andrew
                                                Zimmer</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Mochila Beta: Subscription Confirmed – <span class="teaser">You've been
                                                    confirmed! Welcome to the ruling class of the inbox. For your records,
                                                    here is a copy of the information you submitted to us...</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 8</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Infinity
                                                HR</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Sveriges Hetaste sommarjobb – <span class="teaser">Hej Nicklas Sandell! Vi
                                                    vill bjuda in dig till "First tour 2014", ett rekryteringsevent som
                                                    erbjuder jobb på 16 semesterorter iSverige.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Mar 8</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-800 dark:text-gray-50 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Revibe</a><span
                                                class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-red-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Friends</span>Weekend
                                                on Revibe –<span class="teaser">Today's Friday and we thought maybe you
                                                    want some music inspiration for the weekend. Here are some trending
                                                    tracks and playlists we think you should give a listen!</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 27</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Andrew
                                                Zimmer</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Mochila Beta: Subscription Confirmed – <span class="teaser">You've been
                                                    confirmed! Welcome to the ruling class of the inbox. For your records,
                                                    here is a copy of the information you submitted to us...</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 24</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-800 dark:text-gray-50 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Revibe</a><span
                                                class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-violet-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Social</span>Task
                                                assigned: Clone ARP's website –<span class="teaser">You have been assigned
                                                    a task by Alex@Work on the board Web.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 24</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Tobias
                                                Berggren</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Let's go fishing! – <span class="teaser">Hey, You wanna join me and Fred at
                                                    the lake tomorrow? It'll be awesome.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 23</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Charukaw,
                                                me (7)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Hey man – <span class="teaser">Nah man sorry i don't. Should i get
                                                    it?</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 23</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-800 dark:text-gray-50 font-medium bg-gray-50/30 transition-all duration-100 dark:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">me,
                                                Peter (5)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0"><span
                                                    class="ltr:mr-2 rtl:ml-2 bg-sky-500 px-1.5 py-[1px] rounded text-11 text-white font-medium">Support</span>Home
                                                again! –<span class="teaser">That's just perfect! See you tomorrow.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 21</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Stack
                                                Exchange</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                1 new items in your Stackexchange inbox – <span class="teaser">The
                                                    following items were added to your Stack Exchange global inbox since you
                                                    last checked it.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 21</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">Google
                                                Drive Team</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                You can now use your storage in Google – <span class="teaser">Hey Nicklas
                                                    Sandell! Thank you for purchasing extra storage space in Google
                                                    Drive.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 20</div>
                                        </div>
                                    </li>

                                    <li
                                        class="h-[50px] block leading-[50px] relative text-gray-700 dark:text-gray-100 hover:bg-gray-50/30 transition-all duration-100 dark:hover:bg-zinc-600">
                                        <div class="block w-80 h-[50px] leading-[50px]">
                                            <div
                                                class="block ltr:float-left rtl:float-right ltr:mr-[10px] rtl:ml-[10px] ltr:ml-5 rtl:mr-5">
                                                <input type="checkbox" id="chk19"
                                                    class="border-gray-200 cursor-pointer ring-0 checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-900 dark:checked:bg-violet-500 dark:border-zinc-500">
                                                <label for="chk19" class="toggle"></label>
                                            </div>
                                            <a href="#"
                                                class="absolute top-0 overflow-hidden ltr:right-0 rtl:left-0 ltr:left-24 rtl:right-24 whitespace-nowrap">me,
                                                Susanna (11)</a><span class="float-left far fa-star mt-[18px] ml-1"></span>
                                        </div>
                                        <div
                                            class="absolute top-0 bottom-0 ltr:right-0 rtl:left-0 ltr:float-left rtl:float-right ltr:left-80 rtl:right-80">
                                            <a href="#"
                                                class="ltr:left-0 rtl:right-0 ltr:right-[200px] rtl:left-[200px] overflow-hidden whitespace-nowrap absolute text-ellipsis top-0">
                                                Train/Bus – <span class="teaser">Yes ok, great! I'm not stuck in Stockholm
                                                    anymore, we're making progress.</span>
                                            </a>
                                            <div
                                                class="ltr:right-0 rtl:left-0 w-[170px] ltr:pl-20 rtl:pr-20 absolute top-0">
                                                Feb 19</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 mb-5">
                            <div class="col-span-7">
                                <p class="text-gray-500 dark:text-gray-200">Showing 1 - 20 of 1,524</p>
                            </div>
                            <div class="col-span-5">
                                <div class="inline-flex ltr:ltr:!float-right rtl:!float-left">
                                    <button type="button"
                                        class="px-2 py-1 text-white bg-green-500 border-green-500 btn text-13 ltr:rounded-r-none rtl:rounded-l-none focus:bg-green-600 focus:ring focus:ring-green-500/30"><i
                                            class="fa fa-chevron-left"></i></button>
                                    <button type="button"
                                        class="px-2 py-1 text-white bg-green-500 border-green-500 btn text-13 ltr:rounded-l-none rtl:rounded-r-none focus:bg-green-600 focus:ring focus:ring-green-500/30"><i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-50 hidden modal" id="composemodal" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 z-10 overflow-hidden">
                            <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
                            <div
                                class="flex items-end justify-center p-4 mx-auto text-center animate-translate sm:items-center sm:p-0 sm:w-full sm:max-w-xl ">
                                <div
                                    class="relative overflow-hidden text-left transition-all transform bg-white rounded shadow-xl dark:bg-zinc-600 w-full">
                                    <div
                                        class="flex items-center px-4 py-2 rounded-t border-gray-50 dark:border-zinc-600">
                                        <h3 class="text-lg text-gray-600 font-medium dark:text-gray-100 ">
                                            New Message
                                        </h3>
                                        <button
                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                            type="button" data-tw-dismiss="modal">
                                            <i class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                        </button>
                                    </div>
                                    <div
                                        class="p-4 text-gray-500 border-t modal-body border-gray-100/60 dark:bg-zinc-700 dark:border-zinc-600">
                                        <div class="mb-3">
                                            <input
                                                class="w-full border-gray-100 rounded placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-600 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                type="text" placeholder="To" id="example-text-input">
                                        </div>
                                        <div class="mb-3">
                                            <input
                                                class="w-full border-gray-100 rounded placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-600 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                type="text" placeholder="From" id="example-text-input">
                                        </div>
                                        <div class="mb-3">
                                            <textarea id="email-editor" name="area" aria-hidden="true" style="display: none;"></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="px-4 py-3 border-t border-gray-100/60 sm:flex sm:flex-row-reverse sm:px-6 dark:bg-zinc-700 dark:border-zinc-600">
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-[5px] mt-3 text-base font-medium text-gray-700 border border-transparent rounded btn bg-gray-50 dark:text-gray-100 hover:bg-gray-100/50 focus:bg-gray-100/50 focus:ring-2 focus:ring-gray-50 sm:mt-0 ltr:sm:ml-3 rtl:sm:mr-3 sm:w-auto sm:text-sm dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20 dark:bg-zinc-600"
                                            data-tw-dismiss="modal">Cancel</button>
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-[5px] text-base font-medium text-white border border-transparent rounded bg-violet-500 btn hover:bg-blue-600 focus:ring-2 focus:ring-blue-100 ltr:sm:ml-3 rtl:sm:mr-3 sm:w-auto sm:text-sm dark:focus:ring-violet-500/30">Save
                                            changes</button>
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
    <!-- ckeditor -->
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- init js -->
    <script>
        ClassicEditor.create(document.querySelector('#email-editor')).then(function(editor) {
            editor.ui.view.editable.element.style.height = '200px';
        }).catch(function(error) {
            console.error(error);
        });
    </script>
@endsection
