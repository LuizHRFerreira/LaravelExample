<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('dist/images/sidebar/logo.png') }}" alt="company image" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item user-panel">
                <a href="#" class="nav-link ">
                    <img src="{{ asset('dist/images/sidebar/default_user.png') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                    {{ \Auth::user()->name }}
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ route('users.profile') }}" class="nav-link">
                        <i class="fas fa-user-edit nav-icon"></i>
                        <p>{{ trans('text.profile') }}</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link">
                        <form action="{{ url('logout ') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block btn-sm"><i class="fas fa-sign-out-alt nav-icon"></i>{{ trans('text.exit') }}</button>
                        </form>
                    </a>
                    </li>
                </ul>
            </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('text.users') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('clients.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('text.clients') }}</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>