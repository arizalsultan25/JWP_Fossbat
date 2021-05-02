<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
      <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FOSSBAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->nama; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin') ?>" class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          
          <li class="nav-item has-treeview  <?= ($tree == 'data') ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= ($tree == 'data') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kelola Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/ssb') ?>" class="nav-link  <?= ($active == 'ssb') ? 'active' : '' ?>">
                  <i class="fas fa-school nav-icon"></i>
                  <p>Sekolah Sepak Bola (SSB)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pemain') ?>" class="nav-link  <?= ($active == 'pemain') ? 'active' : '' ?>">
                  <i class="far fa-futbol nav-icon"></i>
                  <p>Pemain Sepak Bola</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/stadion') ?>" class="nav-link <?= ($active == 'stadion') ? 'active' : '' ?>">
                  <i class="fas fa-landmark nav-icon"></i>
                  <p>Stadion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/jadwal') ?>" class="nav-link <?= ($active == 'jadwal') ? 'active' : '' ?>">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/gallery') ?>" class="nav-link <?= ($active == 'gallery') ? 'active' : '' ?>">
                  <i class="far fa-images nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" class="nav-link <?= ($active == 'berita') ? 'active' : '' ?>">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">AKUN</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/profile') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a data-toggle="modal" data-target=".modal_logout" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Log out</p>
                </a>
              </li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li> -->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>