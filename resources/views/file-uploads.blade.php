@extends('layouts.master')
@section('title')
    {{ __('File ') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="File Upload" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Dropzone</h6>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="text-6xl text-gray-500 bx bx-cloud-upload"></i>
                                        </div>

                                        <h5 class="text-gray-600 dark:text-gray-100">Drop files here or click to upload.
                                        </h5>
                                    </div>
                                </form>

                                <div class="mt-4 text-center">
                                    <button type="button"
                                        class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Send
                                        Files</button>
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
    <!-- dropzone js -->
    <script src="{{ URL::asset('build/libs/dropzone/min/dropzone.min.js') }}"></script>
@endsection
