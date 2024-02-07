@extends('layouts.master')
@section('title')
    {{ __('Profile') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css')  }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
    <div class="page-content dark:bg-zinc-700">
        <div class="container-fluid px-[0.625rem]">

            <!-- page title -->
            <x-page-title title="Profile" pagetitle="Apps" />
    
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-9">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body ">
                                <div class="grid grid-cols-12 ">
                                    <div class="col-span-9">
                                        <div class="flex flex-wrap items-center">
                                            <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="rounded-full">
                                            </div>
                                            <div class="md:ml-3 mt-3 md:mt-0">
                                                <h5 class="text-gray-700 text-16 dark:text-gray-100">Phyllis Gatlin</h5>
                                                <p class="mb-4 text-gray-500 dark:text-zinc-100 text-13">Full Stack Developer</p>
    
                                                <div class="flex flex-wrap items-start gap-2 text-13">
                                                    <div class="text-gray-500 dark:text-zinc-100"><i class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>Development</div>
                                                    <div class="text-gray-500 dark:text-zinc-100"><i class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>phyllisgatlin@minia.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex flex-wrap items-center justify-end">
                                            <button type="button" class="border-transparent btn bg-gray-50/50 dark:bg-zinc-700 dark:text-gray-100"><i class="me-1"></i> Message</button>
                                            <div class="relative ml-3 dropdown">
                                                <button class="text-gray-600 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="align-middle text-16 bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-tabs border-b-tabs">
    
                                    <ul class="flex flex-wrap w-full text-sm font-medium text-center text-violet-500 nav  border-t border-gray-50 pt-5  mt-6 dark:border-zinc-600" id="pills-tab" role="tablist">
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-home" class="px-3 pt-5 pb-[1.4rem] font-medium active">Overview</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-Profile" class="px-3 pt-5 pb-[1.4rem] font-medium ">About</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-setting" class="px-3 pt-5 pb-[1.4rem] font-medium ">Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                                <h5 class="text-gray-700 text-15 dark:text-gray-100">About</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="pb-3">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 md:col-span-2">
                                                <div>
                                                    <h5 class="font-medium text-gray-700 text-15 dark:text-gray-100">Bio :</h5>
                                                </div>
                                            </div>
                                            <div class="col-span-12 md:col-span-10">
                                                <div class="text-gray-500 dark:text-zinc-100">
                                                    <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                    <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="py-3">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 md:col-span-2">
                                                <div>
                                                    <h5 class="font-medium text-gray-700 text-15 dark:text-gray-100">Experience :</h5>
                                                </div>
                                            </div>
                                            <div class="col-span-12 md:col-span-10">
                                                <div class="text-gray-500 dark:text-zinc-100">
                                                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>
    
                                                    <ul class="mt-4 mb-0 text-gray-500 list-unstyled dark:text-zinc-100">
                                                        <li class="py-1"><i class="text-green-500 align-middle mdi mdi-circle-medium ltr:mr-1 rtl:ml-1"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                        <li class="py-1"><i class="text-green-500 align-middle mdi mdi-circle-medium ltr:mr-1 rtl:ml-1"></i>Quisque rutrum aenean imperdiet</li>
                                                        <li class="py-1"><i class="text-green-500 align-middle mdi mdi-circle-medium ltr:mr-1 rtl:ml-1"></i>Integer ante a consectetuer eget</li>
                                                        <li class="py-1"><i class="text-green-500 align-middle mdi mdi-circle-medium ltr:mr-1 rtl:ml-1"></i>Phasellus nec sem in justo pellentesque</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                                <div class="flex">
                                    <div class="grow">
                                        <h5 class="text-gray-700 text-15 dark:text-gray-100">Post</h5>
                                    </div>
                                    <div class="">
                                        <a href="#post" class="font-medium text-violet-500">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-1 card dark:border-zinc-600">
                                                <div class="p-4">
                                                    <div class="flex items-start">
                                                        <div class="flex-grow">
                                                            <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Beautiful Day with Friends</a></h5>
                                                            <p class="mt-2 mb-0 text-gray-500 text-13 dark:text-zinc-100">10 Apr, 2020</p>
                                                        </div>
                                                        <div class=" ms-2">
                                                            <div class="relative ml-3 dropdown">
                                                                <button class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                                    <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                                                </button>
                                                                <ul class="absolute top-auto z-50 w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding hidden" aria-labelledby="dropdownMenuButton1" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1431px, 193px);">
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="p-1 border rounded border-gray-50 dark:border-zinc-600">
                                                </div>
                                                <div class="p-4">
                                                    <ul class="inline-flex mb-4">
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-purchase-tag-alt dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Project
                                                            </a>
                                                        </li>
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-comment-dots dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 12 Comments
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-4 text-gray-500 dark:text-zinc-100">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                    <div>
                                                        <a href="" class="text-violet-500">Read more <i class="align-middle mdi mdi-arrow-right"></i></a>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-1 card dark:border-zinc-600">
                                                <div class="p-4">
                                                    <div class="flex items-start">
                                                        <div class="flex-grow">
                                                            <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Drawing a sketch</a></h5>
                                                            <p class="mt-2 mb-0 text-gray-500 text-13 dark:text-zinc-100">24 Mar, 2020</p>
                                                        </div>
                                                        <div class=" ms-2">
                                                            <div class="relative ml-3 dropdown">
                                                                <button class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                                    <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                                                </button>
                                                                <ul class="absolute top-auto z-50 w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding hidden" aria-labelledby="dropdownMenuButton1" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1431px, 193px);">
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="" class="p-1 border rounded border-gray-50 dark:border-zinc-600">
                                                </div>
                                                <div class="p-4">
                                                    <ul class="inline-flex mb-4">
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-purchase-tag-alt dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Development
                                                            </a>
                                                        </li>
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-comment-dots dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 08 Comments
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-4 text-gray-500 dark:text-zinc-100">At vero eos et accusamus et iusto odio dignissimos ducimus quos</p>
                                                    <div>
                                                        <a href="" class="text-violet-500">Read more <i class="align-middle mdi mdi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-1 card dark:border-zinc-600">
                                                <div class="p-4">
                                                    <div class="flex items-start">
                                                        <div class="flex-grow">
                                                            <h5 class="text-15 text-truncate"><a href="#" class="text-gray-700 dark:text-gray-100">Project discussion with team</a></h5>
                                                            <p class="mt-2 mb-0 text-gray-500 text-13 dark:text-zinc-100">20 Mar, 2020</p>
                                                        </div>
                                                        <div class=" ms-2">
                                                            <div class="relative ml-3 dropdown">
                                                                <button class="p-0 text-gray-400 border-0 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                                    <i class="text-lg bx bx-dots-horizontal-rounded"></i>
                                                                </button>
                                                                <ul class="absolute top-auto z-50 w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding hidden" aria-labelledby="dropdownMenuButton1" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1431px, 193px);">
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                                    </li>
                                                                    <li><a class="block w-full px-5 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50/50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="p-1 border rounded border-gray-50 dark:border-zinc-600">
                                                </div>
                                                <div class="p-4">
                                                    <ul class="inline-flex mb-4">
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-purchase-tag-alt dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> Project
                                                            </a>
                                                        </li>
                                                        <li class="ltr:mr-3 rtl:ml-3">
                                                            <a href="javascript: void(0);" class="text-gray-500 dark:text-zinc-100">
                                                                <i class="text-gray-500 align-middle bx bx-comment-dots dark:text-zinc-100 ltr:mr-1 rtl:ml-1"></i> 08 Comments
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-4 text-gray-500 dark:text-zinc-100">At vero eos et accusamus et iusto odio dignissimos ducimus quos</p>
                                                    <div>
                                                        <a href="" class="text-violet-500">Read more <i class="align-middle mdi mdi-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-3 text-gray-700 text-15 dark:text-gray-100">Skills</h5>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Photoshop</a>
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">illustrator</a>
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">HTML</a>
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Javascript</a>
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Php</a>
                                    <a href="#" class="text-xs px-2 py-0.5 rounded text-violet-500 bg-violet-50 font-semibold hover:bg-violet-50 duration-300 dark:bg-violet-500">Python</a>
                                </div>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Portfolio</h5>
                                <ul class="mb-0 list-unstyled">
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block dark:text-zinc-100 "><i class="mdi mdi-web text-violet-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                    </li>
                                    <li class="py-2">
                                        <a href="#" class="text-gray-500 d-block dark:text-zinc-100"><i class="mdi mdi-note-text-outline text-violet-500 ltr:mr-1 rtl:ml-1"></i> Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Similar Profiles</h5>
                                <div class="list-group">
                                    <a href="#">
                                        <div class="flex items-center px-5 py-3 border-b border-gray-50 dark:border-zinc-600 hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="w-8 h-8 p-1 border border-gray-100 rounded-full dark:border-zinc-600">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5 class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">James Nix</h5>
                                                    <p class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">Full Stack Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="flex items-center px-5 py-3 border-b border-gray-50 dark:border-zinc-600 hover:bg-gray-50/50/30">
                                            <div class=" avatar-sm ltr:mr-3 rtl:ml-3">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="w-8 h-8 p-1 border border-gray-100 rounded-full dark:border-zinc-600">
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5 class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">Darlene Smith</h5>
                                                    <p class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="flex items-center px-5 py-3 hover:bg-gray-50/50/30">
                                            <div class="avatar-sm ltr:mr-3 rtl:ml-3">
                                                <div class="flex items-center justify-center w-8 h-8 text-center text-gray-100 rounded-full bg-gray-50/50 text-22">
                                                    <i class="bx bxs-user-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow">
                                                <div>
                                                    <h5 class="mb-1 text-sm text-gray-700 dark:text-gray-100 leading-[16.5px]">William Swift</h5>
                                                    <p class="mb-0 text-gray-500 text-13 dark:text-zinc-100 leading-[19.5px]">Backend Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
<script src="{{ URL::asset('build/js/pages/nav&tabs.js') }}"></script>
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection
