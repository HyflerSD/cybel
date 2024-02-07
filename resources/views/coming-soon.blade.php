@extends('layouts.master-without-nav')
@section('title')
    {{ __('Coming soon') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="h-screen coming-soon swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ URL::asset('build/images/bg-1.jpg') }}" class="h-full w-full object-cover" alt="">
                    <div class="absolute inset-0 bg-overlay bg-violet-500/60"></div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ URL::asset('build/images/bg-2.jpg') }}" class="h-full w-full object-cover" alt="">
                    <div class="absolute inset-0 bg-overlay bg-violet-500/60"></div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ URL::asset('build/images/bg-3.jpg') }}" class="h-full w-full object-cover" alt="">
                    <div class="absolute inset-0 bg-overlay bg-violet-500/60"></div>
                </div>
            </div>
            <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <div class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" aria-current="true">
                </div>
                <div class="swiper-pagination-bullet" tabindex="1">2</div>
                <div class="swiper-pagination-bullet" tabindex="2">3</div>
            </div>
        </div>
        <div class="container fixed top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] z-50">
            <div class="flex justify-center">
                <div class="w-full md:max-w-4xl lg:px-9">
                    <div class="mb-5 text-center">
                        <a href="{{ url('index') }}">
                            <img src="{{ URL::asset('build/images/logo-sm.svg') }}" alt="" class="inline-block mx-auto h-7"><span
                                class="ml-2 font-semibold text-white align-middle text-22">Minia</span>
                        </a>
                    </div>
                    <div class="text-center">
                        <h2 class=" text-21 lg:text-2xl mt-8 text-white mb-2">Let's get started with Minia</h2>
                        <p class="text-base text-white/50">Donec pede justo fringilla vel aliquet nec vulputate eget arcu.
                            In enim justo, rhoncus ut imperdiet a <br> venenatis vitae, justo felis</p>
                    </div>
                    <div class="mt-4">
                        <div class="p-5">
                            <div id="countdown">
                                <div class="flex justify-center gap-8 text-center">
                                    <div class=" w-[25%]">
                                        <div class="relative coming-box">
                                            <div class="mb-2 font-medium count-title text-18 text-white/50">Days</div>
                                            <div class="px-2 py-6 text-16 lg:text-4xl font-semibold text-gray-600 bg-white rounded-lg dark:bg-zinc-800 dark:text-gray-100"
                                                id="days">
                                            </div>
                                            <div
                                                class="absolute text-white block text-lg lg:text-4xl font-medium top-[50%] -translate-y-1 -right-5 z-50">
                                                :</div>
                                        </div>
                                    </div>
                                    <div class=" w-[25%]">
                                        <div class="relative coming-box">
                                            <div class="mb-2 font-medium count-title text-18 text-white/50">Hours</div>
                                            <div class="px-2 py-6 text-16 lg:text-4xl font-semibold text-gray-600 bg-white rounded-lg dark:bg-zinc-800 dark:text-gray-100"
                                                id="hours">
                                            </div>
                                            <div
                                                class="absolute text-white block text-lg lg:text-4xl font-medium top-[50%] -translate-y-1 -right-5 z-50">
                                                :</div>
                                        </div>
                                    </div>
                                    <div class=" w-[25%]">
                                        <div class="relative coming-box">
                                            <div class="mb-2 font-medium count-title text-18 text-white/50">Minutes</div>
                                            <div class="px-2 py-6 text-16 lg:text-4xl font-semibold text-gray-600 bg-white rounded-lg dark:bg-zinc-800 dark:text-gray-100"
                                                id="minutes">
                                            </div>
                                            <div
                                                class="absolute text-white block text-lg lg:text-4xl font-medium top-[50%] -translate-y-1 -right-5 z-50">
                                                :</div>
                                        </div>
                                    </div>
                                    <div class=" w-[25%]">
                                        <div class="relative coming-box">
                                            <div class="mb-2 font-medium count-title text-18 text-white/50">Seconds</div>
                                            <div class="px-2 py-6 text-16 lg:text-4xl font-semibold text-gray-600 bg-white rounded-lg dark:bg-zinc-800 dark:text-gray-100"
                                                id="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full lg:w-80 mx-auto">
                            <form class="relative flex mt-5">
                                <input type="text"
                                    class="w-full py-2 rounded-md form-control placeholder:text-gray-400 placeholder:text-14 pr-14 dark:bg-zinc-800 dark:text-gray-100 dark:border-zinc-600"
                                    placeholder="Enter your email address">
                                <button class="w-9 h-9 top-1 right-1 text-white rounded-md bg-violet-500 absolute"
                                    type="button"><i class="align-middle bx bx-paper-plane"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/swiper.js') }}"></script>
@endsection
