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
                        <div class="page-title">Add Profile</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Enter Your Preferences</header>
                                    </div>
                                    <div class="card-body" id="bar-parent">
                                        <form method="POST" action="{{ route('student.save-profile') }}" id="form_sample_1" class="form-horizontal">
                                            @csrf
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Degree Path
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="concentration_code" class="form-select" id="profile_preference">
                                                            <option value="S9501">Software Engineering</option>
                                                            <option disabled value="IST"> Networking | future feature</option>
                                                            <option disabled value="CIST">Computer Information Systems | future feature</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Campus
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="campus_code" class="form-select" id="campus-select">
                                                            <option value="nc">North</option>
                                                            <option value="wc">Wolfson</option>
                                                            <option value="kc">Kendall</option>
                                                            <option value="dc">Doral</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Profile Preference
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="priority" class="form-select" id="profile_priority">
                                                            <option value="1">First Preference</option>
                                                            <option disabled value="2">Second Preference| future feature</option>
                                                            <option disabled value="3">Third Preference| future feature</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Course Per Semester
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="courses_per_semester" class="form-select" id="courses_per_semester">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Expected Graduation
                                                    </label>
                                                    <div class="col-md-5">
                                                        <input readonly disabled type="text" value="" name="expected_graduation_date" placeholder="pending map generation"
                                                               class="form-control input-height" /> </div>
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Time Of Day
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="time_of_day[]" id="time_of_day" class="form-control select2-multiple" multiple>
                                                            <option value="Morning">Morning</option>
                                                            <option value="Afternoon">Afternoon</option>
                                                            <option value="Night">Night</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label">Days Of Week
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="days_of_week[]" id="days_of_week" class="form-control select2-multiple" multiple>
                                                            <optgroup label="WeekDays">
                                                                <option value="MWF">Monday, Wednesday, Friday (MWF)</option>
                                                                <option value="TTh">Tuesday, Thursday (TTh)</option>
                                                                <option value="MW">Monday, Wednesday (MW)</option>
                                                                <option value="MF">Monday, Friday (MF)</option>
                                                                <option value="WF">Wednesday, Friday (WF)</option>
                                                                <option value="T">Tuesday Only (T)</option>
                                                                <option value="Th">Thursday Only (Th)</option>
                                                                <option value="M">Monday Only (M)</option>
                                                                <option value="W">Wednesday Only (W)</option>
                                                                <option value="F">Friday Only (F)</option>
                                                            </optgroup>
                                                            <optgroup label="Weekends">
                                                                <option value="S">Saturday</option>
                                                                <option value="Su">Sunday</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label"> Mode of Instruction
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select name="mode_of_instruction" class="form-select" id="mode_of_instruction">
                                                            <option value="blended">Blended</option>
                                                            <option value="live">Live</option>
                                                            <option value="In Person">In Person</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-md-4 control-label"> Area of Interest
                                                    </label>
                                                    <div class="col-lg-9 col-md-8">
                                                        <select required name="interest_area" class="form-select" id="area_of_interest">
                                                            <option value="Front-end Development">Front-end Development</option>
                                                            <option value="Backend Development">Back-end Development</option>
                                                            <option value="Full Stack Development">Full Stack Development</option>
                                                            <option value="Mobile App Development">Mobile App Development</option>
                                                            <option value="Embedded Systems">Embedded Systems</option>
                                                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                                                            <option value="Machine Learning">Machine Learning</option>
                                                            <option value="Data Science">Data Science</option>
                                                            <option value="Cyber Security">Cyber Security</option>
                                                            <option value="Cloud Computing">Cloud Computing</option>
                                                            <option value="Networking">Networking</option>
                                                            <option value="Blockchain">Blockchain</option>
                                                            <option value="Robotics">Robotics</option>
                                                            <option value="Game Development">Game Development</option>
                                                            <option value="Ui Ux Design">UI/UX Design</option>
                                                            <option value="Virtual Reality">Virtual Reality</option>
                                                            <option value="Augmented Reality">Augmented Reality</option>
                                                            <option value="Quantum Computing">Quantum Computing</option>
                                                            <option value="Internet Of Things">Internet of Things</option>
                                                            <option value="Ethical Hacking">Ethical Hacking</option>
                                                        </select>

                                                    </div>
                                                </div>




                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="offset-md-3 col-md-9">
                                                            <button type="submit"
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
                                                            <button type="button"
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
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
