@php
$auth = auth()->user()->role;
@endphp
  <nav class="header-navbar navbar navbar-expand-lg align-items-center {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }} {{ ($configData['layoutWidth'] === 'boxed' && $configData['verticalMenuNavbarType']  === 'navbar-floating') ? 'container-xxl p-0' : '' }}">
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link nav-link-style">
              <!-- <i class="ficon" data-feather="{{($configData['theme'] === 'dark') ? 'sun' : 'moon' }}"></i> -->
              <h4 style="color:red;"><b>@yield('title')</b></h4>
            </a>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown dropdown-user">
          <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-nav d-sm-flex d-none">
              <span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span>
              <span class="user-status">{{ str_replace('-', ' ', $auth) }}</span>
            </div>
            <span class="avatar">
              <img class="round" src="{{asset('images/avatars/user.png')}}" alt="avatar" height="40" width="40">
              <!-- <span class="avatar-status-online"></span> -->
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="mr-50" data-feather="user"></i> Profile
            </a>
            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#administrator_password_change_modal">
              <i class="mr-50" data-feather="lock"></i> Password Change
            </a>
            @if($auth == 'admin')
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('admin-logout-form').submit();">
              <i class="mr-50" data-feather="power"></i> Logout
            </a>
            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a class="dropdown-item" href="{{ route('vendor.logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('vendor-logout-form').submit();">
              <i class="mr-50" data-feather="power"></i> Logout
            </a>
            <form id="vendor-logout-form" action="{{ route('vendor.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endif
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- END: Header-->
