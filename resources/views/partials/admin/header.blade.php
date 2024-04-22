@php
    $user = auth()->user();
@endphp
<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            @if($user->is_advisor)
                <a href="{{ route('admin.dashboard') }}">
                    <span class="logo-icon material-icons "></span>
                    <span class="logo-default">Faculty</span></a>
            @else
                <a href="{{ route('student.dashboard') }}">
                    <span class="logo-icon material-icons "></span>
                    <span class="logo-default">Student</span></a>
            @endif
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
        </ul>
        <!-- start mobile menu -->
        <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>
                <!-- start notification dropdown -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <i data-feather="bell"></i>
                        <span class="badge headerBadgeColor1"> 6 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Notifications</span></h3>
                            <span class="notification-label purple-bgcolor">New 6</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
													Congratulations!. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">7 mins</span>
                                        <span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">12 mins</span>
                                        <span class="details">
													<span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">15 mins</span>
                                        <span class="details">
													<span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 hrs</span>
                                        <span class="details">
													<span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="javascript:void(0)"> All notifications </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end notification dropdown -->
                <!-- start message dropdown -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <i data-feather="mail"></i>
                        <span class="badge headerBadgeColor2"> 2 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Messages</span></h3>
                            <span class="notification-label cyan-bgcolor">New 2</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="#">
												<span class="photo">
													<img src="/admin/assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
                                        <span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
                                        <span class="message"> Jatin I found you on LinkedIn... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
												<span class="photo">
													<img src="/admin/assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
                                        <span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
                                        <span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
												<span class="photo">
													<img src="/admin/assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
                                        <span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
                                        <span class="message"> pls take a print of attachments. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
												<span class="photo">
													<img src="/admin/assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
                                        <span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
                                        <span class="message"> Apply for Ortho Surgeon </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
												<span class="photo">
													<img src="/admin/assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
                                        <span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
                                        <span class="message"> Request for leave application. </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="#"> All Messages </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end message dropdown -->
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img alt="" class="img-circle" src="/admin/assets/img/user/profile_pic.jpg" />

                        <span class="username username-hide-on-mobile"> {{ $user->fname . ' ' . $user->lname }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        @if(!$user->is_advisor)
                            <li>
                                <a href="{{ route('student.profile') }}">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                        @endif

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                       data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end header -->
