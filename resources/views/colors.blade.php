@extends('layouts.master')
@section('title')
    {{ __('Colors') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Colors" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Background colors</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-violet-50">
                                            <p class="text-xs text-gray-800 ">bg-violet-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-100">
                                            <p class="text-xs text-gray-800 ">bg-violet-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-200">
                                            <p class="text-xs text-gray-800 ">bg-violet-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-300">
                                            <p class="text-xs text-gray-800 ">bg-violet-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-400">
                                            <p class="text-xs text-gray-800 ">bg-violet-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-500">
                                            <p class="text-xs text-gray-800 ">bg-violet-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-600">
                                            <p class="text-xs text-gray-800 ">bg-violet-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-700">
                                            <p class="text-xs text-gray-800 ">bg-violet-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-800">
                                            <p class="text-xs text-gray-800 ">bg-violet-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-violet-900">
                                            <p class="text-xs text-gray-800 ">bg-violet-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-gray-50">
                                            <p class="text-xs text-gray-800 ">bg-gray-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-100">
                                            <p class="text-xs text-gray-800 ">bg-gray-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-200">
                                            <p class="text-xs text-gray-800 ">bg-gray-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-300">
                                            <p class="text-xs text-gray-800 ">bg-gray-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-400">
                                            <p class="text-xs text-gray-800 ">bg-gray-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-500">
                                            <p class="text-xs text-gray-800 ">bg-gray-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-600">
                                            <p class="text-xs text-gray-800 ">bg-gray-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-700">
                                            <p class="text-xs text-gray-800 ">bg-gray-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-800">
                                            <p class="text-xs text-gray-800 ">bg-gray-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-gray-900">
                                            <p class="text-xs text-gray-800 ">bg-gray-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-green-50">
                                            <p class="text-xs text-gray-800 ">bg-green-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-100">
                                            <p class="text-xs text-gray-800 ">bg-green-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-200">
                                            <p class="text-xs text-gray-800 ">bg-green-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-300">
                                            <p class="text-xs text-gray-800 ">bg-green-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-400">
                                            <p class="text-xs text-gray-800 ">bg-green-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-500">
                                            <p class="text-xs text-gray-800 ">bg-green-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-600">
                                            <p class="text-xs text-gray-800 ">bg-green-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-700">
                                            <p class="text-xs text-gray-800 ">bg-green-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-800">
                                            <p class="text-xs text-gray-800 ">bg-green-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-green-900">
                                            <p class="text-xs text-gray-800 ">bg-green-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-sky-50">
                                            <p class="text-xs text-gray-800 ">bg-sky-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-100">
                                            <p class="text-xs text-gray-800 ">bg-sky-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-200">
                                            <p class="text-xs text-gray-800 ">bg-sky-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-300">
                                            <p class="text-xs text-gray-800 ">bg-sky-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-400">
                                            <p class="text-xs text-gray-800 ">bg-sky-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-500">
                                            <p class="text-xs text-gray-800 ">bg-sky-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-600">
                                            <p class="text-xs text-gray-800 ">bg-sky-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-700">
                                            <p class="text-xs text-gray-800 ">bg-sky-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-800">
                                            <p class="text-xs text-gray-800 ">bg-sky-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-sky-900">
                                            <p class="text-xs text-gray-800 ">bg-sky-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-yellow-50">
                                            <p class="text-xs text-gray-800 ">bg-yellow-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-100">
                                            <p class="text-xs text-gray-800 ">bg-yellow-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-200">
                                            <p class="text-xs text-gray-800 ">bg-yellow-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-300">
                                            <p class="text-xs text-gray-800 ">bg-yellow-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-400">
                                            <p class="text-xs text-gray-800 ">bg-yellow-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-500">
                                            <p class="text-xs text-gray-800 ">bg-yellow-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-600">
                                            <p class="text-xs text-gray-800 ">bg-yellow-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-700">
                                            <p class="text-xs text-gray-800 ">bg-yellow-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-800">
                                            <p class="text-xs text-gray-800 ">bg-yellow-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-yellow-900">
                                            <p class="text-xs text-gray-800 ">bg-yellow-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-red-50">
                                            <p class="text-xs text-gray-800 ">bg-red-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-100">
                                            <p class="text-xs text-gray-800 ">bg-red-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-200">
                                            <p class="text-xs text-gray-800 ">bg-red-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-300">
                                            <p class="text-xs text-gray-800 ">bg-red-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-400">
                                            <p class="text-xs text-gray-800 ">bg-red-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-500">
                                            <p class="text-xs text-gray-800 ">bg-red-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-600">
                                            <p class="text-xs text-gray-800 ">bg-red-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-700">
                                            <p class="text-xs text-gray-800 ">bg-red-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-800">
                                            <p class="text-xs text-gray-800 ">bg-red-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-red-900">
                                            <p class="text-xs text-gray-800 ">bg-red-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center bg-neutral-50">
                                            <p class="text-xs text-gray-800 ">bg-neutral-50</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-100">
                                            <p class="text-xs text-gray-800 ">bg-neutral-100</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-200">
                                            <p class="text-xs text-gray-800 ">bg-neutral-200</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-300">
                                            <p class="text-xs text-gray-800 ">bg-neutral-300</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-400">
                                            <p class="text-xs text-gray-800 ">bg-neutral-400</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-500">
                                            <p class="text-xs text-gray-800 ">bg-neutral-500</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-600">
                                            <p class="text-xs text-gray-800 ">bg-neutral-600</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-700">
                                            <p class="text-xs text-gray-800 ">bg-neutral-700</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-800">
                                            <p class="text-xs text-gray-800 ">bg-neutral-800</p>
                                        </div>
                                        <div class="p-2 text-center bg-neutral-900">
                                            <p class="text-xs text-gray-800 ">bg-neutral-900</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Border colors</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-violet-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-violet-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-violet-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-gray-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-gray-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-gray-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-green-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-green-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-green-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-sky-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-sky-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-sky-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-yellow-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-yellow-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-yellow-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-red-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-red-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-red-900</p>
                                        </div>

                                    </div>

                                    <div class="col-span-12 md:col-span-6 xl:col-span-4">
                                        <div class="p-2 text-center border border-neutral-50">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-50</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-100">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-100</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-200">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-200</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-300">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-300</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-400">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-400</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-500">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-500</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-600">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-600</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-700">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-700</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-800">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-800</p>
                                        </div>
                                        <div class="p-2 text-center border border-neutral-900">
                                            <p class="text-xs text-gray-800 dark:text-zinc-100">border-neutral-900</p>
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
