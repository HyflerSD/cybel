<!-- ========== Left Sidebar Start ========== -->
<div class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul id="side-menu">
                <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ url('index') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home" fill="#545a6d33"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                        <span data-key="t-apps" > Apps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('app-calendar') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                        </li>
                        <li>
                            <a href="{{ url('app-chat') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Email</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('apps-email-inbox') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-email-read') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Invoices</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('apps-invoices-list') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice List</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-invoices-detail') }}" class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Contacts</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('apps-contacts-grid') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User Grid</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-contacts-list') }}" class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User List</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-contacts-profile') }}" class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false" class="flex items-center justify-between py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear  pl-[52.8px] pr-6 hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Blog</span>
                                <span class="px-2 py-0.5 font-medium text-red-400 rounded-full bg-red-50 text-10 badge text-end group-data-[sidebar-size=sm]:hidden">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('apps-blog-grid') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-blog-list') }}" class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog List</a>
                                </li>
                                <li>
                                    <a href="{{ url('apps-blog-detail') }}" class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="users" fill="#545a6d33"></i>
                        <span data-key="t-auth" >Authentication</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('login') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                        </li>
                        <li>
                            <a href="{{ url('register') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                        </li>
                        <li>
                            <a href="{{ url('recoverpw') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover Password</a>
                        </li>
                        <li>
                            <a href="{{ url('lock-screen') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock Screen</a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log Out</a>
                        </li>
                        <li>
                            <a href="{{ url('confirm-mail') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm Mail</a>
                        </li>
                        <li>
                            <a href="{{ url('email-verification') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email Verification</a>
                        </li>
                        <li>
                            <a href="{{ url('two-step-verification') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two Step Verification</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase" fill="#545a6d33"></i><span data-key="t-pages">Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('starter') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                        </li>
                        <li>
                            <a href="{{ url('maintenance') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Maintenance</a>
                        </li>
                        <li>
                            <a href="{{ url('coming-soon') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="{{ url('timeline') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Timeline</a>
                        </li>
                        <li>
                            <a href="{{ url('faqs') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">FAQs</a>
                        </li>
                        <li>
                            <a href="{{ url('pricing') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Pricing</a>
                        </li>
                        <li>
                            <a href="{{ url('404') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 404</a>
                        </li>
                        <li>
                            <a href="{{ url('500') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 500</a>
                        </li>
                    </ul>
                </li>

                <li class="px-5 py-3 mt-2 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden" data-key="t-elements">Elements</li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase" fill="#545a6d33"></i>
                        <span data-key="t-compo">Components</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('alerts') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                        </li>
                        <li>
                            <a href="{{ url('buttons') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
                        </li>
                        <li>
                            <a href="{{ url('cards') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
                        </li>
                        <li>
                            <a href="{{ url('dropdown') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
                        </li>
                        <li>
                            <a href="{{ url('flexbox&grid') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox & Grid</a>
                        </li>
                        <li>
                            <a href="{{ url('sizing') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
                        </li>
                        <li>
                            <a href="{{ url('avatars') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
                        </li>
                        <li>
                            <a href="{{ url('modals') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
                        </li>
                        <li>
                            <a href="{{ url('progress') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
                        </li>
                        <li>
                            <a href="{{ url('tabs&accordions') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs & Accordions</a>
                        </li>
                        <li>
                            <a href="{{ url('typography') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
                        </li>
                        <li>
                            <a href="{{ url('toasts') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
                        </li>
                        <li>
                            <a href="{{ url('general') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
                        </li>
                        <li>
                            <a href="{{ url('colors') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
                        </li>
                        <li>
                            <a href="{{ url('utilities') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="gift" fill="#545a6d33"></i>
                        <span data-key="t-extend">Extended</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('extended-lightbox') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lightbox</a>
                        </li>
                        <li>
                            <a href="{{ url('extended-rangeslider') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                        </li>
                        <li>
                            <a href="{{ url('extended-sweet-alert') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                        </li>
                        <li>
                            <a href="{{ url('extended-rating') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rating</a>
                        </li>
                        <li>
                            <a href="{{ url('extended-notifications') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Notifications</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <span class="badge bg-red-50 dark:bg-red-500/10 text-danger ltr:float-right rtl:float-left z-50 px-1.5 rounded-full text-11 text-red-500" data-toggle="collapse">7</span>
                        <i data-feather="box" fill="#545a6d33"></i>
                        <span data-key="t-forms">Forms</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('form-elements') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                        </li>
                        <li>
                            <a href="{{ url('form-validation') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                        </li>
                        <li>
                            <a href="{{ url('form-advanced') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                        </li>
                        <li>
                            <a href="{{ url('form-editors') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editors</a>
                        </li>
                        <li>
                            <a href="{{ url('file-uploads') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">File Upload</a>
                        </li>
                        <li>
                            <a href="{{ url('form-wizard') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Wizard</a>
                        </li>
                        <li>
                            <a href="{{ url('form-mask') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Mask</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="sliders" fill="#545a6d33"></i>
                        <span data-key="t-charts">Tables</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('tables-basic') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                        </li>
                        <li>
                            <a href="{{ url('tables-datatable') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                        </li>
                        <li>
                            <a href="{{ url('tables-responsive') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Responsive</a>
                        </li>
                        <li>
                            <a href="{{ url('tables-editable') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editable </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="pie-chart" fill="#545a6d33"></i>
                        <span data-key="t-charts">Charts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('charts-apex') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                        </li>
                        <li>
                            <a href="{{ url('charts-echart') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Echarts</a>
                        </li>
                        <li>
                            <a href="{{ url('charts-chartjs') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chartjs</a>
                        </li>
                        <li>
                            <a href="{{ url('charts-knob') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Jquery Knob</a>
                        </li>
                        <li>
                            <a href="{{ url('charts-sparkline') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sparkline Chart</a>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="cpu" fill="#545a6d33"></i>
                        <span data-key="t-icons">Icons</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('icons-boxicons') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Boxicons</a>
                        </li>
                        <li>
                            <a href="{{ url('icons-materialdesign') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Material Design</a>
                        </li>
                        <li>
                            <a href="{{ url('icons-dripicons') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dripicons</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="map" fill="#545a6d33"></i>
                        <span data-key="t-maps"> Maps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('maps-google') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Google</a>
                        </li>
                        <li>
                            <a href="{{ url('maps-vector') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Vector</a>
                        </li>
                        <li>
                            <a href="{{ url('maps-leaflet') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Leaflet</a>
                        </li>
                    </ul>
                </li>

                <li class="w-full menu__item ">
                    <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="share-2" fill="#545a6d33"></i>
                        <span data-key="t-level">Multi Level</span>
                    </a>
                    <div>
                        <ul>
                            <li>
                                <a href="{{ url('index') }}" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 1.1</a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="collapse" data-target=".Level1.2-menu" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-level">Level 1.2</span>
                                </a>
                                <ul class="collapse Level1.2-menu">
                                    <li>
                                        <a href="#" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </li>

            </ul>

            <div class="mx-6 my-12 text-center sidebar-alert">
                <div class="rounded card-body bg-primary bg-violet-50/50 dark:bg-zinc-700/60">
                    <img src="{{ URL::asset('build/images/giftbox.png') }}" alt="" class="block mx-auto">
                    <div class="mt-4">
                        <h5 class="mb-3 text-16 font-medium text-violet-500">Unlimited Access</h5>
                        <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                        <a href="#!" class="mt-6 text-white border-transparent btn bg-violet-500">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->