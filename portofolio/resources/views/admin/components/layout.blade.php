<!DOCTYPE html>
<html class="no-js">
<head>
  <title>CMS - @yield('title')</title>
  {{-- Meta --}}
  @section('meta')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="CMS">
  <meta name="description" content="CMS">
  @show
  {{-- Icon --}}
  @section('icon')
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-192x192.png') }}" sizes="192x192">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-160x160.png') }}" sizes="160x160">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-96x96.png') }}" sizes="96x96">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-16x16.png') }}" sizes="16x16">
  @show
  {{-- CSS --}}
  @section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/admin/bootstrap.min.css') }}"> <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/admin/icons.css') }}"> <!-- Icons -->
  <link rel="stylesheet" href="{{ URL::asset('css/admin/style.css') }}"> <!-- Styles -->
  @show
</head>

<body class="fixed-left widescreen" cz-shortcut-listen="true">
  <div id="wrapper">
    {{-- Topbar Start --}}
    @section('topbar')
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <a href="http://coderthemes.com/ubold/light/index.html" class="logo"><i class="md md-album icon-c-logo"></i><span>PORT<i class="md md-album"></i>FOLIO</span></a>
        </div>
      </div>
      <!-- Button mobile view to collapse sidebar menu -->
      <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
          <li class="list-inline-item notification-list">
            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
              <i class="dripicons-expand noti-icon"></i>
            </a>
          </li>
          <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="dripicons-bell noti-icon"></i>
              <span class="badge badge-pink noti-icon-badge">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
              <!-- item-->
              <div class="dropdown-item noti-title">
                <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
              </div>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
              </a>
              <!-- All-->
              <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                View All
              </a>
            </div>
          </li>
          <li class="list-inline-item notification-list">
            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
              <i class="dripicons-message noti-icon"></i>
            </a>
          </li>
          <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="http://coderthemes.com/ubold/light/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ URL::asset('images/avatar-1.jpg') }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
              <!-- item-->
              <div class="dropdown-item noti-title">
                <h5 class="text-overflow"><small>Welcome Admin</small> </h5>
              </div>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="zmdi zmdi-power"></i> <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
          <li class="float-left">
            <button class="button-menu-mobile open-left waves-light waves-effect">
              <i class="dripicons-menu"></i>
            </button>
          </li>
          <li class="hide-phone app-search">
            <form role="search" class="">
              <input type="text" placeholder="Search..." class="form-control">
              <a href="http://coderthemes.com/ubold/light/index.html"><i class="fa fa-search"></i></a>
            </form>
          </li>
        </ul>
      </nav>
    </div>
    @show
    {{-- End Topbar --}}
    {{-- Leftbar Start --}}
    @section('leftbar')
    <div class="left side-menu">
      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 766px;">
        <div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 766px;">
          <!--- Divider -->
          <div id="sidebar-menu">
            <ul>
              <li class="text-muted menu-title">Menu</li>
              <li class="has_sub">
                <a href="{{ url('/admin') }}" class="waves-effect @yield('dashboard')"><i class="ti-home"></i> <span> Dashboard </span> </a>
              </li>
              <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect @yield('header-menu')"><i class="ti-paint-bucket"></i> <span> Header </span> <span class="menu-arrow"></span> </a>
                <ul class="list-unstyled" style="@yield('header-menu-show')">
                  <li class="@yield('logo')"><a href="{{ url('admin-logo') }}">Logo</a></li>
                  <li class="@yield('navigation')"><a href="{{ url('admin-navigation') }}">Navigation</a></li>
                </ul>
              </li>
              <li class="has_sub">
                <a href="{{ url('/admin-profile') }}" class="waves-effect @yield('profile')"><i class="ti-user"></i> <span>Profile</span> </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="slimScrollBar" style="background: rgb(152, 166, 173); width: 5px; position: absolute; top: 0px; opacity: 0.27265; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 537.815px; visibility: visible;"></div>
        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
      </div>
    </div>
    @show
    {{-- End Leftbar --}}
    {{-- Content Start --}}
    @section('content')
    @yield('content')
    @show
    {{-- End Content --}}
    {{-- Rightbar Start --}}
    <div class="side-bar right-bar nicescroll" tabindex="5000" style="overflow: hidden; outline: none;">
      <h4 class="text-center">Chat</h4>
      <div class="contact-list nicescroll" tabindex="5001" style="overflow: hidden; outline: none;">
        <ul class="list-group contacts-list">
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-1.jpg" alt="">
              </div>
              <span class="name">Chadengle</span>
              <i class="fa fa-circle online"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-2.jpg" alt="">
              </div>
              <span class="name">Tomaslau</span>
              <i class="fa fa-circle online"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-3.jpg" alt="">
              </div>
              <span class="name">Stillnotdavid</span>
              <i class="fa fa-circle online"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-4.jpg" alt="">
              </div>
              <span class="name">Kurafire</span>
              <i class="fa fa-circle online"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-5.jpg" alt="">
              </div>
              <span class="name">Shahedk</span>
              <i class="fa fa-circle away"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-6.jpg" alt="">
              </div>
              <span class="name">Adhamdannaway</span>
              <i class="fa fa-circle away"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-7.jpg" alt="">
              </div>
              <span class="name">Ok</span>
              <i class="fa fa-circle away"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-8.jpg" alt="">
              </div>
              <span class="name">Arashasghari</span>
              <i class="fa fa-circle offline"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-9.jpg" alt="">
              </div>
              <span class="name">Joshaustin</span>
              <i class="fa fa-circle offline"></i>
            </a>
            <span class="clearfix"></span>
          </li>
          <li class="list-group-item">
            <a href="http://coderthemes.com/ubold/light/index.html#">
              <div class="avatar">
                <img src="./Ubold - Responsive Admin Dashboard Template_files/avatar-10.jpg" alt="">
              </div>
              <span class="name">Sortino</span>
              <i class="fa fa-circle offline"></i>
            </a>
            <span class="clearfix"></span>
          </li>
        </ul>
      </div>
      <div id="ascrail2001" class="nicescroll-rails" style="width: 8px; z-index: 99; cursor: default; position: absolute; top: 52px; left: 232px; height: 531.234px; display: none;">
        <div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
      </div>
      <div id="ascrail2001-hr" class="nicescroll-rails" style="height: 8px; z-index: 99; top: 575.234px; left: 0px; position: absolute; cursor: default; display: none;">
        <div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
      </div>
    </div>
    {{-- End Rightbar --}}
  </div>
  <script>
    var resizefunc = [];
  </script>
  <!-- Javascript -->
  @section('javascript')
  <script src="{{ URL::asset('js/admin/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/popper.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/detect.js') }}"></script>
  <script src="{{ URL::asset('js/admin/fastclick.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.slimscroll.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.blockUI.js') }}"></script>
  <script src="{{ URL::asset('js/admin/waves.js') }}"></script>
  <script src="{{ URL::asset('js/admin/wow.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.nicescroll.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.peity.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.counterup.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/morris.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/raphael-min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.knob.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.dashboard.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.core.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jquery.app.js') }}"></script>
  @show
</body>
</html>