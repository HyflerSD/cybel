@extends('layouts.master')
@section('title')
    {{ __('Blog Details') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Blog Details" pagetitle="Apps" />

                <div class="grid grid-cols-1 ">
                    <div class="grid grid-cols-1 gap-x-3 lg:grid-cols-12">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <h4 class="text-gray-700 text-21 dark:text-gray-100">Beautiful Day with Friends</h4>
                                    </div>
                                    <div class="mb-4">
                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                            class="p-1 mx-auto border border-gray-100 rounded dark:border-zinc-600 dark:bg-zinc-700">
                                    </div>

                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 md:col-span-4">
                                            <div class="text-center">
                                                <h6 class="mb-2 text-gray-700 dark:text-gray-100">Categories</h6>
                                                <p class="mb-3 text-gray-500 dark:text-zinc-100 text-15">Project</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-4">
                                            <div class="text-center">
                                                <h6 class="mb-2 text-gray-700 dark:text-gray-100">Date</h6>
                                                <p class="mb-3 text-gray-500 dark:text-zinc-100 text-15">20 June, 2022</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 md:col-span-4">
                                            <div class="text-center">
                                                <p class="mb-2 text-gray-500 dark:text-zinc-100">Post by</p>
                                                <h5 class="mb-3 text-gray-700 text-15 dark:text-gray-100">Gilbert Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4 border-gray-100 dark:border-zinc-600">

                                    <div class="mt-4">
                                        <div class="text-gray-500 dark:text-zinc-100 text-14">
                                            <p class="mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                incidunt ut labore et dolore magnam enim ad minima veniam quis</p>

                                            <p class="mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                                corporis suscipit laboriosam, nisi ut aliquid ex ea reprehenderit qui in ea
                                                voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                                eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto
                                                odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                                                atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                                cupiditate non provident, similique sunt</p>

                                            <blockquote
                                                class="p-6 mb-4 border border-gray-100 rounded dark:border-zinc-600">
                                                <div class="flex">
                                                    <div class="ltr:mr-3 rtl:ml-3">
                                                        <i
                                                            class="text-2xl text-gray-900 bx bxs-quote-alt-left dark:text-gray-100"></i>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0"> At vero eos et accusamus et iusto odio
                                                            dignissimos ducimus qui blanditiis praesentium deleniti atque
                                                            corrupti quos dolores et quas molestias excepturi sint quidem
                                                            rerum facilis est</p>
                                                    </div>
                                                </div>

                                            </blockquote>

                                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                                voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                                repellat. Sed ut perspiciatis unde omnis iste natus error sit</p>


                                            <div class="mt-4">
                                                <h5 class="mb-3 text-gray-700 dark:text-gray-100">Title: </h5>

                                                <div>
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-4">
                                                            <div>
                                                                <ul class="list-disc ltr:pl-5 rtl:pr-5">
                                                                    <li class="py-1">Donec sodales sagittis</li>
                                                                    <li class="py-1">Sed consequat leo eget</li>
                                                                    <li class="py-1">Aliquam lorem ante</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-4">
                                                            <div>
                                                                <ul class="list-disc ltr:pl-5 rtl:pr-5">
                                                                    <li class="py-1">Aenean ligula eget</li>
                                                                    <li class="py-1">Cum sociis natoque</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-5 border-gray-50 dark:border-zinc-600">

                                        <div class="mt-8">
                                            <h5 class="text-gray-700 text-15 dark:text-gray-100"><i
                                                    class="mr-1 align-middle bx bx-message-dots"></i> Comments :</h5>
                                            <div class="mt-4">
                                                <div class="flex py-5">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <div>
                                                            <i
                                                                class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="mb-1 text-sm text-gray-700 dark:text-gray-100">Delores
                                                            Williams <small
                                                                class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">1
                                                                hr Ago</small></h5>
                                                        <p class="mb-5 text-gray-500 dark:text-zinc-100">If several
                                                            languages coalesce, the grammar of the resulting language is
                                                            more simple and regular than that of the individual</p>
                                                        <div>
                                                            <a href="javascript: void(0);" class="text-green-500"><i
                                                                    class="mdi mdi-reply"></i> Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex py-5 border-t border-gray-50 dark:border-zinc-600">
                                                    <div class=" ltr:mr-3 rtl:ml-3">
                                                        <div>
                                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                                class="w-4 h-4 rounded-full">
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow">
                                                        <h5 class="mb-1 text-sm dark:text-gray-100">Clarence Smith <small
                                                                class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">2
                                                                hrs Ago</small></h5>
                                                        <p class="text-gray-500 dark:text-zinc-100">Neque porro quisquam
                                                            est, qui dolorem ipsum quia dolor sit amet</p>
                                                        <div class="py-4">
                                                            <a href="javascript: void(0);" class="text-green-500"><i
                                                                    class="mdi mdi-reply"></i> Reply</a>
                                                        </div>

                                                        <div class="flex pt-3">
                                                            <div class=" ltr:mr-3 rtl:ml-3">
                                                                <div>
                                                                    <i
                                                                        class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                                </div>
                                                            </div>

                                                            <div class="flex-grow">
                                                                <h5 class="mb-1 text-sm dark:text-gray-100">Silvia Martinez
                                                                    <small
                                                                        class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">2
                                                                        hrs Ago</small></h5>
                                                                <p class="text-gray-500 dark:text-zinc-100">To take a
                                                                    trivial example, which of us ever undertakes laborious
                                                                    physical exercise</p>
                                                                <div class="pt-4">
                                                                    <a href="javascript: void(0);" class="text-green-500"><i
                                                                            class="mdi mdi-reply"></i> Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex py-5 border-t border-gray-50 dark:border-zinc-600">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <div>
                                                            <i
                                                                class="bx bxs-user bg-violet-50/50 p-0.5 rounded-full text-violet-500 dark:bg-violet-500/30"></i>
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow">
                                                        <h5 class="mb-1 text-sm dark:text-gray-100">Keith McCoy <small
                                                                class="text-gray-500 dark:text-zinc-100 ltr:float-right rtl:float-left">12
                                                                Aug</small></h5>
                                                        <p class="text-gray-500 dark:text-zinc-100">Donec posuere vulputate
                                                            arcu. phasellus accumsan cursus velit</p>
                                                        <div class="pt-4">
                                                            <a href="javascript: void(0);" class="text-green-500"><i
                                                                    class="mdi mdi-reply"></i> Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="border-gray-50 dark:border-zinc-600">

                                        <div class="mt-8">
                                            <h5 class="mb-3 font-size-16 dark:text-gray-100">Leave a Reply:</h5>

                                            <form>
                                                <div class="grid grid-cols-12 md:gap-6">
                                                    <div class="col-span-12 md:col-span-6">
                                                        <div class="block mb-5">
                                                            <label
                                                                class="font-medium text-gray-700 dark:text-gray-100">Name</label>
                                                            <input type="text"
                                                                class="w-full mt-2 rounded border-gray-50 placeholder:text-1placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 focus:ring focus:ring-violet-500/20 text-13 focus:border-violet-100  dark:text-gray-100"
                                                                id="commentname-input" placeholder="Enter name">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 md:col-span-6">
                                                        <div class=" block mb-5">
                                                            <label
                                                                class="font-medium text-gray-700 dark:text-gray-100">Email</label>
                                                            <input type="email"
                                                                class="w-full mt-2 rounded border-gray-50 placeholder:text-13 placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:text-gray-100 text-13"
                                                                id="commentemail-input" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label
                                                        class="font-medium text-gray-700 dark:text-gray-100">Message</label>
                                                    <textarea
                                                        class="w-full mt-2 rounded border-gray-50 placeholder:text-13 placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:text-gray-100 text-13"
                                                        id="commentmessage-input" placeholder="Your message..." rows="3"></textarea>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit"
                                                        class="text-white border-transparent shadow-md btn w-28 bg-violet-500 shadow-violet-200 focus:ring focus:ring-violet-100 dark:shadow-zinc-600">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body">
                                    <div class="search-box">
                                        <h5 class="mb-3 text-gray-700 dark:text-gray-100">Search</h5>
                                        <div class="relative px-2">
                                            <input type="text"
                                                class="w-full pl-10 text-gray-700 border-transparent rounded bg-gray-50/50 placeholder:text-13 placeholder:text-gray-400 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-gray-200 dark:text-gray-100 text-13"
                                                placeholder="Search...">
                                            <i
                                                class="absolute text-lg text-gray-600 mdi mdi-magnify search-icon left-5 top-2 dark:text-zinc-100"></i>
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Categories</h5>
                                        <ul class="px-2 font-medium list-unstyled">
                                            <li><a href="#"
                                                    class="block pb-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Design<span
                                                        class="bg-violet-500/40 text-violet-500 ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 rounded-full">02</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Development
                                                    <span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left ms-1 text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">04</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Business<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">12</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Project<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">08</span></a>
                                            </li>
                                            <li><a href="#"
                                                    class="block pt-4 pb-0 text-gray-700 dark:text-gray-100 dark:border-zinc-600">Travel<span
                                                        class="bg-violet-500/40 text-violet-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5 dark:bg-violet-500/20 ">10</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-8">
                                        <h5 class="text-gray-700 dark:text-gray-100">Upcoming Post</h5>
                                        <div class="list-group">
                                            <a href="#" class="px-2 pt-0">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Beautiful Day
                                                            with Friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:00 AM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="border-gray-50 dark:border-zinc-600">
                                            <a href="#" class="px-2">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Drawing a
                                                            sketch</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:05 AM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="border-gray-50 dark:border-zinc-600">
                                            <a href="#" class="px-2">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Project
                                                            discussion with team</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:10 PM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="border-gray-50 dark:border-zinc-600">
                                            <a href="#" class="px-2">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                            class="w-16 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Coffee with
                                                            friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">20 August,
                                                            2022 <span class="">/ 05:30 PM</span></p>
                                                    </div>
                                                    <div class="text-4xl text-gray-500 dark:text-zinc-100">
                                                        <i class="mdi mdi-calendar"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <h5 class="text-gray-700 dark:text-gray-100">Popular Post</h5>
                                        <div class="list-group list-group-flush">
                                            <a href="javascript: void(0);"
                                                class="px-2 pt-0 pb-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Beautiful Day
                                                            with Friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">10 Apr, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Drawing a
                                                            sketch</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">24 May, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                                <div class="flex items-center">
                                                    <div class=" ltr:mr-4 rtl:ml-4">
                                                        <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                            class="w-20 h-auto rounded">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h5 class="text-gray-700 text-13 dark:text-gray-100">Coffee with
                                                            friends</h5>
                                                        <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">15 June, 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-12">
                                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Tag Clouds</h5>
                                        <div class="flex flex-wrap gap-2 px-2">
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Design</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Development</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Wordpress</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">HTML</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Project</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Business</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Travel</span></a>
                                            <a href="#" class="text-13"><span
                                                    class="bg-violet-500/40 text-violet-500 px-1 py-0.5 rounded font-medium dark:bg-violet-500/20">Photography</span></a>
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <h5 class="mb-4 text-gray-700 dark:text-gray-100">Instagram Post</h5>
                                        <div class="flex flex-wrap gap-2">
                                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt=""
                                                class="w-20 h-20 rounded">
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <h5 class="mb-3 text-gray-700 dark:text-gray-100">Email Newsletter</h5>
                                        <div class="">
                                            <div class="inline-flex w-full py-0 mb-0">
                                                <input type="text"
                                                    class="w-full border-gray-100 rounded placeholder:text-13 ltr:rounded-r-none rtl:rounded-l-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-gray-200 dark:text-gray-100 focus:ring focus:ring-violet-500/20 focus:border-violet-100 text-13"
                                                    placeholder="Enter Email">
                                                <button
                                                    class="px-4 py-0 border border-gray-100 btn bg-gray-50 ltr:border-l-0 rtl:border-r-0 ltr:rounded-l-none rtl:rounded-r-none dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100">
                                                    <i class="mdi mdi-send-outline"></i>
                                                </button>
                                            </div>
                                        </div>
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
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection
