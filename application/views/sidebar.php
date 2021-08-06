[22:20, 3/14/2021] Inwan: <body id="page-top">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul style="background-color: midnightblue;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon ">
                            <i><img src="<?= base_url('assets/img/608px-Logo_BPN-KemenATR_(2017).png'); ?>" height="45px" width="45px"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">SIM Yuridis</div>
                    </a>

                    <…
[22:20, 3/14/2021] Inwan: <!-- Footer -->
 <footer style="background-color: orange; padding-top: 20px; padding-bottom: 20px;">
     <div class="container my-auto">
         <div class="copyright text-center my-auto" style="color: white;">
             <span>Copyright &copy; Politeknik Negeri Subang <?= date('Y'); ?></span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
  …
[06:00, 3/15/2021] Inwan: <body id="page-top" style="margin-bottom: 200px;">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul style="background-color: midnightblue;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon ">
                            <i><img src="<?= base_url('assets/img/608px-Logo_BPN-KemenATR_(2017).png'); ?>" height="45px" width="45px"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">SIMPAN Yuridis</div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider ">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Admin
                    </div>


                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="Admin">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="charts.html">
                            <i class="fas fa-fw fa-user"></i>
                            <span>Profil Saya</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/dataPetugas'); ?>">
                            <i class="fas fa-fw fa-pen"></i>
                            <span>Data Pengguna</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/Inventarisasi'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Data Permohonan Tanah</span></a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                      <i class="fas fa-fw fa-wrench"></i>
                      <span>Laporan Inventarisasi</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('index.php/admin/Pesanan/konfirmasipesanan') ?>">Lihat Laporan</a>
                         <a class="collapse-item" href="<?= base_url('index.php/pelanggan/Pesanan/index') ?>">Monitoring Inventarisasi</a>
                      </div>
                    </div>
                  </li>

                        
                    <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#estimasi" aria-expanded="true" aria-controls="collapseUtilities">
                      <i class="fas fa-fw fa-wrench"></i>
                      <span>Laporan Estimasi</span>
                    </a>
                    <div id="estimasi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('index.php/admin/Pesanan/konfirmasipesanan') ?>">Lihat Laporan</a>
                      </div>
                    </div>
                  </li>
                    

                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/Inventarisasi'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Data Permohonan Tanah</span></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/Inventarisasi'); ?>">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Monitoring Validasi Data</span></a>
                    </li>

                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Admin/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class=" fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span></a>
                    </li>



                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav style="background-color: orange;" class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>



                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">




                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        </span>
                                        <img class="img-profile rounded-circle" src="">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('index.php/Admin/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->