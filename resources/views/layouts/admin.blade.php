<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    @include('partials.admin.css')
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    @include('partials.admin.header')
    @include('partials.admin.settingpanel')
    <!-- start page container -->
    <div class="page-container">
        @include('partials.admin.sidebar')
        @yield('content')
    </div>
    <!-- end page container -->
    @include('partials.admin.footer')
</div>
@include('partials.admin.js')
</body>

</html>
