<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Kepala Dinas'; 

    //variabel yang berfungsi mengatifkan sidebar
    $kadis = 'Kepala Dinas';

    // menambahkan style khusus untuk halaman ini saja
    $addstyles = 'assets/vendor/datatables/dataTables.bootstrap4.min.css';
    

    // menghubungkan file header dengan file Pegawai
    $sub = "../";
    require_once "../template/header.php";

    
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
    </ol>
</nav>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div>
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                </li>
    </div>
    <div class="card-header py-3">
        <a href="<?= base_url('tambah_pegawai') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-user-plus"></i> Tambah Pegawai</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Status Kepegawaian</th>
                <th>Jabatan</th>
                <th>Aktif/Nonaktif</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $data_p = query("SELECT * FROM pegawai WHERE bidang = 'kepala dinas' GROUP BY nama_pegawai ");
                    foreach ($data_p as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= ($p['nama_pegawai']) ?></td>
                            <td><?= $p['nip'] ?></td>
                            <td><?= $p['jenis_kelamin'] ?></td>
                            <td><?= $p['email'] ?></td>
                            <td><?= $p['no_hp'] ?></td>
                            <td><?= ($p['bidang']) ?></td>
                            <td><?= ($p['jabatan']) ?></td>
                            <td><?= ucwords($p['status_user']) ?></td>
                            <td>
                                <a href="<?= base_url('detail_pegawai') ?>?id=<?= $p['nip'] ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                <a href="<?= base_url('edit_pegawai') ?>?id=<?= $p['nip'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('report/report_pegawai') ?>?id=<?= $p['nip'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Print</a>
                                <a href="<?= base_url('data/hapus/delete.php') ?>?id=<?= $p['nip'] ?>" target="_blank" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Hapus </a>

                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php

    // menambahkan script khusus untuk halaman ini saja
    $addscript = '
        <script src="'.asset('assets/vendor/datatables/jquery.dataTables.min.js').'"></script>
        <script src="'.asset('assets/vendor/datatables/dataTables.bootstrap4.min.js').'"></script>
    
        <script src="'.asset('assets/js/demo/datatables-demo.js').'"></script>
    ';

    // menghubungkan file footer dengan file detail Pegawai
    $sub = "../";
    require_once "../template/footer.php";
?>