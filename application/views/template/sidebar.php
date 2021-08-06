<body id="page-top" >
  <!-- Page Wrapper -->
  <div id="wrapper" >
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15"></div>
        <div class="sidebar-brand-text mx-3"><i class="fas fa-globe"></i>SPST</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <?php
        switch ($this->session->level) {
          case 'masyarakat': ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>masyarakat/pengajuan.html">
              <i class="fas fa-fw fa-arrow-left"></i>
              <span>Permohonan</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>masyarakat/data_masyarakat">
              <i class="fas fa-fw fa-arrow-left"></i>
              <span>Data Masyarakat</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>masyarakat/keluhan">
              <i class="fas fa-fw fa-arrow-left"></i>
              <span>Keluhan</span></a>
            </li>
            <?php break;
          case 'loket': ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>loket/pengajuan">
              <i class="fas fa-fw fa-arrow-left"></i>
              <span>Data Permohonan</span></a>
            </li>
            <?php break;
          case 'pengukur': ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>pengukur/pengajuan.html">
              <i class="fas fa-fw fa-arrow-left"></i>
              <span>Data Permohonan</span></a>
            </li>
            <?php break;
          case 'admin': ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/user.html">
                <i class="fas fa-user"></i>
                <span>Data User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/permohonan.html">
                <i class="fas fa-user"></i>
                <span>Data Permohonan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/keluhan">
                <i class="fas fa-user"></i>
                <span>Keluhan</span>
              </a>
            </li>
            <?php break;
          case 'kepala_desa': ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>kepala_desa/permohonan">
                <i class="fas fa-user"></i>
                <span>Data Pemohonan Masyarakat</span>
              </a>
            </li>
            <?php break;
          
          default:
            # code...
            break;
        }
      ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('logout'); ?>">
      <i class="fas fa-fw fa-arrow-left"></i>
      <span>Logout</span></a>
    </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>