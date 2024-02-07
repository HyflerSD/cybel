@extends('layouts.master')
@section('title')
    {{ __('Table Edit') }}
@endsection
@section('css')
    <!-- Responsive Table css -->
    <link href="{{ URL::asset('build/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="h-screen page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Table Edit" pagetitle="Tables" />

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100 dark:border-zinc-600">Table Edit
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table w-full text-left align-middle table-editable table-nowrap table-edits">
                                        <thead>
                                            <tr
                                                class="text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">
                                                <th class="p-3">ID</th>
                                                <th class="p-3">Name</th>
                                                <th class="p-3">Age</th>
                                                <th class="p-3">Gender</th>
                                                <th class="p-3">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600">
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="1">
                                                <td class="p-3 dark:text-zinc-100" data-field="id" style="width: 80px">1
                                                </td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">David McHenry</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">24</td>
                                                <td class="pl-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100" style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="2">
                                                <td class="p-3 dark:text-zinc-100" data-field="id">2</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">Frank Kirk</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">22</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="3">
                                                <td class="p-3 dark:text-zinc-100" data-field="id">3</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">Rafael Morales</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">26</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="4">
                                                <td class="p-3 dark:text-zinc-100" data-field="id">4</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">Mark Ellison</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">32</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="gender">Male</td>
                                                <td class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-50 dark:border-zinc-600" data-id="5">
                                                <td class="p-3 dark:text-zinc-100" data-field="id">5</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="name">Minnie Walter</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="age">27</td>
                                                <td class="p-3 dark:text-zinc-100" data-field="gender">Female</td>
                                                <td class="p-3 dark:text-zinc-100">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('build/libs/table-edits/build/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/table-editable.int.js') }}"></script>
@endsection
