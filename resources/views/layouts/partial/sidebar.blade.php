<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('layout/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Gudang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('layout/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <a href="#" class="d-block">
            {{ Auth::user()->name }}
          </a>
          @endauth
          @guest
          <a href="#" class="d-block">
            Anda Belum Login
          @endguest
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @auth
          <li class="nav-item">
            <a href="/departemen" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Departemen
              </p>
            </a>
          </li>
            <li class="nav-item">
              <a href="/kategori" class="nav-link">
                <p>
                  <i class="nav-icon fas fa-book"></i>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/barang" class="nav-link">
                <i class="nav-icon fas fa-boxes"></i>
                <p>
                  Barang
                </p>
              </a>
            </li>
            
          @endauth
          @guest
          <li class="nav-item bg-primary">
            <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          @endguest
          <!-- Logout -->
          @auth
          <li class="nav-item bg-danger">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          </li>
          @endauth
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>