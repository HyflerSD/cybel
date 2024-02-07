@extends('layouts.master')
@section('title')
    {{ __('Starter Page') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Starter Page" pagetitle="Components" />

                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
