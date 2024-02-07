@extends('layouts.master')
@section('title')
    {{ __('Modals') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Modals" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 dark:text-gray-100">Modals Examples</h6>
                        </div>
                        <div class="card-body">
                            <div>
                                <div
                                    class="relative mx-auto overflow-hidden text-left transition-all transform bg-white border rounded-md modal border-gray-50 sm:my-8 sm:w-full sm:max-w-lg dark:border-zinc-600 dark:bg-zinc-700 ">
                                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700 ">
                                        <div class="sm:flex sm:items-start">
                                            <div
                                                class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                                <!-- Heroicon name: outline/exclamation-triangle -->
                                                <i class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                            </div>
                                            <div
                                                class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                    id="modal-title">Deactivate account</h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500 dark:text-zinc-100/60">Are you sure you
                                                        want to deactivate your account? All of your data will be
                                                        permanently removed. This action cannot be undone.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-4 py-3 border-t border-gray-50 sm:flex ltr:sm:flex-row-reverse sm:px-6 dark:bg-zinc-600 dark:border-zinc-600">
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-red-500/30">Deactivate</button>
                                        <button type="button"
                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Fullscreen Modal</h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-id_SingleAction">Fullscreen Modal</button>

                                <div class="relative z-50 hidden modal" id="modal-id_SingleAction"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
                                        <div class="flex h-screen">
                                            <div
                                                class="relative w-screen overflow-hidden text-left transition-all bg-white rounded-lg shadow-xl dark:bg-zinc-800">
                                                <div class="pt-20 bg-white dark:bg-zinc-800">
                                                    <div class="p-5 sm:flex sm:items-start">
                                                        <div
                                                            class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0 dark:bg-red-500/20">
                                                            <i class="text-xl text-red-500 mdi mdi-block-helper me-2"></i>
                                                        </div>
                                                        <div
                                                            class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                id="modal-title">Deactivate account</h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm text-gray-500 dark:text-zinc-100/60">Are
                                                                    you sure you want to deactivate your account? All of
                                                                    your data will be permanently removed. This action
                                                                    cannot be undone.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-5 sm:flex sm:items-start">
                                                        <div
                                                            class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-yellow-50 sm:mx-0 sm:h-10 sm:w-10 dark:bg-yellow-500/20">
                                                            <i
                                                                class="text-xl text-yellow-500 mdi mdi-alert-outline me-2"></i>
                                                        </div>
                                                        <div
                                                            class="mt-3 sm:mt-0 ltr:sm:ml-4 rtl:mr-4 ltr:sm:text-left rtl:text-right">
                                                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                id="modal-title">Warning your account</h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm text-gray-500 dark:text-zinc-100/60">With
                                                                    less than a month to go before the European Union enacts
                                                                    new consumer privacy laws for its citizens, companies
                                                                    around<br> the world are updating their terms of service
                                                                    agreements to comply.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-5 sm:flex sm:items-start">
                                                        <div
                                                            class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-sky-50 sm:mx-0 sm:h-10 sm:w-10 dark:bg-sky-500/20">
                                                            <i class="text-xl mdi mdi-check-all me-2 text-sky-500"></i>
                                                        </div>
                                                        <div
                                                            class="mt-3 sm:mt-0 ltr:sm:ml-4 rtl:mr-4 ltr:sm:text-left rtl:text-right">
                                                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                id="modal-title">Active account</h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm text-gray-500 dark:text-zinc-100/60">It
                                                                    requires organizations to notify users as soon as
                                                                    possible of high-risk data breaches that could
                                                                    personally affect them.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fixed bottom-0 right-0 p-5">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm btn hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Single action</h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-idCenter">Centered with single
                                    action</button>

                                <div class="relative z-50 hidden modal" id="modal-idCenter" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-hidden">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto text-center animate-translate sm:max-w-lg">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-700 dark:border-zinc-600">
                                                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                                                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                                                        <i
                                                            class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                                                    </div>
                                                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">Payment
                                                        Successful</h2>
                                                    <p class="mt-2 text-gray-500 dark:text-zinc-100/60">Use the modal
                                                        component to show interactive dialogs and notifications to your
                                                        website users available in multiple sizes, colors, and styles</p>
                                                    <div class="mt-6">
                                                        <a href="{{ url('index') }}" type="button"
                                                            class="text-white btn bg-violet-500 border-violet-500">Go back
                                                            to dashboard</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Centered with wide buttons</h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50 focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-id_wideButton">Wide buttons</button>
                                <div class="relative z-50 hidden modal" id="modal-id_wideButton"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-hidden">
                                        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
                                        <div
                                            class="flex items-end justify-center min-h-screen p-4 text-center animate-translate sm:items-center sm:p-0">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl -top-10 sm:my-8 sm:w-full sm:max-w-lg dark:bg-zinc-700">
                                                <div class="p-5 text-center bg-white dark:bg-zinc-700">
                                                    <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                                                        <i
                                                            class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                                                    </div>
                                                    <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">Payment
                                                        Successful</h2>
                                                    <p class="mt-2 text-gray-500 dark:text-zinc-100/60">Use the modal
                                                        component to show interactive dialogs and notifications to your
                                                        website users available in multiple sizes, colors, and styles</p>
                                                    <div
                                                        class="justify-center px-4 py-3 mt-5 border-gray-50 sm:flex sm:px-6">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Simple Modal with button position</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div>
                                        <button type="button"
                                            class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                            data-tw-toggle="modal" data-tw-target="#modal-idsimple">Simple alert</button>

                                        <div class="relative z-50 hidden modal" id="modal-idsimple"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed inset-0 z-50 overflow-hidden">
                                                <div
                                                    class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                                </div>
                                                <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                                    <div
                                                        class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600 ">
                                                        <div
                                                            class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700">
                                                            <div class="sm:flex sm:items-start">
                                                                <div
                                                                    class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                                                    <!-- Heroicon name: outline/exclamation-triangle -->
                                                                    <i
                                                                        class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                                                </div>
                                                                <div
                                                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                        id="modal-title">Deactivate account</h3>
                                                                    <div class="mt-2">
                                                                        <p
                                                                            class="text-sm text-gray-500 dark:text-zinc-100/60">
                                                                            Are you sure you want to deactivate your
                                                                            account? All of your data will be permanently
                                                                            removed. This action cannot be undone.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-4 py-3 mb-2 sm:flex ltr:sm:flex-row-reverse sm:px-6">
                                                            <button type="button"
                                                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                                                            <button type="button"
                                                                class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                                data-tw-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="text-gray-800 bg-gray-100 border-gray-100 btn hover:bg-gray-200 focus:ring ring-gray-50 focus:bg-gray-200 dark:focus:ring-zinc-500/20 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                            data-tw-toggle="modal" data-tw-target="#modal-idsimple2">Simple alert
                                            2</button>

                                        <div class="relative z-50 hidden modal" id="modal-idsimple2"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed inset-0 z-50 overflow-hidden">
                                                <div
                                                    class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                                </div>
                                                <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                                    <div
                                                        class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                        <div
                                                            class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700 ">
                                                            <div class="sm:flex sm:items-start">
                                                                <div
                                                                    class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                                                    <i
                                                                        class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                                                </div>
                                                                <div
                                                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                        id="modal-title">Deactivate account</h3>
                                                                    <div class="mt-2">
                                                                        <p
                                                                            class="text-sm text-gray-500 dark:text-zinc-100/60">
                                                                            Are you sure you want to deactivate your
                                                                            account? All of your data will be permanently
                                                                            removed. This action cannot be undone.</p>
                                                                    </div>
                                                                    <div class="gap-4 mt-4 sm:flex">
                                                                        <button type="button"
                                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                                        <button type="button"
                                                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                                            data-tw-dismiss="modal">Cancel</button>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Simple with dismiss button</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <div>
                                        <button type="button"
                                            class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                            data-tw-toggle="modal" data-tw-target="#modal-id_dismiss">Dismiss
                                            button</button>
                                        <div class="relative z-50 hidden modal" id="modal-id_dismiss"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed inset-0 z-50 overflow-hidden">
                                                <div
                                                    class="fixed inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                                </div>
                                                <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                                    <div
                                                        class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                        <div
                                                            class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700">
                                                            <div class="sm:flex sm:items-start">
                                                                <div
                                                                    class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                                                    <i
                                                                        class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                                                </div>
                                                                <div
                                                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                                    <div class="flex flex-wrap items-center">
                                                                        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100"
                                                                            id="modal-title">Deactivate account</h3>
                                                                        <button
                                                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 ltr:ml-auto rtl:mr-auto dark:bg-zinc-600 dark:text-gray-100"
                                                                            type="button" data-tw-dismiss="modal">
                                                                            <i
                                                                                class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <p
                                                                            class="text-sm text-gray-500 dark:text-zinc-100/60">
                                                                            Are you sure you want to deactivate your
                                                                            account? All of your data will be permanently
                                                                            removed. This action cannot be undone.</p>
                                                                    </div>
                                                                    <div class="mt-4 ">
                                                                        <button type="button"
                                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="text-gray-800 bg-gray-100 border-gray-100 btn hover:bg-gray-200 focus:ring ring-gray-50 focus:bg-gray-200 dark:focus:ring-zinc-500/20 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                            data-tw-toggle="modal" data-tw-target="#modal-id_dismiss2">Dismiss button
                                            2</button>
                                        <div class="relative z-50 hidden modal" id="modal-id_dismiss2"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed inset-0 z-50 overflow-hidden">
                                                <div
                                                    class="fixed inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                                </div>
                                                <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                                    <div
                                                        class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                        <div class="bg-white dark:bg-zinc-700">
                                                            <div
                                                                class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-600">
                                                                <h3
                                                                    class="text-xl font-semibold text-gray-900 dark:text-gray-100 ">
                                                                    Modal title
                                                                </h3>
                                                                <button
                                                                    class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600 dark:text-gray-100"
                                                                    type="button" data-tw-dismiss="modal">
                                                                    <i
                                                                        class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                                </button>
                                                            </div>
                                                            <div class="p-6 space-y-6">
                                                                <p
                                                                    class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/80">
                                                                    Beautifully designed, expertly crafted components that
                                                                    follow all accessibility best practices and are easy to
                                                                    customize.
                                                                </p>
                                                                <p
                                                                    class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/80">
                                                                    Interactive examples for React and Vue powered by
                                                                    Headless UI, plus vanilla HTML if you’d rather write any
                                                                    necessary JS yourself.Every example is fully responsive
                                                                    and carefully designed and implemented to look great at
                                                                    any screen size.
                                                                </p>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div
                                                                class="flex items-center gap-3 p-5 space-x-2 border-t rounded-b border-gray-50 dark:border-zinc-600">
                                                                <button type="button"
                                                                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                                <button type="button"
                                                                    class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                                    data-tw-dismiss="modal">Cancel</button>
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
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Pop-up modal</h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-idPopup">Pop-up modal</button>

                                <div class="relative z-50 hidden modal" id="modal-idPopup" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-hidden">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600 dark:text-gray-100"
                                                        data-tw-dismiss="modal">
                                                        <i
                                                            class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                    </button>
                                                    <div class="p-4 text-center">
                                                        <i
                                                            class="text-6xl text-gray-300 mdi mdi-alert-circle-outline dark:text-gray-100"></i>
                                                        <h4 class="mt-4 text-gray-600 dark:text-gray-100">Are you sure you
                                                            want to delete this product?</h4>
                                                    </div>
                                                    <div class="px-4 py-3 mt-4 text-center">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm btn hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Form element modal</h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-id_form">Form element</button>

                                <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600"
                                                        data-tw-dismiss="modal">
                                                        <i
                                                            class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                    </button>
                                                    <div class="p-5">
                                                        <h3
                                                            class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">
                                                            Sign in to minia</h3>
                                                        <form class="space-y-4" action="#">
                                                            <div>
                                                                <label for="email"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Your
                                                                    email</label>
                                                                <input type="email" name="email" id="email"
                                                                    class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0"
                                                                    placeholder="name@company.com" required>
                                                            </div>
                                                            <div>
                                                                <label for="password"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Your
                                                                    password</label>
                                                                <input type="password" name="password" id="password"
                                                                    placeholder="••••••••"
                                                                    class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0"
                                                                    required>
                                                            </div>
                                                            <div class="flex justify-between mt-5">
                                                                <div class="flex items-start">
                                                                    <div class="flex items-center h-5">
                                                                        <input id="remember" type="checkbox"
                                                                            value=""
                                                                            class="w-4 h-4 border border-gray-300 rounded ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-500 dark:checked:bg-violet-500"
                                                                            required>
                                                                    </div>
                                                                    <label for="remember"
                                                                        class="text-sm font-medium text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-100">Remember
                                                                        me</label>
                                                                </div>
                                                                <a href="#"
                                                                    class="text-sm font-medium text-violet-500 hover:text-violet-600 ">Forgot
                                                                    Password ?</a>
                                                            </div>
                                                            <div class="mt-6">
                                                                <button type="submit"
                                                                    class="w-full text-white bg-red-600 border-transparent btn">Don't
                                                                    have an account ?</button>
                                                            </div>
                                                            <div
                                                                class="mt-4 text-sm font-medium text-gray-500 dark:text-zinc-100/60 dark:text-gray-300">
                                                                Not registered? <a href="#"
                                                                    class="text-blue-700 hover:underline dark:text-blue-500">Signup
                                                                    now</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Sizes </h6>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-wrap gap-2">
                                    <button type="button"
                                        class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                        data-tw-toggle="modal" data-tw-target="#modal-idSmallmodal">small-modal</button>
                                    <button type="button"
                                        class="text-gray-800 bg-gray-100 border-gray-100 btn hover:bg-gray-200 focus:ring ring-gray-50 focus:bg-gray-200"
                                        data-tw-toggle="modal" data-tw-target="#modal-idmediummodal">medium-modal</button>
                                    <button type="button"
                                        class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 focus:ring ring-green-200 focus:bg-green-600"
                                        data-tw-toggle="modal" data-tw-target="#modal-idlargemodal">large-modal</button>
                                    <button type="button"
                                        class="text-white bg-red-500 border-red-500 btn hover:bg-red-600 focus:ring ring-red-200 focus:bg-red-600"
                                        data-tw-toggle="modal"
                                        data-tw-target="#modal-idextralargemodal">extralarge-modal</button>
                                </div>

                                <div class="relative z-50 hidden modal" id="modal-idSmallmodal"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-sm">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-600">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 dark:text-gray-100 ">
                                                            Modal title
                                                        </h3>
                                                        <button
                                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                            type="button" data-tw-dismiss="modal">
                                                            <i
                                                                class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                        </button>
                                                    </div>
                                                    <div class="p-6 space-y-6 ltr:text-left rtl:text-right">
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Beautifully designed, expertly crafted components that follow
                                                            all accessibility best practices and are easy to customize.
                                                        </p>
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Interactive examples for React and Vue powered by Headless UI,
                                                            plus vanilla HTML if you’d rather write any necessary JS
                                                            yourself.Every example is fully responsive and carefully
                                                            designed and implemented to look great at any screen size.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center gap-3 p-5 space-x-2 border-t rounded-b border-gray-50 dark:border-zinc-600">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative z-50 hidden modal" id="modal-idmediummodal"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-md">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-600">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 dark:text-gray-100 ">
                                                            Modal title
                                                        </h3>
                                                        <button
                                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                            type="button" data-tw-dismiss="modal">
                                                            <i
                                                                class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                        </button>
                                                    </div>
                                                    <div class="p-6 space-y-6 ltr:text-left rtl:text-right">
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Beautifully designed, expertly crafted components that follow
                                                            all accessibility best practices and are easy to customize.
                                                        </p>
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Interactive examples for React and Vue powered by Headless UI,
                                                            plus vanilla HTML if you’d rather write any necessary JS
                                                            yourself.Every example is fully responsive and carefully
                                                            designed and implemented to look great at any screen size.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center gap-3 p-5 space-x-2 border-t rounded-b border-gray-50 dark:border-zinc-600">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative z-50 hidden modal" id="modal-idlargemodal"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-xl">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-600">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 dark:text-gray-100 ">
                                                            Modal title
                                                        </h3>
                                                        <button
                                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                            type="button" data-tw-dismiss="modal">
                                                            <i
                                                                class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                        </button>
                                                    </div>
                                                    <div class="p-6 space-y-6 ltr:text-left rtl:text-right">
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Beautifully designed, expertly crafted components that follow
                                                            all accessibility best practices and are easy to customize.
                                                        </p>
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Interactive examples for React and Vue powered by Headless UI,
                                                            plus vanilla HTML if you’d rather write any necessary JS
                                                            yourself.Every example is fully responsive and carefully
                                                            designed and implemented to look great at any screen size.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center gap-3 p-5 space-x-2 border-t rounded-b border-gray-50 dark:border-zinc-600">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative z-50 hidden modal" id="modal-idextralargemodal"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-4xl">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="flex items-center p-4 border-b rounded-t border-gray-50 dark:border-zinc-600">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 dark:text-gray-100 ">
                                                            Modal title
                                                        </h3>
                                                        <button
                                                            class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                            type="button" data-tw-dismiss="modal">
                                                            <i
                                                                class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                        </button>
                                                    </div>
                                                    <div class="p-6 space-y-6 ltr:text-left rtl:text-right">
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Beautifully designed, expertly crafted components that follow
                                                            all accessibility best practices and are easy to customize.
                                                        </p>
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-zinc-100/60 dark:text-gray-400">
                                                            Interactive examples for React and Vue powered by Headless UI,
                                                            plus vanilla HTML if you’d rather write any necessary JS
                                                            yourself.Every example is fully responsive and carefully
                                                            designed and implemented to look great at any screen size.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center gap-3 p-5 space-x-2 border-t rounded-b border-gray-50 dark:border-zinc-600">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:w-auto sm:text-sm">Deactivate</button>
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                                            data-tw-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 dark:text-gray-100">Toggle between modals (Multiple modal)
                                </h6>
                            </div>
                            <div class="card-body">
                                <button type="button"
                                    class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600"
                                    data-tw-toggle="modal" data-tw-target="#modal-id_Multimodal">Form element</button>

                                <div class="relative z-50 hidden modal" id="modal-id_Multimodal"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-hidden">
                                        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50"></div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="px-4 py-4 border-b modal-header border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <div class="flex items-center">
                                                            <h5>Modal 1</h5>
                                                            <button
                                                                class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                                type="button" data-tw-dismiss="modal">
                                                                <i
                                                                    class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="px-5 py-3 border-b modal-body border-gray-50 dark:border-zinc-600">
                                                        <p class="mb-3 text-gray-500 dark:text-zinc-100/60">Show a second
                                                            modal and hide this one with the button below.Use the modal
                                                            component to show interactive dialogs and notifications to your
                                                            website users available in multiple sizes, colors, and styles
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end gap-2 px-4 py-4 modal-footer">
                                                        <button type="button"
                                                            class="font-medium text-white bg-red-600 border-transparent shadow-md btn shadow-red-200 dark:shadow-zinc-500"
                                                            data-tw-target="#secondmodal" data-tw-toggle="modal"
                                                            data-tw-dismiss="modal">Open Second Modal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative z-50 hidden modal" id="secondmodal" aria-labelledby="modal-title"
                                    role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 z-50 overflow-y-auto">
                                        <div
                                            class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
                                        </div>
                                        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                            <div
                                                class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                                <div class="bg-white dark:bg-zinc-700">
                                                    <div
                                                        class="px-4 py-4 border-b modal-header border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                        <div class="flex items-center ">
                                                            <h5>Modal 2</h5>
                                                            <button
                                                                class="inline-flex items-center px-2 py-1 text-sm text-gray-400 border-transparent rounded-lg btn hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 ltr:ml-auto rtl:mr-auto dark:hover:bg-zinc-600"
                                                                type="button" data-tw-dismiss="modal">
                                                                <i
                                                                    class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="px-5 py-3 border-b modal-body border-gray-50 dark:border-zinc-600">
                                                        <p class="mb-3 text-gray-500 dark:text-zinc-100/60">Show a second
                                                            modal and hide this one with the button below.Use the modal
                                                            component to show interactive dialogs.</p>
                                                    </div>
                                                    <div class="flex justify-end gap-2 px-4 py-4 modal-footer">
                                                        <button type="button"
                                                            class="font-medium text-white bg-red-600 border-transparent shadow-md btn shadow-red-200 dark:shadow-zinc-500"
                                                            data-tw-target="#modal-id_Multimodal" data-tw-toggle="modal"
                                                            data-tw-dismiss="modal">Back to First</button>
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

                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
