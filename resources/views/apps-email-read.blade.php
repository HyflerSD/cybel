@extends('layouts.master')
@section('title')
    {{ __('Read Email') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Read Email" pagetitle="Apps" />

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
                                        class="ms-1 ltr:ltr:!float-right rtl:!float-left mt-[5px]">(18)</span></a>
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
                                    <a href="#" class="flex items-start">
                                        <img class="rounded-full ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Scott Median
                                            </p>
                                            <p class="mb-4 text-xs text-gray-500 dark:text-zinc-100">Hello</p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start">
                                        <img class="rounded-full ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Julian Rosa</p>
                                            <p class="mb-4 text-xs text-gray-500 dark:text-zinc-100">What about our next..
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start">
                                        <img class="rounded-full ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">David Medina
                                            </p>
                                            <p class="mb-4 text-xs text-gray-500 dark:text-zinc-100">Yeah everything is fine
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="flex items-start">
                                        <img class="rounded-full ltr:mr-4 rtl:ml-4 h-9 w-9"
                                            src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="">
                                        <div class="flex-grow chat-user-box">
                                            <p class="m-0 text-xs font-medium text-black dark:text-gray-100">Jay Baker</p>
                                            <p class="mb-4 text-xs text-gray-500 dark:text-zinc-100">Wow that's great</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full ">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
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

                            <div class="p-5">
                                <div class="flex items-center mb-6">
                                    <div class=" ltr:mr-4 rtl:ml-4">
                                        <img class="w-8 h-8 rounded-full" src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                            alt="Generic placeholder image">
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100">Humberto D. Champion</h5>
                                        <small class="text-gray-500 dark:text-zinc-100">support@domain.com</small>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-2 font-medium text-gray-800 text-16 dark:text-gray-100">This Week's Top
                                        Stories</h4>
                                    <p class="mb-4 text-gray-600 dark:text-zinc-100">Dear Lorem Ipsum,</p>
                                    <p class="mb-4 text-gray-600 dark:text-zinc-100">Praesent dui ex, dapibus eget mauris
                                        ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in
                                        tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat
                                        massa vulputate molestie. In at felis ac velit maximus convallis.</p>
                                    <p class="mb-4 text-gray-600 dark:text-zinc-100">Sed elementum turpis eu lorem
                                        interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed
                                        aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus
                                        fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt
                                        mi nibh sit amet lorem.</p>
                                    <p class="mb-4 text-gray-600 dark:text-zinc-100">Sincerly,</p>
                                </div>
                                <hr class="pb-4 border-gray-50 dark:border-zinc-600">
                                <div class="flex flex-wrap gap-4">
                                    <div class="card dark:border-zinc-600 overflow-hidden">
                                        <img class="h-32 " src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="">
                                        <div class="py-2 text-center">
                                            <a download="img-3" href="{{ URL::asset('build/images/small/img-3.jpg') }}"
                                                class="font-medium text-violet-500 dark:text-gray-100">Download</a>
                                        </div>
                                    </div>
                                    <div class="card dark:border-zinc-600 overflow-hidden">
                                        <img class="h-32" src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="">
                                        <div class="py-2 text-center">
                                            <a download="img-4" href="{{ URL::asset('build/images/small/img-4.jpg') }}"
                                                class="font-medium text-violet-500 dark:text-gray-100">Download</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="javascript: void(0);"
                                        class="mt-6 text-white bg-gray-500 border-transparent shadow-md btn shadow-gray-200 focus:ring focus:ring-gray-100 dark:shadow-zinc-600"><i
                                            class="mdi mdi-reply ltr:mr-1 rtl:ml-1"></i> Reply</a>
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
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
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
