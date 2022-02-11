<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url() ?>" class="brand-link">
    <img src="<?= base_url('back/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?= $_ENV['APP_NAME'] ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() . session()->get('profile_image') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= session()->get('name') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('admin') ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-alt"></i>
            <p>
              User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('/admin/user/new') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('/admin/user') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manager User</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/reservations') ?>" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>
              Reservations
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>
              Car
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('/admin/car/new') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Car</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('/admin/car') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manager Car</p>
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