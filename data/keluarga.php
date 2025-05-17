<?php
$data_keluarga = query("SELECT * FROM keluarga WHERE nip='$nip' ORDER BY hubungan");

?>
    
<div class="card-header py-3">
        <a href="<?= base_url('keluarga') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-user-plus"></i> Tambah Pegawai</a>
</div>
<div class="card-body">
<div class="table-responsive mt-1">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data_keluarga as $keluarga) :
            ?>
                <tr>
                    <td><?= ucwords($keluarga['nik']) ?></td>
                    <td><?= ucwords($keluarga['nama_keluarga']) ?></td>
                    <td><?= ucwords($keluarga['tempat_lahir']) . ', ' . date('d-m-Y',strtotime($keluarga['tanggal_lahir'])) ?></td>
                    <td><?= ucwords($keluarga['pendidikan']) ?></td>
                    <td><?= ucwords($keluarga['pekerjaan']) ?></td>
                    <td><?= ucwords($keluarga['hubungan']) ?></td>
                    <td>
                        <a href="<?= base_url('edit_keluarga') ?>?id=<?= $keluarga['nik'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>