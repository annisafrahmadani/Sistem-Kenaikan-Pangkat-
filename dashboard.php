<?php
  //variabel yang berfungsi menyimpan detail dari sub judul website
  $nama = 'Beranda'; 
  //variabel yang berfungsi mengatifkan sidebar
  $dashboard = "dashboard";

  // menghubungkan file header dengan file dashboard
  require_once "template/header.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dinas Lingkungan Hidup Dan Kebersihan Kota Pekanbaru</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Data Pegawai DLHK</li>
                        </ol>
                    </nav>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pegawai</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total From pegawai"); echo $total[0]['total']; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pegawai Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total From pegawai WHERE status_user = 'aktif'"); echo $total[0]['total']; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pegawai Non Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total From pegawai WHERE status_user = 'nonaktif'"); echo $total[0]['total']; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div >
                    <div class="container-fluid px-4">
                    <h3>Dasar Pembentukan</h3>
                        <p>
                            Dinas Lingkungan Hidup dan Kebersihan Kota Pekanbaru membantu Walikota dalam melaksanakan urusan pemerintahan di lingkungan hidup dan kebersihan  serta tugas pembantuan lainnya. 
                            Dasar pembentukan Dinas Lingkungan Hidup dan Kebersihan Kota Pekanbaru adalah Peraturan Daerah Kota Pekanbaru Nomor 9 Tahun 2016 tentang 
                            Pembentukan dan Susunan Perangkat Daerah Kota Pekanbaru dan Peraturan Walikota Pekanbaru Nomor 103 Tahun 2016 tentang Kedudukan, Susunan Organisasi, 
                            Tugas dan Fungsi serta tata kerja Dinas Lingkungan Hidup dan Kebersihan Kota Pekanbaru.
                        </p>
                    <h5>Tugas Dan Fungsi</h5>
                        <li class="breadcrumb-item active">Tugas :</li>
                            <p>
                                Dinas Lingkungan Hidup dan Kebersihan Kota Pekanbaru mempunyai tugas membantu Walikota dalam melaksanakan urusan pemerintahan dilingkungan hidup, kebersihan dan sub urusan kehutanan serta tugas pembantuan lainnya.
                            </p>
                        <li class="breadcrumb-item active">Fungsi :</li>
                        <ol>
                            <li>Perumusan kebijakan teknis di bidang lingkungan hidup dan kebersihan</li>
                            <li>Perumusan rencana kerja, program dan kegiatan lingkungan hidup dan kebersihan</li>
                            <li>Perumusan kebijakan teknis di bidang lingkungan hidup dan kebersihan</li>
                            <li>Perumusan rencana kerja, program dan kegiatan bidang lingkungan hidup dan kebersihan</li>
                            <li>Pelaksanaan kegiatan yang menjadi tugas pokok Dinas Lingkungan Hidup dan Kebersihan</li>
                            <li>Perumusan kebijakan, penyusunan dan perencanaan teknis, pemberian bimbingan dan penyuluhan bidang lingkungan hidup dan kebersihan</li>
                            <li>Penyelenggaraan pelayanan umum dan pelayanan teknis di bidang lingkungan hidup dan kebersihan</li>
                            <li>Pelaksanaan urusan bidang kehutanan sub urusan konservasi sumber daya alam hayati dan ekosistemnya</li>
                            <li>Penetapan dan pengesahan naskah dinas sesuai dengan kewenangannya</li>
                            <li>Pembinaan Unit Pelaksana Teknis dalam lingkup dinas</li>
                            <li>Pembinaan,  Pengawasan dan mengendalikan pelaksanaan kegiatan bidang lingkungan hidup dan kebersihan</li>
                            <li>Pembinaan pegawai di lingkungan Dinas Lingkungan Hidup dan Kebersihan</li>
                            <li>Pengelolaan keuangan dinas</li>
                            <li>Pelaksanaan tugas-tugas lain yang diberikan oleh pimpinan sesuai dengan tugas dan fungsinya</li>
                        </ol>                        
            </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    <?php
  // menghubungkan file footer dengan file dashboard
  require_once "template/footer.php";
?>