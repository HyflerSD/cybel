@extends('layouts.master')
@section('title')
    {{ __('Flexbox & Grid ') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Flexbox & Grid" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Flex Basis</h6>
                        </div>
                        <div class="space-y-5 card-body">
                            <div class="flex flex-row gap-3 text-center">
                                <div class="p-3 rounded-md basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                </div>
                                <div class="p-3 rounded-md basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                </div>
                                <div class="p-3 rounded-md basis-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-3 text-gray-700 dark:text-gray-100">Breakpoints and media queries</h6>
                                <div class="flex flex-row gap-3 text-center">
                                    <div
                                        class="p-3 rounded-md basis-1/2 lg:basis-1/3 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        01</div>
                                    <div
                                        class="p-3 rounded-md basis-1/2 lg:basis-1/4 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        02</div>
                                    <div
                                        class="p-3 rounded-md basis-1/2 lg:basis-1/2 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        03</div>
                                    <div
                                        class="p-3 rounded-md basis-1/2 lg:basis-1/1 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        03</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Flex Direction</h6>
                        </div>
                        <div class="space-y-4 card-body">
                            <div class="flex flex-row gap-3 text-center">
                                <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01</div>
                                <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02</div>
                                <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03</div>
                            </div>
                            <div>
                                <h6 class="mb-3 text-gray-700 dark:text-gray-100 text-end">Row reversed</h6>
                                <div class="flex flex-row-reverse gap-3 text-center">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Column</h6>
                                    <div class="flex flex-col gap-3 text-center">
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Column reversed</h6>
                                    <div class="flex flex-col-reverse gap-3 text-center">
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Flex Wrap</h6>
                        </div>
                        <div class="space-y-4 card-body overflow-hidden">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Don't wrap</h6>
                                    <div class="flex flex-row w-full gap-4 pb-4 overflow-x-scroll flex-nowrap">
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Wrap normally</h6>
                                    <div class="flex flex-row flex-wrap w-full gap-4 pb-4">
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Wrap reversed</h6>
                                    <div class="flex flex-row flex-wrap-reverse w-full gap-4 pb-4">
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="px-16 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Flex</h6>
                        </div>
                        <div class="space-y-4 card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Initial flex</h6>
                                    <div class="flex gap-3 text-center">
                                        <div
                                            class="flex-none py-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01
                                        </div>
                                        <div
                                            class="flex-initial w-64 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02
                                        </div>
                                        <div
                                            class="flex-initial w-32 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Flex 1</h6>
                                    <div class="flex gap-3 text-center">
                                        <div
                                            class="flex-none px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 h-14">
                                            01
                                        </div>
                                        <div
                                            class="flex-1 w-64 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02
                                        </div>
                                        <div
                                            class="flex-1 w-32 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Auto</h6>
                                    <div class="flex gap-3 text-center">
                                        <div
                                            class="flex-none p-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100 h-14">
                                            01
                                        </div>
                                        <div
                                            class="flex-auto w-64 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02
                                        </div>
                                        <div
                                            class="flex-auto w-32 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Order</h6>
                        </div>
                        <div class="space-y-4 card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="flex justify-between gap-3">
                                        <div
                                            class="order-last px-20 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div class="px-20 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div class="px-20 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Grid Template</h6>
                        </div>
                        <div class="space-y-4 card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Grid Columns</h6>
                                    <div class="grid grid-cols-4 gap-3 text-center">
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">06
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">07
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">08
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">09
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">Grid Rows</h6>
                                    <div class="grid grid-flow-col grid-rows-4 gap-3 text-center">
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">06
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">07
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">08
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">09
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Gap</h6>
                        </div>
                        <div class="space-y-4 card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="grid grid-cols-2 gap-4 text-center">
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="grid grid-cols-3 text-center gap-x-8 gap-y-4">
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                        <div class="py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">06
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Justify Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="flex justify-start gap-3">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                    </div>
                                </div>
                                <div class="flex justify-center gap-3">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                    </div>
                                </div>
                                <div class="flex justify-end gap-3">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                    </div>
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Justify Items</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid gap-3 justify-items-start">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                </div>
                                <div class="grid gap-3 justify-items-center">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                </div>
                                <div class="grid gap-3 justify-items-end">
                                    <div class="px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                    </div>
                                </div>
                                <div class="flex gap-3 mt-4 justify-items-stretch">
                                    <div
                                        class="w-full px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        01</div>
                                    <div
                                        class="w-full px-5 py-4 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                        02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Align Content</h6>
                            </div>
                            <div class="space-y-5 card-body">
                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">content-start</h6>
                                    <div
                                        class="grid content-start h-56 grid-cols-3 gap-4 text-center bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">content-center</h6>
                                    <div
                                        class="grid content-center h-56 grid-cols-3 gap-4 text-center bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">content-end</h6>
                                    <div
                                        class="grid content-end h-56 grid-cols-3 gap-4 text-center bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">content-between</h6>
                                    <div
                                        class="grid content-between h-56 grid-cols-3 gap-4 text-center bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">content-around</h6>
                                    <div
                                        class="grid content-around h-56 grid-cols-3 gap-4 text-center bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">01
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">02
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">03
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">04
                                        </div>
                                        <div class="py-3 rounded-md bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">05
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Place Content</h6>
                            </div>
                            <div class="space-y-5 card-body">
                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">place-content-start</h6>
                                    <div
                                        class="h-56 grid grid-cols-[repeat(2,56px)] place-content-start gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            04</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">place-content-center</h6>
                                    <div
                                        class="h-56 grid grid-cols-[repeat(2,56px)] place-content-center gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            04</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">place-content-between</h6>
                                    <div
                                        class="h-56 grid grid-cols-[repeat(2,56px)] place-content-between gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            04</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">place-content-around</h6>
                                    <div
                                        class="h-56 grid grid-cols-[repeat(2,56px)] place-content-around gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            04</div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3 text-gray-700 dark:text-gray-100">place-content-evenly</h6>
                                    <div
                                        class="h-56 grid grid-cols-[repeat(2,56px)] place-content-evenly gap-4 bg-gray-50/30 dark:bg-zinc-700/80">
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            01</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            02</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            03</div>
                                        <div
                                            class="flex items-center justify-center p-4 rounded-md w-14 h-14 bg-gray-50 dark:bg-zinc-600 dark:text-gray-100">
                                            04</div>
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
