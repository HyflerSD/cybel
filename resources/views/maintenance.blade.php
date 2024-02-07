@extends('layouts.master-without-nav')
@section('title')
    {{ __('Maintenance') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="flex items-center justify-center min-h-screen py-12 bg-gray-50/30 dark:bg-zinc-700">
            <div class="py-6 lg:py-4">
                <div class="container mx-auto">
                    <div class="grid justify-center grid-cols-12">
                        <div class="col-span-12">
                            <div class="mb-5 text-center">
                                <a href="{{ url('index') }}">
                                    <img src="{{ URL::asset('build/images/logo-sm.svg') }}" alt=""
                                        class="inline-block mx-auto h-[30px]"><span
                                        class="font-semibold align-middle text-22 ltr:ml-2 rtl:mr-2 dark:text-gray-100">Minia</span>
                                </a>
                            </div>

                            <div class="pt-12 lg:pt-10 text-center text-violet-500 ">
                                <i class="relative mdi mdi-cog text-4xl lg:text-7xl left-3 mdi-spin"></i>
                                <i class="relative text-[33px] lg:text-6xl mdi mdi-cog -top-6 lg:-top-8 mdi-spin"></i>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl lg:text-2xl mt-8 text-gray-700 dark:text-gray-100 mb-2">Site is Under
                                    Maintenance</h3>
                                <p class="text-gray-700 dark:text-zinc-100">Please check back in sometime.</p>
                            </div>
                            <div class="mt-12">
                                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:max-w-6xl">
                                    <div class="m-6">
                                        <div class="text-center">
                                            <div
                                                class="w-12 h-12 mx-auto text-center rounded-full bg-violet-500/30 dark:bg-violet-500/20">
                                                <i
                                                    class="text-2xl leading-loose mdi mdi-access-point-network text-violet-500"></i>
                                            </div>
                                            <h5 class="mt-6 font-semibold text-gray-700 text-15 dark:text-gray-100">WHY IS
                                                THE SITE DOWN?</h5>
                                            <p class="mt-2 text-gray-500 text-14 dark:text-zinc-100">There are many
                                                variations of passages of
                                                Lorem Ipsum available, but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                    <div class="m-6">
                                        <div class="text-center">
                                            <div
                                                class="w-12 h-12 mx-auto text-center rounded-full bg-violet-500/30 dark:bg-violet-500/20">
                                                <i class="text-2xl leading-loose mdi mdi-clock-outline text-violet-500"></i>
                                            </div>
                                            <h5 class="mt-6 font-semibold text-gray-700 text-15 dark:text-gray-100">WHAT IS
                                                THE DOWNTIME?</h5>
                                            <p class="mt-2 text-gray-500 text-14 dark:text-zinc-100">Contrary to popular
                                                belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                                classical.</p>
                                        </div>
                                    </div>
                                    <div class="m-6">
                                        <div class="text-center">
                                            <div
                                                class="w-12 h-12 mx-auto text-center rounded-full bg-violet-500/30 dark:bg-violet-500/20">
                                                <i class="text-2xl leading-loose mdi mdi-email-outline text-violet-500"></i>
                                            </div>
                                            <h5 class="mt-6 font-semibold text-gray-700 text-15 dark:text-gray-100">DO YOU
                                                NEED SUPPORT?</h5>
                                            <p class="mt-2 text-gray-500 text-14 dark:text-zinc-100">There are many
                                                variations of passages of
                                                Lorem Ipsum available, but the majority have suffered alteration. <span><a
                                                        href="mailto:no-reply@domain.com"
                                                        class="border-b border-violet-500 text-violet-500 dark:text-gray-50 dark:border-gray-50">no-reply@domain.com</a></span>
                                            </p>
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
@endsection
