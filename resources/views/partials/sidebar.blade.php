        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="dashboard/crm-index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm" />
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light" />
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark" />
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

                    </li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid"
                                class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Data
                                    <span class="menu-arrow left-has-menu"><i
                                            class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('product') }}">Data Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Form
                                    <span class="menu-arrow left-has-menu"><i
                                            class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('form-product') }}">Form Product</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
