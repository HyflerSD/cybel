@extends('layouts.master')
@section('title')
    {{ __('Box Icon') }}
@endsection
@section('content')

<div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">
            
<!-- page title -->
            <x-page-title title="Box Icon" pagetitle="Icons" />

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Examples</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="text-gray-700 dark:text-gray-100">Regular</h5>
                        <div class="grid grid-cols-12 gap-6 mt-6">
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6  dark:text-zinc-100 group">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sticker border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sticker
                            </div>
                           
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shield-quarter border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i>bx bx-shield-quarter
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-upside-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upside-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-laugh border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-laugh
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-meh-blank border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh-blank
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-happy-beaming border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-beaming
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shocked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shocked
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sleepy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sleepy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-confused border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-confused
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wink-smile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wink-smile
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dizzy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dizzy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-happy-heart-eyes border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-heart-eyes
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-angry border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-angry
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-smile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-smile
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tired border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tired
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cool border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cool
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-happy-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wink-tongue border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wink-tongue
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-meh-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-food-menu border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-food-menu
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-food-tag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-food-tag
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-female-sign border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-female-sign
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-male-sign border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-male-sign
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-female border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-female
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-male border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-male
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-clinic border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-clinic
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-health border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-health
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shekel border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shekel
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-yen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-yen
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-won border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-won
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pound border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pound
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-euro border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-euro
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rupee border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rupee
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-ruble border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ruble
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-lira border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lira
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bitcoin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bitcoin
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tone
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bolt-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bolt-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cake border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cake
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-spa border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-spa
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dish border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dish
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-fridge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fridge
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-image-add border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image-add
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-image-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-space-bar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-space-bar
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-alarm-add border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm-add
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-archive-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive-out
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-archive-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive-in
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-add-to-queue border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-add-to-queue
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-radius border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-radius
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-check-shield border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-shield
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-label border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-label
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-file-find border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file-find
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-face border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-face
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-extension border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-extension
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-exit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-exit
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-conversation border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-conversation
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sort-z-a border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-z-a
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sort-a-z border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-a-z
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-printer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-printer
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-radio border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-customize border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-customize
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-brush-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brush-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-briefcase-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase-alt-2
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-time-five border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-time-five
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pie-chart-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart-alt-2
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-gas-pump border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-gas-pump
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mobile-vibration border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-vibration
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mobile-landscape border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-landscape
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-all border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-all
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-bottom border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-bottom
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-top border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-top
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-border-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-border-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dialpad-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dialpad-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-filter-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-filter-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-brightness border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brightness
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-brightness-half border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brightness-half
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wifi-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wifi-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-credit-card-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-credit-card-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-band-aid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-band-aid
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hive border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hive
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-map-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map-pin
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-line-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-line-chart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-receipt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-receipt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-purchase-tag-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-purchase-tag-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-basket border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-basket
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-palette border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-palette
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-no-entry border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-no-entry
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-alt-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-alt-dots
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-check-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-log-out-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-out-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-log-in-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-in-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-doughnut-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-doughnut-chart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-building-house border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-building-house
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-accessibility border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-accessibility
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-voice border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-voice
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cuboid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cuboid
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cube-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cube-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-polygon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-polygon
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-square-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-square-rounded
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-error-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shield-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield-alt-2
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paint-roll border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paint-roll
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-droplet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-droplet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-street-view border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-street-view
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-plus-medical border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus-medical
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-search-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search-alt-2
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bowling-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bowling-ball
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dna border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dna
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cycling border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cycling
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shape-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-down-arrow-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-up-arrow-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-arrow-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-arrow-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-lock-open-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-open-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-lock-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cylinder border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cylinder
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pyramid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pyramid
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-comment-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-comment-dots
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-comment border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-comment
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-landscape border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-landscape
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-book-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-open
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-transfer-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-transfer-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-copy-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copy-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-run border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-run
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-pin
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-grid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-code-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mail-send border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mail-send
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-ghost border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ghost
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shape-triangle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-triangle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shape-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shape-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-video-recording border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-recording
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-notepad border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notepad
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bug-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bug-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mouse-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mouse-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-edit-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-edit-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chat border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chat
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-book-content border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-content
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-square-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-square-dots
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-slideshow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slideshow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wallet-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wallet-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-memory-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-memory-card
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-rounded-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-rounded-dots
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-dots
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bar-chart-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-alt-2
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-store-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-store-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-buildings border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-buildings
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-home-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-money border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-money
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-walk border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-walk
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-repeat border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-repeat
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-font-family border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-family
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-joystick-button border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick-button
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paint border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paint
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-unlink border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-unlink
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-brush border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-brush
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rotate-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rotate-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-badge-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-badge-check
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-show-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-show-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-caret-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-caret-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-caret-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-up
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-caret-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-caret-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-event border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-event
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-magnet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-magnet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rewind-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rewind-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-card
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-help-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-help-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-test-tube border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-test-tube
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-note border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-note
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sort-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sort-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort-up
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-id-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-id-card
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-badge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-badge
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-grid-small border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-small
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-grid-vertical border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-vertical
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-grid-horizontal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-horizontal
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-move-vertical border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move-vertical
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-move-horizontal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move-horizontal
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-stats border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stats
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-equalizer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-equalizer
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-disc border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-disc
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-analyse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-analyse
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-search-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dollar-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dollar-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-football border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-football
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ball
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-transfer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-transfer
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-fingerprint border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fingerprint
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-font-color border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-color
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-highlight border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-highlight
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-file-blank border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file-blank
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-strikethrough border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-strikethrough
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-photo-album border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-photo-album
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-code-block border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-block
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-font-size border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font-size
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-handicap border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-handicap
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dialpad border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dialpad
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wind border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wind
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-water border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-water
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-swim border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-swim
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-restaurant border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-restaurant
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-box border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-box
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-menu-alt-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu-alt-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-menu-alt-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu-alt-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-video-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-list-ol border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-ol
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-planet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-planet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hotel border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hotel
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-movie border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-movie
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-taxi border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-taxi
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-train border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-train
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bath border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bath
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bed border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bed
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-area border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-area
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bot border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bot
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dumbbell border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dumbbell
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-check-double border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-double
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-check-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rocket border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rocket
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-certification border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-certification
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-slider-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slider-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sad border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sad
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-meh border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-meh
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-happy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-happy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cart-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cart-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-car border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-car
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-loader-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-loader-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wrench border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wrench
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-alarm-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-layout border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-layout
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dock-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dock-top border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-top
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dock-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dock-bottom border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-bottom
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dock-bottom border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dock-bottom
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-world border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-world
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-selection border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-selection
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paper-plane border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paper-plane
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-slider border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-slider
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-loader border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-loader
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chalkboard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chalkboard
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-trash-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trash-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-grid-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-grid-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-command border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-command
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-window-close border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window-close
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-notification-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notification-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-plug border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plug
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-infinite border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-infinite
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-carousel border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-carousel
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hourglass border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hourglass
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-briefcase-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wallet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wallet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-station border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-station
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-collection border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-collection
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tv border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tv
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-closet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-closet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paperclip border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paperclip
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-expand border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-expand
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pen
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-purchase-tag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-purchase-tag
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-images border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-images
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pie-chart-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-news border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-news
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-downvote border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-downvote
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-upvote border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upvote
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-globe-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-globe-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-store border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-store
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hdd border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hdd
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-skip-previous-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-previous-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-skip-next-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-next-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chip border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chip
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cast border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cast
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-body border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-body
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-phone-outgoing border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-outgoing
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-phone-incoming border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-incoming
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-collapse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-collapse
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rename border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rename
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rotate-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rotate-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-horizontal-center border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-horizontal-center
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-ruler border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-ruler
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-import border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-import
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-battery border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-battery
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-server border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-server
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-task border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-task
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-folder-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-open
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-film border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-film
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-aperture border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-aperture
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-phone-call border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone-call
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-up-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-undo border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-undo
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-timer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-timer
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-support border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-support
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-subdirectory-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-subdirectory-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-revision border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-revision
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-repost border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-repost
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-reply border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reply
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-reply-all border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reply-all
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-redo border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-redo
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-radar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radar
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-poll border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-poll
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-list-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-check
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-like border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-like
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-joystick-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-history border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-history
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-flag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-flag
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-first-aid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-first-aid
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-export border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-export
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-down-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dislike border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dislike
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-crown border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crown
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-barcode border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-barcode
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-x
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-user-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-user-check
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-underline border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-underline
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-trophy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trophy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-trash border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trash
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-text border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-text
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sun border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sun
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-star border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-star
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sort border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sort
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shuffle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shuffle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shopping-bag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shopping-bag
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shield border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-shield-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-shield-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-share border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-share
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-share-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-share-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-select-multiple border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-select-multiple
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-screenshot border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-screenshot
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-save border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-save
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pulse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pulse
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-power-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-power-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pin
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pencil border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pencil
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pin
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pencil border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pencil
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paste border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paste
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-paragraph border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-paragraph
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-package border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-package
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-notification border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-notification
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-music border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-music
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-move border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-move
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mouse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mouse
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-microphone-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-microphone-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-log-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-out
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-log-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-log-in
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-link-external border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link-external
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-joystick border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-joystick
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-italic border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-italic
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-home-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-heading border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-heading
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hash border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hash
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-group border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-group
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-repo-forked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-repo-forked
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-pull-request border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-pull-request
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-merge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-merge
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-compare border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-compare
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-commit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-commit
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-git-branch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-git-branch
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-font border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-font
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-filter border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-filter
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-file border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-file
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-edit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-edit
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-diamond border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-diamond
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-detail border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-detail
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cut border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cut
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cube border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cube
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-crop border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crop
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-credit-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-credit-card
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-columns border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-columns
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cog border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cog
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-snow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-snow
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-rain border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-rain
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-lightning border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-lightning
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-light-rain border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-light-rain
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-drizzle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-drizzle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-check
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calculator border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calculator
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bold border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bold
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-award border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-award
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-anchor border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-anchor
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-album border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-album
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-adjust border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-adjust
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-x
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-table border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-table
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-duplicate border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-duplicate
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-windows border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-windows
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-window border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-window-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-window-open
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-wifi border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-wifi
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-voicemail border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-voicemail
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-video-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-usb border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-usb
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-upload border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-upload
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-alarm border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-alarm
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tennis-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tennis-ball
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-target-lock border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-target-lock
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tag
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-tab border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-tab
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-spreadsheet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-spreadsheet
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sitemap border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sitemap
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sidebar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sidebar
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-send border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-send
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pie-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pie-chart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-phone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-phone
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-navigation border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-navigation
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mobile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-mobile-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-mobile-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-message-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-message-rounded
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-map border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-map-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-map-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-lock border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-lock-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-lock-open
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-list-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-list-ul border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-ul
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-list-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-list-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-link border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-link-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-link-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-layer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-layer
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-laptop border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-laptop
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-home border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-home
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-heart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-heart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-headphone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-headphone
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-devices border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-devices
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-globe border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-globe
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-gift border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-gift
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-envelope border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-envelope
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-download border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-download
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dots-vertical border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-vertical
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dots-vertical-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-vertical-rounded
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dots-horizontal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-horizontal
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dots-horizontal-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dots-horizontal-rounded
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-dollar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-dollar
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-directions border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-directions
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-desktop border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-desktop
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-data border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-data
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-compass border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-compass
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-crosshair border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-crosshair
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-terminal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-terminal
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-upload border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-upload
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-cloud-download border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-cloud-download
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-x
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-check
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-calendar-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-calendar-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-buoy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-buoy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bulb border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bulb
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bluetooth border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bluetooth
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bug border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bug
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-building border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-building
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-broadcast border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-broadcast
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-briefcase border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-briefcase
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bookmark-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bookmark-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-book border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-book-bookmark border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-book-bookmark
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-block border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-block
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-basketball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-basketball
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bar-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bar-chart-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bar-chart-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bar-chart-alt
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-at border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-at
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-archive border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-archive
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-zoom-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-zoom-out
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-zoom-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-zoom-in
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-x-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-x-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-volume border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-volume-mute border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-mute
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-volume-low border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-low
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-volume-full border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-volume-full
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-video border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-video
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-vertical-center border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-vertical-center
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-up-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-up-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-trending-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trending-up
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-trending-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-trending-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-toggle-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-toggle-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-toggle-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-toggle-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-time border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-time
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-sync border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-sync
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-stopwatch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stopwatch
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-stop border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stop
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-stop-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-stop-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-skip-previous border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-previous
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-skip-next border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-skip-next
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-show border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-show
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-search border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-search
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rss border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rss
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-top-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-top-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-indent border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-indent
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-down-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-right-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-right-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-reset border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-reset
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rewind border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rewind
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-rectangle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-rectangle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-radio-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-radio-circle-marked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-radio-circle-marked
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-question-mark border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-question-mark
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-plus-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-plus-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-play border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-play
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-play-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-play-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pause border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pause
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-pause-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-pause-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-moon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-moon
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-minus-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-minus-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-microphone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-microphone
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-menu border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-menu
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-top-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-top-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-indent border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-indent
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-down-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-left-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-left-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-last-page border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-last-page
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-key border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-key
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-align-justify border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-justify
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-info-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-info-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-image border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-image
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-hide border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-hide
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-fullscreen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fullscreen
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-folder border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-folder-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-folder-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-folder-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-first-page border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-first-page
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-fast-forward border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fast-forward
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-fast-forward-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-fast-forward-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-exit-fullscreen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-exit-fullscreen
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-error border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-error-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-error-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-down-arrow-circle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-copyright border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copyright
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-copy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-copy
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-coffee border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-coffee
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-code border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-code-curly border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-code-curly
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-clipboard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-clipboard
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevrons-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevrons-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevrons-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-up
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevrons-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevrons-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevron-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevron-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-left
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevron-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-up
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-chevron-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-chevron-down
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-checkbox-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox-square
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-checkbox border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-checkbox-checked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-checkbox-checked
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-captions border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-captions
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-camera border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-camera
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-camera-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-camera-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bullseye border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bullseye
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bookmarks border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmarks
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bookmark border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bookmark
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bell border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bell-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-plus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bell-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-off
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-bell-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-bell-minus
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-arrow-back border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-arrow-back
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-align-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-right
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-align-middle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-middle
                            </div>
                            <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bx-align-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bx-align-left
                            </div>

                        </div>

                        <div class="mt-10">
                            <h5 class="text-gray-700 dark:text-gray-100">Solid Icons</h5>
                            <div class="grid grid-cols-12 gap-6 mt-6">
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wink-tongue border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wink-tongue
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-upside-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-upside-down
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-happy-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-laugh border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-laugh
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-meh-blank border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh-blank
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cool border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cool
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tired border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tired
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-happy-beaming border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-beaming
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-shocked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shocked
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-happy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-sad border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sad
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-sleepy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sleepy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-confused border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-confused
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-meh-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-meh border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-meh
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-smile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-smile
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wink-smile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wink-smile
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dizzy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dizzy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-happy-heart-eyes border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-happy-heart-eyes
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-angry border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-angry
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-business border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-business
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-camera-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-food-menu border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-food-menu
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-offer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-offer
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-clinic border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-clinic
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hand-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hand-down border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-down
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hand-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hand-up border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hand-up
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-baby-carriage border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-baby-carriage
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-caret-left-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-left-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-caret-right-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-right-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-caret-down-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-down-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-caret-up-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-caret-up-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tone
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bolt-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bolt-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-city border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-city
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cake border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cake
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-spa border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-spa
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dish border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dish
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-fridge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-fridge
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-image-add border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image-add
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-alarm-add border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm-add
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-archive-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive-out
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-archive-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive-in
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-add-to-queue border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-add-to-queue
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-check-shield border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-shield
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-label border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-label
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-face border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-face
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-find border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-find
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-extension border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-extension
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-exit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-exit
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-brush-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brush-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-layout border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-layout
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-alt-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-alt-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-alt-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-alt-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-mobile-vibration border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mobile-vibration
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-fast-forward-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-fast-forward-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-rewind-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rewind-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-carousel border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-carousel
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-customize border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-customize
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-event border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-event
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-check
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-x
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-minus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calendar border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calendar
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-briefcase-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase-alt-2
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bookmark-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-minus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bookmarks border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmarks
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-time-five border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-time-five
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pie-chart-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart-alt-2
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-time border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-time
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-timer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-timer
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-stopwatch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-stopwatch
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-compass border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-compass
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-check
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-x
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-grid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-grid
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-zoom-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zoom-out
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-zoom-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zoom-in
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-search border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-search
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bell-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-minus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bell-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-folder-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-minus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-mobile border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mobile
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-data border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-data
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-skip-next-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skip-next-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-skip-previous-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skip-previous-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-chalkboard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chalkboard
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-school border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-school
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-institution border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-institution
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-left-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-down-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-left-top-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-top-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-right-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-down-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-right-top-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-top-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-down-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-up-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-left-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-right-arrow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-rectangle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rectangle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-brightness border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brightness
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-brightness-half border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brightness-half
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-paint border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paint
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-credit-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-credit-card
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-credit-card-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-credit-card-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-band-aid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-band-aid
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-map-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map-pin
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-receipt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-receipt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-purchase-tag-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-purchase-tag-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-basket border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-basket
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-palette border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-palette
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plane-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-component border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-component
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-traffic-barrier border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-traffic-barrier
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-no-entry border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-no-entry
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-alt-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-alt-dots
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-check-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-notification-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notification-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-notification border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notification
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-log-out border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-out
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-log-in border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-in
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-log-out-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-out-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-log-in-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-log-in-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-doughnut-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-doughnut-chart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-building-house border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-building-house
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-comment-error border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-error
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-voice border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-voice
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cuboid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cuboid
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cube-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cube-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-polygon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-polygon
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-square-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-square-rounded
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-error-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-shield-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shield-alt-2
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-paint-roll border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paint-roll
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-comment-add border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-add
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-droplet-half border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-droplet-half
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-search-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-search-alt-2
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bowling-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bowling-ball
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hourglass-bottom border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass-bottom
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hourglass-top border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass-top
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-lock-open-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-open-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-lock-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-graduation border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-graduation
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-vial border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-vial
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cylinder border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cylinder
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pyramid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pyramid
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wine border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wine
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-comment-detail border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-detail
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-comment-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment-dots
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-comment border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-comment
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-traffic border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-traffic
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-landscape border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-landscape
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-adjust-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-adjust-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-id-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-id-card
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-parking border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-parking
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plane-land border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-land
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plane-take-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane-take-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-analyse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-analyse
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-gif border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-gif
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-jpg border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-jpg
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-png border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-png
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-txt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-txt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-md border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-md
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-json border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-json
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-js border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-js
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-css border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-css
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-html border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-html
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-copy-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-copy-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-doc border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-doc
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-pin
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-single-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-single-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-single-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-single-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-ghost border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ghost
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-direction-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-direction-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-video-recording border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-recording
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-notepad border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-notepad
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bug-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bug-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-mouse-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mouse-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-edit-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-edit-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-chat border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chat
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-book-content border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book-content
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-square-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-square-dots
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-slideshow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-slideshow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bank border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bank
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wallet-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wallet-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-memory-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-memory-card
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-devices border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-devices
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-rounded-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-rounded-dots
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-dots border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-dots
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bar-chart-alt-2 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bar-chart-alt-2
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-store-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-store-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-buildings border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-buildings
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-home-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-home-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-pdf border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-pdf
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-yin-yang border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-yin-yang
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-ship border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ship
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-factory border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-factory
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tree border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tree
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plane border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plane
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-rectangle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-rectangle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-eyedropper border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eyedroppers
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cloud-lightning border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-lightning
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cloud-rain border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-rain
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-eraser border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eraser
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-magic-wand border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-magic-wand
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hotel border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hotel
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-color-fill border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-color-fill
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-capsule border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-capsule
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-flask border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flask
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-joystick-button border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick-button
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-direction-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-direction-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-directions border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-directions
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-megaphone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-megaphone
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-keyboard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-keyboard
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-brush border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-brush
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-coffee-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coffee-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-badge-check border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-badge-check
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-landmark border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-landmark
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-gas-pump border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-gas-pump
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-badge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-badge
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-right-arrow-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-down-arrow-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-up-arrow-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-left-arrow-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-ambulance border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ambulance
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-magnet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-magnet
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-card border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-card
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-help-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-help-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-note border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-note
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-badge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-badge
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-flame border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flame
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-disc border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-disc
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-minus-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-minus-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plus-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plus-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-x-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-x-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-microphone-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-image-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-skull border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-skull
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dollar-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dollar-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-film border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-film
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ball
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-edit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-edit
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-blank border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-blank
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bell-ring border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-ring
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-photo-album border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-photo-album
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-key border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-key
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-video-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-box border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-box
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-planet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-planet
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-movie border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-movie
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-taxi border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-taxi
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-train border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-train
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bath border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bath
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bed border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bed
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-area border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-area
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bot border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bot
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-star-half border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-star-half
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-checkbox-checked border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-checkbox-checked
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-checkbox border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-checkbox
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-check-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-check-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-rocket border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rocket
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-certification border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-certification
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dashboard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dashboard
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-conversation border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-conversation
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-battery-low border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-low
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-folder-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-open
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-zap border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-zap
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-x-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-x-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wrench border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wrench
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-widget border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-widget
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-watch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-watch
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-watch-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-watch-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-wallet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-wallet
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-volume border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-volume-mute border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-mute
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-volume-low border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-low
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-volume-full border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-volume-full
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-videos border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-videos
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-video border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-video-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-video-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-minus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-minus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-detail border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-detail
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-user-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-user-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-upvote border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-upvote
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-up-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-up-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-truck border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-truck
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-trophy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trophy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-trash border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trash
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-trash-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-trash-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-torch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-torch
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-toggle-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-toggle-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-to-top border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-to-top
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-terminal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-terminal
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tennis-ball border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tennis-ball
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tag
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-tag-x border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-tag-x
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-t-shirt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-t-shirt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-sun border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sun
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-store border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-store
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-star border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-star
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-spreadsheet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-spreadsheet
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-show border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-show
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-shopping-bag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shopping-bag
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-shopping-bag-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shopping-bag-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-shield border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-shield
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-share border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-share
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-share-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-share-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-server border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-server
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-send border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-send
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-select-multiple border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-select-multiple
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-sort-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-sort-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-save border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-save
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-ruler border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-ruler
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-right-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-right-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-report border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-report
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-rename border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-rename
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-radio border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-radio
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-quote-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-quote-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-purchase-tag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-purchase-tag
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-printer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-printer
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plus-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plus-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-plug border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-plug
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-playlist border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-playlist
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pin
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pie-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pie-chart-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pie-chart-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-phone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-phone-outgoing border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-outgoing
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-phone-incoming border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-incoming
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-phone-call border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-phone-call
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pencil border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pencil
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-pen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-pen
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-paste border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paste
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-paper-plane border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-paper-plane
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-package border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-package
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-news border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-news
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-navigation border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-navigation
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-music border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-music
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-mouse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-mouse
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-moon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-moon
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-minus-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-minus-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-microphone border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-microphone-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-microphone-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-message-rounded border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-message-rounded
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-map border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-map-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-map-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-lock border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-lock-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-lock-open
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-like border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-like
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-left-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-left-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-layer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-layer
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-joystick border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-joystick-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-joystick-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-info-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-info-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-inbox border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-inbox
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-image border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-image
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hourglass border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hourglass
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hot border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hot
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-home border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-home
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hide border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hide
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-heart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-heart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-hdd border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-hdd
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-group border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-group
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-grid-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-grid-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-gift border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-gift
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-flag border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flag
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-flag-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-flag-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-first-aid border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-first-aid
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-filter-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-filter-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-file-image border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-file-image
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-error border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-error-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-error-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-envelope border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-envelope
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-eject border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-eject
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-duplicate border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-duplicate
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-droplet border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-droplet
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-drink border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-drink
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-downvote border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-downvote
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-download border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-download
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-down-arrow-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-down-arrow-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dock-top border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-top
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dock-right border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-right
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dock-left border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-left
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dock-bottom border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dock-bottom
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-dislike border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-dislike
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-discount border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-discount
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-detail border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-detail
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cube border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cube
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-crown border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-crown
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-coupon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coupon
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-copy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-copy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-contact border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-contact
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-collection border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-collection
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cog border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cog
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-coffee border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-coffee
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cloud border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cloud-upload border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-upload
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cloud-download border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cloud-download
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-chip border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chip
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-chart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-chart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-cart-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-cart-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-car border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-car
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-captions border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-captions
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-calculator border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-calculator
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-buoy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-buoy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bulb border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bulb
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-building border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-building
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bug border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bug
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-briefcase-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-briefcase border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-briefcase
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bookmark-star border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-star
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-book-open border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book-open
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bookmark-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bookmark border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bookmark
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-book border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-book
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bolt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bolt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bell-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bell border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bell
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-battery-full border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-full
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-battery-charging border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery-charging
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-battery border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-battery
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-barcode border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-barcode
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-bar-chart-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-bar-chart-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-award border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-award
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-folder-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-folder border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-folder
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-camera-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-camera border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-camera
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-archive border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-archive
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-album border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-album
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-alarm-off border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm-off
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-alarm border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-alarm
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxs-adjust border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxs-adjust
                                </div>

                            </div>
                        </div>

                        <div class="mt-10">
                            <h5 class="text-gray-700 dark:text-gray-100">Logos</h5>
                            <div class="grid grid-cols-12 gap-6 mt-6">
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-redbubble border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-redbubble
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-patreon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-patreon
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-gitlab border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-gitlab
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-etsy border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-etsy
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-figma border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-figma
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-audible border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-audible
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-algolia border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-algolia
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-adobe border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-adobe
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-pinterest-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pinterest-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-imdb border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-imdb
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-jquery border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-jquery
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-facebook-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-instagram-alt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-instagram-alt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-flickr-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-flickr-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-whatsapp-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-whatsapp-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-squarespace border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-squarespace
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-medium-old border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium-old
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-mailchimp border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-mailchimp
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-wix border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wix
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-trello border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-trello
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-spotify border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-spotify
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-soundcloud border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-soundcloud
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-snapchat border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-snapchat
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-less border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-less
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-flickr border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-flickr
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-shopify border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-shopify
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-jsfiddle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-jsfiddle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-css3 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-css3
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-microsoft border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-microsoft
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-yahoo border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-yahoo
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-bootstrap border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bootstrap
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-redux border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-redux
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-mastercard border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-mastercard
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-visa border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-visa
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-baidu border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-baidu
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-chrome border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-chrome
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-dailymotion border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dailymotion
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-joomla border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-joomla
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-internet-explorer border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-internet-explorer
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-paypal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-paypal
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-edge border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-edge
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-stripe border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-stripe
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-telegram border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-telegram
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-wordpress border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wordpress
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-periscope border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-periscope
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-react border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-react
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-bing border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bing
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-vuejs border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vuejs
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-kickstarter border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-kickstarter
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-nodejs border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-nodejs
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-javascript border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-javascript
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-firefox border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-firefox
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-stack-overflow border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-stack-overflow
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-magento border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-magento
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-product-hunt border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-product-hunt
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-html5 border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-html5
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-git border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-git
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-quora border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-quora
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-yelp border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-yelp
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-airbnb border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-airbnb
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-opera border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-opera
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-invision border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-invision
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-foursquare border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-foursquare
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-sass border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-sass
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-wikipedia border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-wikipedia
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-unsplash border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-unsplash
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-digg border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-digg
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-amazon border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-amazon
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-ebay border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-ebay
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-drupal border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-drupal
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-dropbox border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dropbox
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-discourse border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-discourse
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-deviantart border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-deviantart
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-digitalocean border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-digitalocean
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-creative-commons border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-creative-commons
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-codepen border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-codepen
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-angular border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-angular
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-messenger border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-messenger
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-pocket border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pocket
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-vk border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vk
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-windows border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-windows
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-play-store border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-play-store
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-android border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-android
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-apple border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-apple
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-blogger border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-blogger
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-pinterest border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-pinterest
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-reddit border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-reddit
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-discord border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-discord
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-twitch border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-twitch
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-slack border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-slack
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-slack-old border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-slack-old
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-skype border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-skype
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-medium-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-medium border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-medium
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-linkedin-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-linkedin-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-google-plus-circle border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google-plus-circle
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-google-plus border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google-plus
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-facebook-square border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook-square
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-bitcoin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-bitcoin
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-linkedin border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-linkedin
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-vimeo border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-vimeo
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-dribbble border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-dribbble
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-behance border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-behance
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-tumblr border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-tumblr
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-whatsapp border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-whatsapp
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-youtube border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-youtube
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-twitter border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-twitter
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-instagram border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-instagram
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-google border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-google
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-github border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-github
                                </div>
                                <div class="col-span-12 xl:col-span-3 lg:col-span-4 md:col-span-6 group dark:text-zinc-100">
                                    <i class="w-10 h-10 text-xl leading-loose text-center text-gray-300 align-middle transition-all duration-300 border rounded-full bx bxl-facebook border-gray-50 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i> bx bxl-facebook
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
