@extends('layouts.admin')

@section('title') {{'Student Courses'}} @endsection

@section('content')
    @php
    $user = auth()->user();
    @endphp
        <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">User Profile</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">UI Elements</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">User Profile</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        <img src="../assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">Kiran Patel </div>
                                    <div class="profile-usertitle-job"> Professor </div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="pull-right">1,200</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="pull-right">750</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="pull-right">11,172</a>
                                    </li>
                                </ul>
                                <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR BUTTONS -->
                                <div class="profile-userbuttons">
                                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                    <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                </div>
                                <!-- END SIDEBAR BUTTONS -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>About Me</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="profile-desc">
                                    Hello I am Dave Gomache a web and user interface designer. I love to work
                                    with the application interface and
                                    the web elements.
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Gender </b>
                                        <div class="profile-desc-item pull-right">Male</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Project Done </b>
                                        <div class="profile-desc-item pull-right">30+</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Skills</b>
                                        <div class="profile-desc-item pull-right">Java,Spring</div>
                                    </li>
                                </ul>
                                <div class="row list-separated profile-stat">
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="uppercase profile-stat-title"> 37 </div>
                                        <div class="uppercase profile-stat-text"> Projects </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="uppercase profile-stat-title"> 51 </div>
                                        <div class="uppercase profile-stat-text"> Tasks </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="uppercase profile-stat-title"> 61 </div>
                                        <div class="uppercase profile-stat-text"> Uploads </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Performance</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <ul class="performance-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-circle-o" style="color:#F39C12;"></i> Total Product
                                            Sales <span class="pull-right">23456</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-circle-o" style="color:#DD4B39;"></i> Total Product
                                            Refer <span class="pull-right">$234</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-circle-o" style="color:#00A65A;"></i> Total Earn
                                            <span class="pull-right"> $345000</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Work Progress</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="work-monitor work-progress">
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Operations</div>
                                            <div class="percent pull-right">80%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">80% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Consultation</div>
                                            <div class="percent pull-right">55%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 45%">
                                                <span class="sr-only">55% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Support</div>
                                            <div class="percent pull-right">20%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 35%">
                                                <span class="sr-only">20% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Student Interests</header>
                                    </div>
                                    <div class="card-body" id="bar-parent">
                                        <form action="#" id="form_sample_1" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Course Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="coursename" placeholder="enter course name"
                                                               class="form-control input-height" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Course Code
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="ccode" placeholder="enter course code"
                                                               class="form-control input-height" /> </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Course Details
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
													<textarea name="address" placeholder="course details"
                                                              class="form-control-textarea" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Starting Date
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <div class="input-append date">
                                                            <div id="dateIcon" class="input-group datePicker">
                                                                <input class="formDatePicker form-control" type="text"
                                                                       placeholder="Select Date.." data-input>
                                                                <span class="dateBtn">
																<a class="input-button" title="toggle" data-toggle>
																	<i class="icon-calendar"></i>
																</a>
																<a class="input-button" title="clear" data-clear>
																	<i class="icon-close"></i>
																</a>
															</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Course Duration
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="csuration" placeholder="Course Duration"
                                                               class="form-control input-height" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Course Price
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="cprice" placeholder="Course Price"
                                                               class="form-control input-height" /> </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Professor Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <select class="form-select input-height" name="proff">
                                                            <option value="">Select...</option>
                                                            <option value="Category 1">Pr. Jayesh Patel</option>
                                                            <option value="Category 2">Pr. Salini Parmar</option>
                                                            <option value="Category 3">Pr. Mayank Trivedi</option>
                                                            <option value="Category 3">Pr. Parit Varma</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Maximum Students
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="maxstud" placeholder="Maximum Students"
                                                               class="form-control input-height" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Contact No.
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input name="number" type="text" placeholder="Contact Number"
                                                               class="form-control input-height" /> </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Profile Picture
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input type="file" class="default" multiple>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="offset-md-3 col-md-9">
                                                            <button type="button"
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
                                                            <button type="button"
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
                                class="material-icons">chat</i>Chat
                            <span class="badge badge-danger">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
                                class="material-icons">settings</i>
                            Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Start User Chat -->
                    <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                         id="quick_sidebar_tab_1">
                        <div class="chat-sidebar-list">
                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                 data-wrapper-class="chat-sidebar-list">
                                <div class="chat-header">
                                    <h5 class="list-heading">Online</h5>
                                </div>
                                <ul class="media-list list-items">
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user3.jpg" width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">John Deo</h5>
                                            <div class="media-heading-sub">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">5</span>
                                        </div> <img class="media-object" src="../assets/img/user/user1.jpg"
                                                    width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Rajesh</h5>
                                            <div class="media-heading-sub">Director</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user5.jpg" width="35" height="35" alt="...">
                                        <i class="away dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jacob Ryan</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">8</span>
                                        </div> <img class="media-object" src="../assets/img/user/user4.jpg"
                                                    width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Kehn Anderson</h5>
                                            <div class="media-heading-sub">CEO</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user2.jpg" width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Sarah Smith</h5>
                                            <div class="media-heading-sub">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user7.jpg" width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Vlad Cardella</h5>
                                            <div class="media-heading-sub">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chat-header">
                                    <h5 class="list-heading">Offline</h5>
                                </div>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">4</span>
                                        </div> <img class="media-object" src="../assets/img/user/user6.jpg"
                                                    width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jennifer Maklen</h5>
                                            <div class="media-heading-sub">Nurse</div>
                                            <div class="media-heading-small">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user8.jpg" width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lina Smith</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                            <div class="media-heading-small">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">9</span>
                                        </div> <img class="media-object" src="../assets/img/user/user9.jpg"
                                                    width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jeff Adam</h5>
                                            <div class="media-heading-sub">Compounder</div>
                                            <div class="media-heading-small">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object"
                                                           src="../assets/img/user/user10.jpg" width="35" height="35"
                                                           alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Anjelina Cardella</h5>
                                            <div class="media-heading-sub">Physiotherapist</div>
                                            <div class="media-heading-small">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End User Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                        <div class="chat-sidebar-settings-list slimscroll-style">
                            <div class="chat-header">
                                <h5 class="list-heading">Layout Settings</h5>
                            </div>
                            <div class="chatpane inner-content ">
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Position</div>
                                        <div class="setting-set">
                                            <select
                                                class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Header</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-header-option form-control input-inline input-sm input-small ">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Footer</div>
                                        <div class="setting-set">
                                            <select
                                                class="page-footer-option form-control input-inline input-sm input-small ">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header">
                                    <h5 class="list-heading">Account Settings</h5>
                                </div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Notifications</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-1">
                                                    <input type="checkbox" id="switch-1"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Show Online</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-7">
                                                    <input type="checkbox" id="switch-7"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Status</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-2">
                                                    <input type="checkbox" id="switch-2"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">2 Steps Verification</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-3">
                                                    <input type="checkbox" id="switch-3"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header">
                                    <h5 class="list-heading">General Settings</h5>
                                </div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Location</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-4">
                                                    <input type="checkbox" id="switch-4"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Save Histry</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-5">
                                                    <input type="checkbox" id="switch-5"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Auto Updates</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-6">
                                                    <input type="checkbox" id="switch-6"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
@endsection
