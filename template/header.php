<?php

  // jika yang dipanggil user adalah file yang berada didalam subfolder dan memiliki variabel sub, panggil file config yang ada sesuai dengan posisi file di folder
  if (isset($sub)) {
    // memanggil data configurasi dan function dari subfolder
    require_once $sub."config/config.php";
  }else{
    // memanggil data configurasi dan function
    require_once "config/config.php";
  }

  // melakukan verifikasi user apakah sudah login atau belum, jika belum arahkan ke halaman login
  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DLHK Pekanbaru - <?= $nama; ?></title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  
  <?php
  // jika variabel addstyles sudah ditentukan
  if (isset($addstyles)) {
    // jika variabel addstyles tidak sama dengan null, tampilkan style tambahan
    if ($addstyles != null) {
      echo '<link href="'. asset($addstyles) .'" rel="stylesheet">';
    }
  }
  ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon ">
                <img src="assets/img/logo/logopku.png" width="90" height="60">
                </div>
                <div class="sidebar-brand-text mx-2">DLHK <sup>Pekanbaru</sup</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span>
                </a>
                <a class="nav-link" href="syarat.php">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Kenaikan Pangkat</span>
                </a>
                <a class="nav-link" href="pegawai.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Daftar Pegawai</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
                  

            

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                                <img class="img-profile rounded-circle" src="<?= asset('assets/img/faces/2.jpg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">