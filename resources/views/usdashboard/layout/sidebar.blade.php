  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{route('home')}}">
                <h1 style="color: rgb(38, 136, 216); font-family:Arial, Helvetica, sans-serif;font-size:30px;">Earn Limited</h1>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->

          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link @yield('dashboard')" href="{{route('home')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link @yield('task')" href="{{route('task.view')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Task</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link @yield('withdrow')" href="
            {{route('withdrow')}}
            ">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Withdrow</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('profile')" href="
              {{route('profile')}}
              ">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Site Policy</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
