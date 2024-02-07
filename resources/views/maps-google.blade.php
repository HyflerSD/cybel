@extends('layouts.master')
@section('title')
    {{ __('Google Maps') }}
@endsection
@section('content')

<div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
    <div class="page-content dark:bg-zinc-700">        
        <div class="container-fluid px-[0.625rem]">
            
            <!-- page title -->
            <x-page-title title="Google Maps" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Markers</h6>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Overlays</h6>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Street View Panoramas</h6>
                            </div>
                            <div class="card-body">
                                <div id="panorama" class="gmaps-panaroma"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-600 text-15 dark:text-gray-100">Map Types</h6>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-types" class="gmaps"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- Gmaps file -->
    <script src="{{ URL::asset('build/libs/gmaps/gmaps.min.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ URL::asset('build/js/pages/gmaps.init.js') }}"></script>
@endsection
