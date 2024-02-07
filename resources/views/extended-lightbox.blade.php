@extends('layouts.master')
@section('title')
    {{ __('Lightbox') }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/glightbox/css/glightbox.min.css') }}">
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Lightbox" pagetitle="Extended" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Single Image Lightbox</h6>
                        </div>
                        <div class="flex flex-wrap gap-x-3 card-body">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-3">
                                    <div>
                                        <a href="{{ URL::asset('build/images/small/img-1.jpg') }}" class="image-popup">
                                            <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3">
                                    <div>
                                        <a href="{{ URL::asset('build/images/small/img-2.jpg') }}" class="image-popup">
                                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" class="img-fluid" alt="work-thumbnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Images with Description</h6>
                                </div>
                                <div class="card-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="{{ URL::asset('build/images/small/img-4.jpg') }}" class="image-popup">
                                                    <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" class="img-fluid"
                                                        alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="{{ URL::asset('build/images/small/img-5.jpg') }}" class="image-popup">
                                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" class="img-fluid"
                                                        alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div>
                                                <a href="{{ URL::asset('build/images/small/img-1.jpg') }}" class="image-popup">
                                                    <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" class="img-fluid"
                                                        alt="work-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Popup with Video or Map</h6>
                                </div>
                                <div class="card-body">
                                    <div class="flex flex-wrap gap-4">
                                        <a href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                                            class="border-transparent btn bg-gray-50 image-popup-video-map dark:bg-zinc-700 dark:text-gray-100"
                                            data-title="YouTube Video" data-description="YouTube Video Popup">
                                            Open YouTube Video
                                        </a>
                                        <a href="https://vimeo.com/45830194"
                                            class="border-transparent btn bg-gray-50 image-popup-video-map dark:bg-zinc-700 dark:text-gray-100"
                                            data-title="Vimeo Video" data-description="Vimeo Video Popup">
                                            Open Vimeo Video
                                        </a>
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
    <script src="{{ URL::asset('build/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- lightbox init -->
    <script src="{{ URL::asset('build/js/pages/lightbox.init.js') }}"></script>
@endsection
