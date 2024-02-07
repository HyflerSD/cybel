@extends('layouts.master')
@section('title')
    {{ __('Form Editor') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Form Editor" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Ckeditor Classic editor</h6>
                        </div>
                        <div class="card-body">
                            <div id="ckeditor-classic"></div>
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
    <!-- ckeditor -->
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('build/js/pages/form-editor.init.js') }}"></script>
@endsection
