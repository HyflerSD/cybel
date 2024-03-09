@php
$user = auth()->user();
@endphp
<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="/admin/assets/img/dp.jpg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ $user->fname  . ' ' . $user->lname }}</div>
                            <div class="user-role">
                                @if($user->is_advisor) Advisor @else
                                    Student ID: {{ session('student')->student_id }}
                                    @endif

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    @if($user->is_advisor)
                    <a href="event.html" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                        <span class="title">Appointments</span>
                    </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if( $user->is_advisor)
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i data-feather="map-pin"></i>
                        <span class="title">
                                Maps
                        </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="google_maps.html" class="nav-link ">
                                <span class="title">View Student Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="google_maps.html" class="nav-link ">
                                <span class="title">View Major Models</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="vector_maps.html" class="nav-link ">
                                <span class="title">Edit Student Maps</span>
                            </a>
                        </li>
                    </ul>
                    @else
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i data-feather="map-pin"></i>
                            <span class="title">
                               My Map
                        </span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">View Map</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Edit Map</span>
                                </a>
                            </li>
                        </ul>

                    @endif
                </li>
                <li class="nav-item">
                    @if($user->is_advisor)
                    <a href="" class="nav-link nav-toggle"> <i data-feather="user"></i>
                        <span class="title">Advisees</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.advisees') }}" class="nav-link "> <span class="title">All
												Advisees</span>
                            </a>
                        </li>
                    </ul>
                    @else

                        <a href="" class="nav-link nav-toggle"> <i data-feather="user"></i>
                            <span class="title">Advisor</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a class="nav-link "> <span class="title">
                                        {{ 'Name: ' .  $user->lname . ' ' . $user->fname }}</span><br>
                                    <span class="title">
                                        {{ 'Email: ' .  $user->email }}</span>
                                </a>
                            </li>
                        </ul>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
                        <span class="title">Courses</span> <span class="arrow"></span>
                        <span class="label label-rouded label-menu label-success">new</span>
                    </a>
                    <ul class="sub-menu">
                      @if($user->is_advisor)
                            <li class="nav-item">
                                    <a href="{{ route('admin.courses')  }}" class="nav-link "> <span class="title">All
												Courses</span>
                                    </a>
                            </li>
                        <li class="nav-item">
                            <a href="add_course.html" class="nav-link "> <span class="title">Add
												Course</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="edit_course.html" class="nav-link "> <span class="title">Edit
												Course</span>
                            </a>
                        </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('student.courses')  }}" class="nav-link "> <span class="title">All
												Courses</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item">
                    @if($user->is_advisor)
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="briefcase"></i>
                        <span class="title">Department</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a class="nav-link "> <span class="title">Entec</span>
                            </a>
                        </li>
                    </ul>
                    @endif
                </li>
                @if($user->is_advisor)
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i data-feather="mail"></i>
                        <span class="title">Email</span>
                        <span class="arrow"></span>
                        <span class="label label-rouded label-menu label-danger">new</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="email_inbox.html" class="nav-link ">
                                <span class="title">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="email_view.html" class="nav-link ">
                                <span class="title">View Mail</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="email_compose.html" class="nav-link ">
                                <span class="title">Compose Mail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i data-feather="server"></i>
                        <span class="title">Forms </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="layouts_form.html" class="nav-link ">
                                <span class="title">Form Layout</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="advance_form.html" class="nav-link ">
                                <span class="title">Advance Component</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="wizard.html" class="nav-link ">
                                <span class="title">Form Wizard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="validation_form.html" class="nav-link ">
                                <span class="title">Form Validation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="editable_form.html" class="nav-link ">
                                <span class="title">Editor</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
