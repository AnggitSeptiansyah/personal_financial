<header class="main-header">
  <!-- Logo -->
<a href="index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>PF</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Personal Financial</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li>
        <a href="">{{ __('Get consultation') }}</a>
      </li>
      <li>
        <a href=""><i class="fa fa-cog"></i></a>
      </li>
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
          <span class="hidden-xs">{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- Menu Footer-->
          <li class="user-footer">
              <a href="" class="">{{ __('Profile') }}</a>
              <a href="{{ route('change_password.edit', auth()->id()) }}" class="">{{ __('Change Password') }}</a>
              <a href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>