@php
    $configData = Helper::applClasses();
    $auth = auth()->user()->role;
    $url = Route::current()->uri;
@endphp

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css ') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css ') }}">


<script src="{{ asset('app-assets/js/scripts/configs/vertical-menu-light.min.js ') }}"></script>
<!-- <script src="{{ asset('app-assets/js/core/app-menu.min.js ') }}"></script> -->


<div class="main-menu menu-fixed {{ $configData['theme'] === 'dark' || $configData['theme'] === 'semi-dark' ? 'menu-dark' : 'menu-light' }} menu-accordion menu-shadow"
    data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}/{{ $auth }}/home">
                    <h2 class="brand-text">{{ config('app.name') }}</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ $url === $auth . '/home' ? 'active' : '' }}"><a class="d-flex align-items-center"
                    href="{{ url('/') }}/{{ $auth }}/home"><i data-feather="home"></i><span
                        class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            @if ($auth == 'admin')
                <li class=" nav-item {{ $url === $auth . '/users' ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ url('/') }}/{{ $auth }}/users"><i
                            data-feather="users"></i><span class="menu-title text-truncate"
                            data-i18n="User">Users</span></a>
                </li>


                <li class="nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i
                            data-feather="users"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Vendors</span><span
                            class="badge badge-light-warning badge-pill ml-auto mr-1"></span></a>
                    <ul class="menu-content">
                        <li class=" nav-item {{ $url === $auth . '/approved_vendor' ? 'active' : '' }}"><a
                                class="d-flex align-items-center"
                                href="{{ url('/') }}/{{ $auth }}/approved_vendor"><i
                                    data-feather="circle"></i><span class="menu-title text-truncate"
                                    data-i18n="User">All Vendors</span></a>
                        </li>

                        <li class=" nav-item {{ $url === $auth . '/vendor' ? 'active' : '' }}"><a
                                class="d-flex align-items-center"
                                href="{{ url('/') }}/{{ $auth }}/vendor"><i
                                    data-feather="circle"></i><span class="menu-title text-truncate"
                                    data-i18n="User">Vendor Request</span></a>
                        </li>
                    </ul>
                </li>
            @endif




            @if ($auth == 'admin')
                <li class="nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i
                            class='bx bx-navigation'></i></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Promotions</span><span
                            class="badge badge-light-warning badge-pill ml-auto mr-1"></span></a>
                    <ul class="menu-content">
                        <li class=" nav-item {{ $url === $auth . '/banner' ? 'active' : '' }}"><a
                                class="d-flex align-items-center"
                                href="{{ url('/') }}/{{ $auth }}/banner"><i
                                    data-feather="circle"></i><span class="menu-title text-truncate"
                                    data-i18n="User">Banner</span></a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>

<!-- END: Main Menu-->
