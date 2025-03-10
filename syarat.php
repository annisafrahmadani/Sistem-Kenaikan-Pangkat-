<?php
  //variabel yang berfungsi menyimpan detail dari sub judul website
  $nama = 'Kenaikan Pangkat'; 
  //variabel yang berfungsi mengatifkan sidebar
  $syarat = "kenaikan pangkat";

  // menghubungkan file header dengan file dashboard
  require_once "template/header.php";

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">
                    <div id="layoutSidenav_content">


                        <div >
                                <div class="container-fluid px-4">
                                    <h1 class="mt-4">Syarat Pengajuan Kenaikan Pangkat </h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item active">Berikut Proses alur dan syarat-syarat pengajuan kenaikan pangkat Pegawai Negeri Sipil berdasarkan aturan dari Badan Kepegawaian Negara:</li>
                                    </ol>
                                        <img src="assets/img/samples/Infografis-Kenaikan-Pangkat.jpg "width="500" height="600">
                                        <img src="assets/img/samples/1.png">
                                        <img src="assets/img/samples/2.png">
                                        <img src="assets/img/samples/3.png">
                                        <img src="assets/img/samples/4.png">
                                        <img src="assets/img/samples/5.png">
                                        <img src="assets/img/samples/6.png">
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->    

    <?php
  // menghubungkan file footer dengan file dashboard
  require_once "template/footer.php";
?>