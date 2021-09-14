<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">

      <span class="brand-text font-weight-light">GSS INFOTECH</span>
    </a>-->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('vendor/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <div class="form-inline" >
                <a href="{{ route('home') }}" class="nav-link {{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>&nbsp;

                    <p>
                      Home

                    </p>
                  </a>

                </div>
               <div class="form-inline" >
                <a href="{{ route('charts') }}" class="nav-link {{ (\Request::route()->getName() == 'charts') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-bar"></i>&nbsp;
                    <p> Visit Chart

                    </p>
                  </a>

                </div>
                <div class="form-inline" >
                    <a href="{{ route('doctorschart') }}" class="nav-link {{ (\Request::route()->getName() == 'doctorschart') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-globe"></i>&nbsp;
                        <p> Division/Doctor Chart

                        </p>
                      </a>

                </div>
                <div class="form-inline" >
                    <a href="{{ route('patientschart') }}" class="nav-link {{ (\Request::route()->getName() == 'patientschart') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-globe"></i>&nbsp;
                        <p> Division/Patient Chart

                        </p>
                      </a>

                    </div>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
