<?php
$data_pegawai = query("SELECT * FROM pegawai WHERE nip='$nip'");
?>
<table class="text-dark mt-3">
    <tr>
        <td>NIP</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['nip'] ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['nama_pegawai']) ?></td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['tempat_lahir']) . ', ' . date('d-m-Y',strtotime($data_pegawai[0]['tanggal_lahir'])) ?> </td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['agama']) ?> </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['jenis_kelamin']) ?> </td>
    </tr>
    <tr>
        <td>Golongan Darah</td>
        <td>:</td>
        <td><?= strtoupper($data_pegawai[0]['gol_darah']) ?> </td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['status_pernikahan']) ?> </td>
    </tr>
    <tr>
        <td>Bidang Kepegawaian</td>
        <td>:</td>
        <td><?= ($data_pegawai[0]['bidang']) ?> </td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?= ($data_pegawai[0]['jabatan']) ?> </td>
    </tr>
    <tr>
        <td>TMT SK Pangkat</td>
        <td>:</td>
        <td><?= date('d-m-Y',strtotime($data_pegawai[0]['tmt_sk_pangkat'])) ?></td>
    </tr>
    <tr>
        <td>SK Pangkat YAD</td>
        <td>:</td>
        <td><?= date('d-m-Y',strtotime($data_pegawai[0]['tmt_yad'])) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?= ucwords($data_pegawai[0]['alamat']) ?> </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['email'] ?> </td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>:</td>
        <td><?= $data_pegawai[0]['no_hp'] ?> </td>
    </tr>
</table>