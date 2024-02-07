@extends('layouts.master')
@section('title')
    {{ __('Basic Elements') }}
@endsection
@section('css')
    <!-- alertifyjs Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="{{ URL::asset('build/libs/alertifyjs/build/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Basic Elements" pagetitle="Components" />

                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Textual inputs</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Text</label>
                                        <input
                                            class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100"
                                            type="text" placeholder="Artisanal kale" id="example-text-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Search</label>
                                        <input
                                            class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="search" value="How do I shoot web" id="example-search-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Email</label>
                                        <input
                                            class="w-full placeholder:text-sm py-1.5 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="email" value="bootstrap@example.com" id="example-email-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">URL</label>
                                        <input
                                            class="w-full placeholder:text-sm py-1.5 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="url" value="https://getbootstrap.com" id="example-email-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Telephone</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="tel" value="1-(555)-555-5555" id="example-email-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Password</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="password" value="hunter2" id="example-email-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Number</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="number" value="42" id="example-email-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Date and
                                            time</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="datetime-local" value="2019-08-19T13:45:00" id="example-email-input">
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Date</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Month</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="month" value="2019-08" id="example-month-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Week</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="week" value="2019-W33" id="example-week-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Time</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="time" value="13:45:00" id="example-time-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Color
                                            picker</label>
                                        <input
                                            class="h-10 p-1 text-sm text-gray-500 bg-transparent border border-gray-100 rounded focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 w-14"
                                            type="color" value="#5156be" id="example-color-input">
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-3">
                                            <label
                                                class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Select</label>
                                            <select
                                                class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Date and
                                            time</label>
                                        <input
                                            class="w-full border-gray-100 rounded placeholder:text-13 text-13 py-1.5 focus:border focus:ring focus:ring-violet-500/20 focus:border-violet-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                            type="datetime-local" value="2019-08-19T13:45:00" id="example-email-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h4 class="text-gray-700 text-15 dark:text-gray-100">Sizing</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                for="default-input">Default input</label>
                                            <input
                                                class="w-full placeholder:text-sm py-1.5 rounded border-gray-100 focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                type="text" id="default-input" placeholder="Default input">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                for="form-sm-input">Form Small input</label>
                                            <input
                                                class="w-full py-0.5 placeholder:text-xs rounded border-gray-100 focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                type="text" id="form-sm-input" placeholder=".form-control-sm">
                                        </div>
                                        <div>
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                for="form-lg-input">Form Large input</label>
                                            <input
                                                class="w-full py-2.5 placeholder:text-16 rounded-lg border-gray-100 focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                type="text" id="form-lg-input" placeholder=".form-control-lg">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h4 class="text-gray-700 text-15 dark:text-gray-100">Range Inputs</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                for="customRange1">Example range </label>
                                            <input class="w-full form-range" type="range" id="customRange1">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                for="customRange2">Min and max </label>
                                            <input class="w-full form-range" min="0" max="5"
                                                type="range" id="customRange2">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-x-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h4 class="text-gray-700 text-15 dark:text-gray-100">Range Inputs</h4>
                            </div>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Form groups</h5>

                                            <form class="mt-6">
                                                <div class="mb-3">
                                                    <label class="font-medium text-gray-700 dark:text-zinc-100"
                                                        for="formrow-firstname-input">First name</label>
                                                    <input type="text"
                                                        class="w-full mt-2 py-1.5 placeholder:text-sm border-gray-100 rounded focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                        id="formrow-firstname-input" placeholder="Enter Name">
                                                </div>

                                                <div class="grid grid-cols-12 gap-6">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label class="font-medium text-gray-700 dark:text-zinc-100"
                                                                for="formrow-email-input">Email</label>
                                                            <input type="email"
                                                                class="w-full mt-2 py-1.5 placeholder:text-sm border-gray-100 rounded focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100 "
                                                                id="formrow-email-input" placeholder="Enter your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label class="font-medium text-gray-700 dark:text-zinc-100"
                                                                for="formrow-password-input">Password</label>
                                                            <input type="password"
                                                                class="w-full mt-2 py-1.5 placeholder:text-sm border-gray-100 rounded focus:border focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                                id="formrow-password-input"
                                                                placeholder="Enter your password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="align-middle rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500"
                                                            id="formrow-customCheck">
                                                        <label class="ml-2 font-medium text-gray-700 dark:text-zinc-100"
                                                            for="formrow-customCheck">Check me out</label>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <button type="submit"
                                                        class="font-medium text-white border-transparent btn bg-violet-500 w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-10">
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Inline forms
                                                layout</h5>

                                            <form class="mt-5 ">
                                                <div class="grid items-center grid-cols-12 gap-4">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <input type="text"
                                                            class="w-full border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                                            id="specificSizeInputName" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div
                                                            class="flex items-center border rounded bg-gray-50 dark:border-zinc-600 dark:bg-zinc-600">
                                                            <div class="px-4 input-group-text dark:text-zinc-100">@</div>
                                                            <input type="text"
                                                                class="w-full border-0 border-l border-gray-100 placeholder:text-sm focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                                                id="specificSizeInputGroupUsername"
                                                                placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="form-check">
                                                            <input type="checkbox"
                                                                class="align-middle rounded  focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500 focus:border-violet-100 focus:ring focus:ring-violet-500/20"
                                                                id="formrow-customCheck">
                                                            <label class="text-gray-700 dark:text-zinc-100"
                                                                for="autoSizingCheck2"> Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <button type="submit"
                                                            class="text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-10">
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Inline forms
                                                layout used by hstack</h5>

                                            <form class="mt-5 ">
                                                <div class="flex gap-3">
                                                    <input
                                                        class="w-full border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                        type="text" placeholder="Add your item here...">
                                                    <button type="button"
                                                        class="text-white bg-gray-500 border-transparent btn focus:bg-gray-600 focus:ring focus:ring-gray-100">Submit</button>
                                                    <div class="border-l dark:border-zinc-600"></div>
                                                    <button type="reset"
                                                        class="text-red-500 border-red-500 btn hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white focus:ring focus:ring-red-100">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Horizontal form
                                            </h5>

                                            <form class="mt-6">
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-span-12 font-medium text-gray-700 lg:col-span-3 dark:text-zinc-100">First
                                                        name</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text"
                                                            class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            id="horizontal-firstname-input"
                                                            placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input"
                                                        class="col-span-12 font-medium text-gray-700 lg:col-span-3 dark:text-zinc-100">Email</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="email"
                                                            class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            id="horizontal-email-input" placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-password-input"
                                                        class="col-span-12 font-medium text-gray-700 lg:col-span-3 dark:text-zinc-100">Password</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="password"
                                                            class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100"
                                                            id="horizontal-password-input"
                                                            placeholder="Enter your password">
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-12 justify-content-end">
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <div class="form-check">
                                                            <input type="checkbox"
                                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500"
                                                                id="formrow-customCheck">
                                                            <label
                                                                class="ml-2 font-medium text-gray-700 dark:text-zinc-100"
                                                                for="formrow-customCheck">Check me out</label>
                                                        </div>

                                                        <div class="mt-6">
                                                            <button type="submit"
                                                                class="font-medium text-white border-transparent btn bg-violet-500 w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-10">
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Floating Label
                                            </h5>

                                            <form class="mt-5 ">
                                                <div class="grid items-center grid-cols-12 gap-4">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="relative">
                                                            <input type="text" id="floating_outlined"
                                                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded border-1 border-gray-100 appearance-none dark:text-white dark:border-zinc-600 dark:focus:border-violet-500 focus:outline-none focus:ring-0 focus:border-violet-600 peer"
                                                                placeholder=" " />
                                                            <label for="floating_outlined"
                                                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-3.5 z-10 origin-[0] left-2.5 peer-focus:text-violet-600 peer-focus:dark:text-violet-500 peer-focus:top-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Floating
                                                                filled</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="relative">
                                                            <input type="text" id="floating_outlined2"
                                                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded border-1 border-gray-100 appearance-none dark:text-white dark:border-zinc-600 dark:focus:border-violet-500 focus:outline-none focus:ring-0 focus:border-violet-600 peer"
                                                                placeholder=" " />
                                                            <label for="floating_outlined2"
                                                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-zinc-800 px-2 peer-focus:px-2 peer-focus:text-violet-600 peer-focus:dark:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Floating
                                                                outlined</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h4 class="text-gray-700 text-15 dark:text-gray-100">Checkboxes</h4>
                                </div>
                                <div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                            class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Form
                                                        Checkboxes</h5>
                                                    <form class="mt-5">
                                                        <div class="form-check">
                                                            <input type="checkbox"
                                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                id="formrow-customCheck">
                                                            <label
                                                                class="font-medium text-gray-700 ltr:ml-2 rtl:mr-2 dark:text-zinc-100"
                                                                for="formrow-customCheck">Form Checkbox</label>
                                                        </div>
                                                        <div class="mt-4 form-check">
                                                            <input type="checkbox"
                                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                checked id="formrow-customCheck">
                                                            <label
                                                                class="font-medium text-gray-700 ltr:ml-2 rtl:mr-2 dark:text-zinc-100"
                                                                for="formrow-customCheck">Form Checkbox checked</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                            class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Form
                                                        Checkboxes</h5>
                                                    <form class="mt-5">
                                                        <div class="form-check">
                                                            <label
                                                                class="font-medium text-gray-700 ltr:mr-2 rtl:ml-2 dark:text-zinc-100"
                                                                for="formrow-customCheck">Form Checkbox Right</label>
                                                            <input type="checkbox"
                                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                id="formrow-customCheck">
                                                        </div>
                                                        <div class="mt-4 form-check">
                                                            <label
                                                                class="font-medium text-gray-700 ltr:mr-2 rtl:ml-2 dark:text-zinc-100"
                                                                for="formrow-customCheck">Form Checkbox Right
                                                                checked</label>
                                                            <input type="checkbox"
                                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                checked id="formrow-customCheck">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                    <h4 class="text-gray-700 text-15 dark:text-gray-100">Radios</h4>
                                </div>
                                <div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                            class="mr-1 mdi mdi-arrow-right text-violet-500"></i>Form
                                                        Radios</h5>
                                                    <form class="mt-5">
                                                        <div class="flex items-center mb-4">
                                                            <input type="radio" name="default-radio"
                                                                class="ring-0 ring-offset-0 focus:bg-violet-500 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500" />
                                                            <label for="default-radio-1"
                                                                class="text-sm font-medium text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-300">Form
                                                                Radio</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input type="radio" name="default-radio"
                                                                class="ring-0 ring-offset-0 focus:bg-violet-500 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                checked />
                                                            <label for="default-radio-2"
                                                                class="text-sm font-medium text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-300">Form
                                                                Radio checked</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-6">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                            class="mr-1 mdi mdi-arrow-right text-violet-500"></i>Form
                                                        Radios</h5>
                                                    <form class="mt-5">
                                                        <div class="flex items-center mb-4">
                                                            <label for="default-radio-1"
                                                                class="text-sm font-medium text-gray-900 ltr:mr-2 rtl:ml-2 dark:text-gray-300">Form
                                                                Radio Right</label>
                                                            <input type="radio" name="default-radio"
                                                                class="ring-0 ring-offset-0 focus:bg-violet-500 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500" />
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="default-radio-2"
                                                                class="text-sm font-medium text-gray-900 ltr:mr-2 rtl:ml-2 dark:text-gray-300">Form
                                                                Radio Right checke</label>
                                                            <input type="radio" name="default-radio"
                                                                class="ring-0 ring-offset-0 focus:bg-violet-500 dark:bg-zinc-700 dark:border-zinc-400 checked:bg-violet-500 dark:checked:bg-violet-500"
                                                                checked />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-zinc-100">Switches</h6>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                class="mr-1 mdi mdi-arrow-right text-violet-500"></i>Switch examples</h5>

                                        <div class="mt-5">
                                            <div class="block">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer">
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Toggle
                                                        this switch element</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-600">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Checked
                                                        toggle</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center pointer-events-none">
                                                    <input type="checkbox" class="sr-only peer">
                                                    <div
                                                        class="w-10 h-5 bg-gray-50 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white/80 after:border-gray-50 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-400">Disabled
                                                        switch element</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-12 lg:col-span-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                class="mr-1 mdi mdi-arrow-right text-violet-500"></i>Sizes</h5>

                                        <div class="mt-5">
                                            <div class="block">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-8 h-4 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] ltr:after:left-[2px] rtl:after:right-4 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Small
                                                        Size Switch</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" value="" class="sr-only peer">
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-600">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Medium
                                                        Size Switch</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                                    <div
                                                        class="w-12 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 ltr:after:left-[2px] rtl:after:right-6 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-600">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Large
                                                        Size Switch</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-12 lg:col-span-4">
                                        <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                                class="mr-1 mdi mdi-arrow-right text-violet-500"></i>Color Switcher</h5>

                                        <div class="mt-5">
                                            <div class="block">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-violet-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Primary</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-gray-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Secondary</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-green-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Success</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-sky-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Info</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-yellow-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Warning</span>
                                                </label>
                                            </div>
                                            <div class="block mt-3">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked>
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] ltr:after:left-[2px] rtl:after:right-5 peer-checked:after:left-1.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-red-500">
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-700 ltr:ml-3 rtl:mr-3 dark:text-zinc-100">Danger</span>
                                                </label>
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
    <script src="{{ URL::asset('build/libs/alertifyjs/build/alertify.min.js') }}"></script>
@endsection
