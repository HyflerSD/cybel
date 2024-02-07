@extends('layouts.master-without-nav')
@section('title')
    {{ __('Two stap verification') }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="relative z-50 col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3">
                    <div class="w-full p-10 bg-white xl:p-12 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class="mx-auto ">
                                <a href="{{ url('index') }}" class="">
                                    <img src="{{ URL::asset('build/images/logo-sm.svg') }}" alt="" class="inline h-8"> <span
                                        class="text-xl font-medium align-middle ltr:ml-2 rtl:mr-2 dark:text-white">Minia</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div>
                                    <div class="w-16 h-16 mx-auto text-center rounded-full bg-gray-500/10 text-primary">
                                        <i class="bx bxs-envelope text-3xl leading-[2.2]  text-violet-500"></i>
                                    </div>
                                </div>

                                <div class="mt-6 text-center">
                                    <h4 class="text-gray-700 text-21 dark:text-gray-100">Verify your email</h4>
                                    <p class="mt-2 mb-5 text-gray-500 dark:text-zinc-100">Please enter the 4 digit code sent
                                        to <span
                                            class="font-semibold text-gray-600 dark:text-gray-100">example@abc.com</span>
                                    </p>
                                </div>

                                <div class="grid grid-cols-4 gap-6">
                                    <div class="mb-3">
                                        <label class="invisible">Dight 1</label>
                                        <input type="text" data-value="1" maxlength="1"
                                            class="w-full py-3 text-center border-gray-100 rounded-md  dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100 focus:ring focus:ring-violet-500/20 focus:border-violet-100">
                                    </div>

                                    <div class="mb-3">
                                        <label class="invisible">Dight 1</label>
                                        <input type="text" data-value="1" maxlength="1"
                                            class="w-full py-3 text-center border-gray-100 rounded-md  dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100 focus:ring focus:ring-violet-500/20 focus:border-violet-100">
                                    </div>

                                    <div class="mb-3">
                                        <label class="invisible">Dight 1</label>
                                        <input type="text" data-value="1" maxlength="1"
                                            class="w-full py-3 text-center border-gray-100 rounded-md  dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100 focus:ring focus:ring-violet-500/20 focus:border-violet-100">
                                    </div>

                                    <div class="mb-3">
                                        <label class="invisible">Dight 1</label>
                                        <input type="text" data-value="1" maxlength="1"
                                            class="w-full py-3 text-center border-gray-100 rounded-md  dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100 focus:ring focus:ring-violet-500/20 focus:border-violet-100">
                                    </div>

                                </div>


                                <div class="mt-5 text-center">
                                    <a href="{{ url('auth-login') }}"
                                        class="btn border-transparent bg-violet-500 py-2.5 text-white shadow-md shadow-violet-500/50 w-full dark:shadow-zinc-700">Confirm</a>
                                </div>

                                <div class="mt-10 text-center">
                                    <p class="mb-0 text-gray-500 dark:text-zinc-100">Didn't receive an email ? <a
                                            href="#" class="font-semibold text-primary"> Resend </a> </p>
                                </div>
                            </div>


                            <div class="text-center ">
                                <p class="relative mb-5 text-gray-500 dark:text-gray-100">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Minia . Crafted with <i class="text-red-400 mdi mdi-heart"></i>
                                    by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="absolute top-0 left-0 w-full h-full overflow-hidden bg-bubbles animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="flex items-center justify-center h-screen">
                            <div class="w-full md:max-w-4xl lg:px-9">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="w-12 h-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="w-12 h-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Mariya Willam</h5>
                                                    <p class="mb-0 text-white/50">Designer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" class="w-12 h-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Jiya Jons</h5>
                                                    <p class="mb-0 text-white/50">Developer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/login.init.js') }}"></script>
@endsection
