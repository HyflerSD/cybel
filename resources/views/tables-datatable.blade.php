@extends('layouts.master')
@section('title')
    {{ __('Bootstrap Basic Tables') }}
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <!-- page title -->
                <x-page-title title="Bootstrap Basic Tables" pagetitle="Tables" />

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Default Datatable</h6>
                            </div>
                            <div class="relative overflow-x-auto card-body">
                                <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Name</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Position</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Office</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Age</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Start date</th>
                                            <th class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tiger Nixon</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                System Architect</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/04/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $320,800</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Garrett Winters</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Accountant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                63</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/07/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $170,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Ashton Cox</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Junior Technical Author</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                66</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/01/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $86,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Cedric Kelly</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Senior Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/03/29</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $433,060</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Airi Satou</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Accountant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                33</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/11/28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $162,700</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Brielle Williamson</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/12/02</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $372,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Herrod Chandler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                59</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/08/06</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $137,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Rhona Davidson</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                55</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/10/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $327,900</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Colleen Hurst</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                39</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/09/15</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $205,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sonya Frost</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                23</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $103,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jena Gaines</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $90,560</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Quinn Flynn</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/03/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $342,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Charde Marshall</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                36</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/10/16</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $470,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Haley Kennedy</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Senior Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                43</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/12/18</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $313,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tatyana Fitzpatrick</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/03/17</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $385,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michael Silva</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                66</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/11/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $198,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Paul Byrd</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Financial Officer (CFO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/06/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $725,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gloria Little</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Systems Administrator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                59</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/04/10</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $237,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Bradley Greer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                41</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/10/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $132,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Dai Rios</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Personnel Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                35</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/09/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $217,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jenette Caldwell</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Development Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/09/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $345,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Yuri Berry</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Marketing Officer (CMO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                40</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/06/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $675,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Caesar Vance</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Pre-Sales Support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/12/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $106,450</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Doris Wilder</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sidney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                23</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/09/20</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $85,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Angelica Ramos</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Executive Officer (CEO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/10/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gavin Joyce</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                42</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/12/22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $92,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jennifer Chang</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/11/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $357,650</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Brenden Wagner</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $206,850</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Fiona Green</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Operating Officer (COO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                48</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/03/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $850,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Shou Itou</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Marketing</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                20</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/08/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $163,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michelle House</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sidney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/02</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $95,400</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Suki Burks</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                53</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/10/22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $114,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Prescott Bartlett</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Technical Author</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/05/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $145,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gavin Cortez</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Team Leader</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/10/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $235,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Martena Mccray</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Post-Sales support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                46</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/03/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $324,050</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Unity Butler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/12/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $85,675</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Howard Hatfield</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                51</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/16</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $164,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Hope Fuentes</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Secretary</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                41</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/02/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $109,850</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Vivian Harrell</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Financial Controller</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                62</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/02/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $452,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Timothy Mooney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $136,200</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jackson Bradshaw</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                65</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/09/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $645,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Olivia Liang</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/02/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $234,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Bruno Nash</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                38</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/05/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $163,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sakura Yamamoto</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/08/19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $139,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Thor Walton</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/08/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $98,540</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Finn Camacho</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/07/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $87,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Serge Baldwin</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Data Coordinator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/04/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $138,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Zenaida Frank</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                63</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/01/04</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $125,250</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Zorita Serrano</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                56</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/06/01</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $115,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jennifer Acosta</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Junior Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                43</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/02/01</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $75,650</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Cara Stevens</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                46</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/12/06</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $145,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Hermione Butler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/03/21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $356,250</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Lael Greer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Systems Administrator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/02/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $103,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jonas Alexander</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/07/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $86,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Shad Decker</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                51</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/11/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $183,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michael Bruce</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                29</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $183,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Donna Snider</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Customer Support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/01/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $112,000</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                                <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Default Datatable</h6>
                            </div>
                            <div class="relative overflow-x-auto card-body">
                                <table id="datatable-buttons" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Name</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Position</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Office</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Age</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Start date</th>
                                            <th
                                                class="p-4 pr-8 border rtl:border-l-0  border-gray-50 dark:border-zinc-600">
                                                Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tiger Nixon</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                System Architect</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/04/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $320,800</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Garrett Winters</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Accountant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                63</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/07/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $170,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Ashton Cox</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Junior Technical Author</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                66</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/01/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $86,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Cedric Kelly</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Senior Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/03/29</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $433,060</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Airi Satou</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Accountant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                33</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/11/28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $162,700</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Brielle Williamson</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/12/02</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $372,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Herrod Chandler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                59</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/08/06</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $137,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Rhona Davidson</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                55</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/10/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $327,900</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Colleen Hurst</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                39</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/09/15</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $205,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sonya Frost</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                23</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $103,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jena Gaines</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $90,560</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Quinn Flynn</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/03/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $342,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Charde Marshall</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                36</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/10/16</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $470,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Haley Kennedy</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Senior Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                43</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/12/18</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $313,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tatyana Fitzpatrick</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/03/17</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $385,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michael Silva</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                66</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/11/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $198,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Paul Byrd</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Financial Officer (CFO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/06/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $725,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gloria Little</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Systems Administrator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                59</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/04/10</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $237,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Bradley Greer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                41</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/10/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $132,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Dai Rios</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Personnel Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                35</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/09/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $217,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jenette Caldwell</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Development Lead</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/09/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $345,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Yuri Berry</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Marketing Officer (CMO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                40</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/06/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $675,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Caesar Vance</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Pre-Sales Support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/12/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $106,450</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Doris Wilder</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sidney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                23</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/09/20</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $85,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Angelica Ramos</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Executive Officer (CEO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/10/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gavin Joyce</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                42</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/12/22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $92,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jennifer Chang</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/11/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $357,650</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Brenden Wagner</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                28</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $206,850</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Fiona Green</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Chief Operating Officer (COO)</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                48</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/03/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $850,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Shou Itou</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Marketing</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                20</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/08/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $163,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michelle House</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Integration Specialist</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sidney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/02</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $95,400</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Suki Burks</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                53</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/10/22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $114,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Prescott Bartlett</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Technical Author</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/05/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $145,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Gavin Cortez</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Team Leader</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                22</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/10/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $235,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Martena Mccray</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Post-Sales support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                46</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/03/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $324,050</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Unity Butler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Marketing Designer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/12/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $85,675</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Howard Hatfield</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                51</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/16</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $164,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Hope Fuentes</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Secretary</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                41</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/02/12</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $109,850</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Vivian Harrell</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Financial Controller</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                62</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/02/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $452,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Timothy Mooney</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Office Manager</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/12/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $136,200</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jackson Bradshaw</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                65</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/09/26</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $645,750</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Olivia Liang</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/02/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $234,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Bruno Nash</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                38</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/05/03</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $163,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sakura Yamamoto</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Tokyo</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                37</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/08/19</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $139,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Thor Walton</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                61</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/08/11</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $98,540</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Finn Camacho</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Support Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/07/07</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $87,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Serge Baldwin</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Data Coordinator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                64</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/04/09</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $138,575</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Zenaida Frank</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                63</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/01/04</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $125,250</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Zorita Serrano</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Software Engineer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                56</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2012/06/01</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $115,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jennifer Acosta</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Junior Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                43</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2013/02/01</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $75,650</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Cara Stevens</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Sales Assistant</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                46</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/12/06</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $145,600</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Hermione Butler</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                47</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/03/21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $356,250</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Lael Greer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Systems Administrator</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                London</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                21</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2009/02/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $103,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Jonas Alexander</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                San Francisco</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                30</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2010/07/14</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $86,500</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Shad Decker</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Regional Director</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Edinburgh</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                51</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2008/11/13</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $183,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Michael Bruce</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Javascript Developer</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Singapore</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                29</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/06/27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $183,000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                                Donna Snider</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                Customer Support</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                New York</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                27</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                                2011/01/25</td>
                                            <td
                                                class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                                $112,000</td>
                                        </tr>
                                    </tbody>
                                </table>

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

    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>
@endsection
