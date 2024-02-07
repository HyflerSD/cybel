@extends('layouts.master')
@section('title')
    {{ __('FAQs') }}
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="FAQs" pagetitle="Components" />

                <div class="grid grid-cols-12 gap-6 mb-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="mb-6 card-body">
                                <div class="grid grid-cols-1 lg:grid-cols-12">
                                    <div class="col-span-12 md:max-w-2xl mx-auto">
                                        <div class="text-center mt-4">
                                            <h5 class="text-gray-700 dark:text-gray-100">Can't find what you are looking
                                                for?</h5>
                                            <p class="mt-2 text-gray-500 dark:text-zinc-100/60 md:mx-2">If several languages
                                                coalesce, the grammar of the resulting language
                                                is more simple and regular than that of the individual</p>
                                            <div class="mt-4">
                                                <button type="button"
                                                    class="mt-2 mr-2 text-white border-transparent shadow-md btn bg-violet-500 shadow-violet-200 focus:ring focus:ring-violet-50 dark:shadow-zinc-600">Email
                                                    Us</button>
                                                <button type="button"
                                                    class="mt-2 text-white bg-green-500 border-transparent shadow-md btn shadow-green-100 waves-effect waves-light focus:ring focus:ring-green-100 dark:shadow-zinc-600">Send
                                                    us a
                                                    tweet</button>
                                            </div>
                                        </div>
                                        <form
                                            class="mt-10 mb-16 app-search d-none d-lg-block max-w-lg mx-auto hidden md:block">
                                            <div class="relative flex">
                                                <input type="text"
                                                    class="w-full pr-16 border border-transparent rounded form-control bg-violet-100 dark:border-zinc-600 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:text-gray-100"
                                                    placeholder="Search...">
                                                <button
                                                    class=" bg-violet-500 px-3 py-1.5 top-1 text-white rounded-md absolute right-1 shadow-md shadow-violet-500/50 "
                                                    type="button"><i class="align-middle bx bx-search-alt"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3 mt-12 md:mt-0">
                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">01.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">What is Lorem
                                                Ipsum?</h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">New common
                                                language will be more simple and regular than the existing European
                                                languages. It will be as simple as occidental.</p>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">02.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">Where does it come
                                                from?</h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">Everyone
                                                realizes why a new common language would be desirable one could refuse to
                                                pay expensive translators.</p>
                                        </div>

                                    </div>

                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">03.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">Where can I get
                                                some?</h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">If several
                                                languages coalesce, the grammar of the resulting language is more simple and
                                                regular than that of the individual languages.</p>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">04.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">Why do we use it?
                                            </h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">Their
                                                separate existence is a myth. For science, music, sport, etc, Europe uses
                                                the same vocabulary.</p>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">05.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">Where can I get
                                                some?</h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">The point of
                                                using Lorem Ipsum is that it has a more-or-less normal they distribution of
                                                letters opposed to using content here. </p>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden border rounded-md border-gray-50 dark:border-zinc-600">
                                        <div class="relative">
                                            <i
                                                class="absolute bx bx-help-circle text-7xl text-violet-50/50 ltr:-right-3 rtl:-left-4 -top-6 dark:text-violet-500/10"></i>
                                        </div>
                                        <div class="p-5">
                                            <h5 class="text-violet-500 font-medium">06.</h5>
                                            <h5 class="mt-4 text-gray-700 font-medium dark:text-gray-100">What is Lorem
                                                Ipsum?</h5>
                                            <p class="mt-3 mb-0 text-gray-500 text-muted dark:text-zinc-100/60">To an
                                                English person, it will seem like simplified English, as a skeptical
                                                Cambridge friend of mine told me what Occidental</p>
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
