
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">

            <li class="nav-item">
            <a href="{{route('dashboard.index')}}" class="nav-link @yield('dashboard')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('task.index')}}" class="nav-link @yield('task')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Task
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link @yield('user')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                   Active User
                  </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('user.shakil')}}" class="nav-link @yield('inuser')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Inactive User
                  </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('withdrow.index')}}" class="nav-link @yield('withdrow')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    withdrow
                  </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('notice.index')}}" class="nav-link @yield('notice')">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Notice
                  </p>
                </a>
            </li>
            <li class="nav-item  mt-5">
            <form action="{{route('logout')}}" method="POST"  class="nav-link btn btn-danger">
                    @csrf
                    <div style="margin-left:0;">
                  <i style="color:white;" class="nav-icon fas fa-sign-out-alt"></i>
                  <button style="background-color:#dc3545;border:0; color:white;" type="submit">Logout</button>
                </div>
            </form>
              </li>



              <li class="text-center mt-2 ">
              <a href="{{url('/')}}" class="btn btn-primary text-white" target="_blank">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p class="mb-0">visit Website</p>
                  {{-- <p class="mb-0">
                    View Website
                  </p> --}}
                </a>
              </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
