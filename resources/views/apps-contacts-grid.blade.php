@extends('layouts.master')
@section('title')
    {{ __('User Grid') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css')  }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
<div class="min-h-screen page-content dark:bg-zinc-700">
    <div class="container-fluid px-[0.625rem]">
        
        <!-- page title -->
        <x-page-title title="User Grid" pagetitle="Apps" />

            <div>
                <div class="md:flex justify-between items-center mb-4 space-y-2">
                    <h5 class="text-gray-800 font-medium text-15 dark:text-gray-100">Contact List <span class="ml-2 font-normal text-gray-500 dark:text-zinc-100">(834)</span></h5>
                    <div class="flex flex-wrap items-center gap-2">
                            <div>
                                <ul class="flex flex-wrap">
                                    <li class="nav-item ">
                                        <a class="px-4 py-2 text-gray-600 nav-link text-16 dark:text-gray-100" href="apps-contacts-list" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="List"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="px-4 py-2 text-white rounded nav-link active bg-violet-500 text-16" href="apps-contacts-grid" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn bg-gray-50 border-gray-50 dark:bg-zinc-800 dark:text-gray-100 dark:border-zinc-600"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>
                            <div>
                                <div class="relative dropstart">
                                    <a href="#!" class="text-gray-600 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute z-50 hidden w-40 py-2 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dropdown-menu bg-clip-padding dark:bg-zinc-700 dark:border-gray-600/20 dark:shadow-none" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right" href="#">Another action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/30 dark:text-gray-100 dark:hover:bg-zinc-600/80 rtl:text-right" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Phyllis Gatlin</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">James Nix</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Darlene Smith</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <div class="w-20 h-20 p-1 mx-auto text-center rounded-full bg-gray-50/30">
                                        <i class="text-6xl leading-tight bx bxs-user-circle text-gray-50"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">William Swift</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Backend Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <div class="w-20 h-20 p-1 mx-auto text-center rounded-full bg-gray-50/30">
                                        <i class="text-6xl leading-tight bx bxs-user-circle text-gray-50"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Kevin West</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Tommy Hayes</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Backend Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Diana Owens</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:col-span-3">
                        <div class="mb-0 card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="relative text-right dropdown">
                                    <a href="#!" class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                        <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <ul class="absolute top-auto dropdown-grid z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Edit</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-6">
                                    <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 text-gray-800 text-16 font-medium"><a href="#" class="dark:text-gray-100">Paul Sanchez</a></h5>
                                    <p class="mb-2 text-gray-500 dark:text-zinc-100">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="inline-flex w-full rounded-md" role="group">
                                <button type="button" class="w-full px-4 py-2 text-sm border rounded rounded-r-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Profile
                                </button>
                                <button type="button" class="w-full px-4 py-2 text-sm border border-l-0 rounded rounded-l-none btn border-gray-50 hover:bg-gray-50/50 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:text-gray-100">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:flex items-center my-4 place-content-between">
                    <div class="mt-4 mb-2">
                        <p class="text-gray-600 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>
                    </div>
                    <div class="flex mt-2.5">
                        <nav aria-label="Page navigation example border">
                            <ul class="flex list-style-none">
                                <li class="border border-gray-100 dark:border-zinc-600 ltr:rounded-l rtl:rounded-r dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                    <a class="relative block px-3 py-2 text-gray-100 transition-all duration-300 bg-transparent border-0 outline-none pointer-events-none page-link hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100" href="#"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#">1</a></li>
                                <li class="transition-all duration-300 border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 dark:border-zinc-500 dark:bg-zinc-800">
                                    <a class="relative block px-3 py-2 text-white transition-all duration-300 border-0 outline-none page-link group-hover bg-violet-500 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#">2</a>
                                </li>
                                <li class="border border-l-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#">3</a></li>
                                <li class="border border-gray-100 dark:border-zinc-600 ltr:border-l-0 rtl:border-r dark:border-zinc-500 dark:bg-zinc-800"><a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#">4</a></li>
                                <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#">5</a></li>
                                <li class="border border-gray-100 dark:border-zinc-600 ltr:rounded-r rtl:rounded-l dark:border-zinc-500 dark:bg-zinc-800"><a class="relative block px-3 py-2 text-gray-500 transition-all duration-300 bg-transparent border-0 outline-none page-link dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none" href="#"><i class="mdi mdi-chevron-right"></i></a></li>

                            </ul>
                        </nav>
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
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection
