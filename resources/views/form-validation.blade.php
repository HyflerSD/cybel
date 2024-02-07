<!DOCTYPE html>
@extends('layouts.master')
@section('title')
    {{ __('Form Validation') }}
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
                <x-page-title title="Form Validation" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Validation - Normal</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationCustom01">First name</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationCustom01" placeholder="First name" value="Mark"
                                                        required="">
                                                    <i
                                                        class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div class="mt-2 text-xs text-green-500">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-3">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationCustom02">Last name</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationCustom02" placeholder="Last name" value="Otto"
                                                        required="">
                                                    <i
                                                        class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div class="mt-2 text-xs text-green-500"> Looks good! </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationCustom03">City</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10"
                                                        id="validationCustom03" placeholder="City" required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="mt-2 text-xs text-red-500"> Please provide a valid city.</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationCustom04">State</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10"
                                                        id="validationCustom04" placeholder="State" required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="mt-2 text-xs text-red-500"> Please provide a valid state.</div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationCustom05">Zip</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-red-500/10"
                                                        id="validationCustom05" placeholder="Zip" required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div class="mt-2 text-xs text-red-500"> Please provide a valid zip.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <div class="mb-3">
                                                <div class="mt-3 form-check">
                                                    <input type="checkbox"
                                                        class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500"
                                                        id="formrow-customCheck">
                                                    <label class="text-red-500 ltr:ml-2 rtl:mr-2" for="invalidCheck">Agree
                                                        to terms and conditions</label>
                                                    <div class="mt-1 text-xs text-red-500 ml-7">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-3 text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-50"
                                        type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Validation (Tooltips)</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="relative mb-10">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationTooltip01">First name</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationTooltip01" placeholder="First name" value="Mark"
                                                        required="">
                                                    <i
                                                        class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div
                                                    class="absolute z-50 inline-block px-3 py-1.5 mt-2 text-xs text-white rounded bg-green-500/90">
                                                    Looks good! </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="relative mb-10">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationTooltip02">Last name</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-green-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationTooltip02" placeholder="Last name" value="Otto"
                                                        required="">
                                                    <i
                                                        class='bx bx-check absolute text-2xl text-green-500 ltr:right-2 rtl:left-2 top-1.5'></i>
                                                </div>
                                                <div
                                                    class="absolute z-50 inline-block px-3 py-1.5 mt-2 text-xs text-white rounded bg-green-500/90">
                                                    Looks good! </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="relative mb-10">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationTooltipUsername">Username</label>
                                                <div class="relative inline-flex items-stretch w-full">
                                                    <span
                                                        class="px-3 leading-[2.8] bg-gray-50 ltr:rounded-l rtl:rounded-r text-15 dark:bg-zinc-600 dark:text-gray-100"
                                                        id="validationTooltipUsernamePrepend">@</span>
                                                    <input type="text"
                                                        class="w-full ltr:rounded-l-none rtl:rounded-r-none border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-green-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationTooltipUsername" placeholder="Username"
                                                        aria-describedby="validationTooltipUsernamePrepend"
                                                        required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div
                                                    class="absolute left-0 z-50 inline-block px-3 py-1.5 mt-2text-xs text-white rounded bg-red-500/90 -bottom-16">
                                                    Please choose a unique and valid username.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-10">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationTooltip03">City</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationTooltip03" placeholder="City" required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div
                                                    class="absolute z-50 inline-block px-3 py-1.5 mt-2 text-xs text-white rounded bg-red-500/90">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-6">
                                            <div class="mb-10">
                                                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100"
                                                    for="validationTooltip04">State</label>
                                                <div class="relaive">
                                                    <input type="text"
                                                        class="w-full border-red-500 py-2.5 rounded text-sm text-gray-700 dark:text-gray-100 focus:ring focus:ring-red-50 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:focus:ring-green-500/10"
                                                        id="validationTooltip04" placeholder="State" required="">
                                                    <i
                                                        class='absolute text-xl text-red-500 bx bx-error-circle ltr:right-2 rtl:left-2 top-2'></i>
                                                </div>
                                                <div
                                                    class="absolute z-50 inline-block px-3 py-1.5 mt-2 text-xs text-white rounded bg-red-500/90">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-8 text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-50"
                                        type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-x-6 ">
                    <div class="col-span-12 xl:col-span-6">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Tailwind Validation - Normal</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="first_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">First
                                                name</label>
                                            <input type="text" id="first_name"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-100 focus:ring focus:ring-violet-500/20  block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="John" required>
                                        </div>
                                        <div>
                                            <label for="last_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Last
                                                name</label>
                                            <input type="text" id="last_name"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:ring-violet-100 focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="Doe" required>
                                        </div>
                                        <div>
                                            <label for="company"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Company</label>
                                            <input type="text" id="company"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="Flowbite" required>
                                        </div>
                                        <div>
                                            <label for="phone"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Phone
                                                number</label>
                                            <input type="tel" id="phone"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                        </div>
                                        <div>
                                            <label for="website"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Website
                                                URL</label>
                                            <input type="url" id="website"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="flowbite.com" required>
                                        </div>
                                        <div>
                                            <label for="visitors"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Unique
                                                visitors (per month)</label>
                                            <input type="number" id="visitors"
                                                class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Email
                                            address</label>
                                        <input type="email" id="email"
                                            class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                            placeholder="john.doe@company.com" required>
                                    </div>
                                    <div class="mb-6">
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Password</label>
                                        <input type="password" id="password"
                                            class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                            placeholder="•••••••••" required>
                                    </div>
                                    <div class="mb-6">
                                        <label for="confirm_password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-50">Confirm
                                            password</label>
                                        <input type="password" id="confirm_password"
                                            class=" border border-gray-100 text-gray-900 text-sm rounded focus:border-violet-100 focus:ring focus:ring-violet-500/20 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                            placeholder="•••••••••" required>
                                    </div>
                                    <div class="flex items-start mb-6">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" value=""
                                                class="w-4 h-4 border border-gray-100 rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 dark:checked:bg-violet-500"
                                                required>
                                        </div>
                                        <label for="remember"
                                            class="text-sm font-medium text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-300">I
                                            agree with the <a href="#"
                                                class="text-violet-600 hover:underline dark:text-violet-500">terms and
                                                conditions</a>.</label>
                                    </div>
                                    <button type="submit"
                                        class="text-white bg-violet-500 hover:bg-violet-700 focus:ring-2 focus:ring-violet-100 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Submit</button>
                                </form>
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
    <!-- alertifyjs js -->
    <script src="{{ URL::asset('build/libs/alertifyjs/build/alertify.min.js') }}"></script>

    <!-- notification init -->
    <script src="{{ URL::asset('build/js/pages/notification.init.js') }}"></script>
@endsection
