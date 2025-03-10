<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Edit Data Pegawai'; 
    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';
    // menambahkan style khusus untuk halaman ini saja
    $addstyles = 'assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css';

    // menghubungkan file header dengan file edit_pegawai
   
    require_once "template/header.php";
    //simpan data id(nip) yang dikirim dari halaman pegawai ke dalam variabel nip
    $nip = $_GET['id'];

    // paggil data pegawai berdasarkan nip untuk ditampilkan di form sebelum melakukan perubahan data
    $result = mysqli_query($conn, "SELECT * FROM pegawai WHERE nip='$nip'");
    // hasil dari proses result akan disimpan ke variabel data
    $data = mysqli_fetch_assoc($result);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('pegawai') ?>">Data Pegawai</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>

<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="<?= base_url('config/proses_pegawai') ?>?edit" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="stat_user" class="col-sm-3 col-form-label">Status User</label>
                <div class="col-sm-9">
                    <select class="form-control" name="stat_user" id="stat_user" required autocomplete="off" autofocus>
                        <option value="aktif" <?= $data['status_user'] == 'aktif' ? 'selected' :null ?>>Aktif</option>
                        <option value="nonaktif" <?= $data['status_user'] == 'nonaktif' ? 'selected' :null ?>>Non Aktif</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                <div class="col-sm-9">
                    <input type="hidden" name="nipAsli" value="<?= $nip ?>">
                    <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" value="<?= $data['nip'] ?>" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?= $data['nama_pegawai'] ?>" placeholder="Nama Pegawai" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                <div class="col">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" placeholder="Tempat Lahir" required autocomplete="off">
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $data['tanggal_lahir'] ?>" placeholder="Tanggal Lahir" required>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-9">
                    <div class="form-check d-inline mr-3">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="laki-laki" <?= $data['jenis_kelamin'] == 'laki-laki' ? 'checked' : null ?>>
                        <label class="form-check-label" for="jk1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="perempuan" <?= $data['jenis_kelamin'] == 'perempuan' ? 'checked' : null ?>>
                        <label class="form-check-label" for="jk2">
                            Perempuan
                        </label>
                    </div>
                </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $data['no_hp'] ?>" placeholder="Nomor Handphone" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-9">
                    <select class="form-control" name="agama" id="agama" required autocomplete="off">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?= $data['email'] ?>" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="3" required autocomplete="off"><?= $data['alamat'] ?></textarea>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Golongan Darah</legend>
                    <div class="col-sm-9">
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah1" value="a" <?= $data['gol_darah'] == 'a' ? 'checked' : null ?> >
                            <label class="form-check-label" for="goldarah1">
                                A
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="b" <?= $data['gol_darah'] == 'b' ? 'checked' :null ?> >
                            <label class="form-check-label" for="goldarah2">
                                B
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="ab" <?= $data['gol_darah'] == 'ab' ? 'checked' :null ?>>
                            <label class="form-check-label" for="goldarah2">
                                AB
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" <?= $data['gol_darah'] == 'o' ? 'checked' :null ?> id="goldarah3" value="o">
                            <label class="form-check-label" for="goldarah3">
                                O
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="stat_nikah" class="col-sm-3 col-form-label">Status Pernikahan</label>
                <div class="col-sm-9">
                    <select class="form-control" name="stat_nikah" id="stat_nikah" required autocomplete="off">
                        <option value="lajang" <?= $data['status_pernikahan'] == 'lajang' ? 'selected' :null ?>>Lajang</option>
                        <option value="menikah" <?= $data['status_pernikahan'] == 'menikah' ? 'selected' :null ?>>Menikah</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="b_bidang" class="col-sm-3 col-form-label">Bidang Kepegawaian</label>
                <div class="col-sm-9">
                    <select class="form-control" name="b_bidang" id="b_bidang" required autocomplete="off">
                        <option value="Kepala Dinas" <?= $data['bidang'] == 'Kepala Dinas' ? 'selected' :null ?>>Kepala Dinas</option>
                        <option value="Sub Umum" <?= $data['bidang'] == 'Sub Umum' ? 'selected' :null ?>>Sub Umum</option>
                        <option value="Sub Keuangan" <?= $data['bidang'] == 'Sub Keuangan' ? 'selected' :null ?>>Sub Keuangan</option>
                        <option value="Sub Program" <?= $data['bidang'] == 'Sub Program' ? 'selected' :null ?>>Sub Program</option>
                        <option value="Penataan Lingkungan" <?= $data['bidang'] == 'Penataan Lingkungan' ? 'selected' :null ?>>Penataan Lingkungan</option>
                        <option value="PPL & PLB3" <?= $data['bidang'] == 'PPL & PLB3' ? 'selected' :null ?>>PPL & PLB3</option>
                        <option value="Pengelolaan Sampah" <?= $data['bidang'] == 'Pengelolaan Sampah' ? 'selected' :null ?>>Pengelolaan Sampah</option>
                        <option value="Pertamanan" <?= $data['bidang'] == 'Pertamanan' ? 'selected' :null ?>>Pertamanan</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="j_jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <select class="form-control" name="j_jabatan" id="j_jabatan" required autocomplete="off">
                        <option value="Pembina Utama IV/e" <?= $data['jabatan'] == 'Pembina Utama IV/e' ? 'selected' :null ?>>Pembina Utama IV/e</option>
                        <option value="Pembina Utama Madya IV/d" <?= $data['jabatan'] == 'Pembina Utama Madya IV/d' ? 'selected' :null ?>>Pembina Utama Madya IV/d</option>
                        <option value="Pembina Utama Muda IV/c" <?= $data['jabatan'] == 'Pembina Utama Muda IV/c' ? 'selected' :null ?>>Pembina Utama Muda IV/c</option>
                        <option value="Pembina Tingkat I IV/b" <?= $data['jabatan'] == 'Pembina Tingkat I IV/b' ? 'selected' :null ?>>Pembina Tingkat I IV/b</option>
                        <option value="Pembina IV/a" <?= $data['jabatan'] == 'Pembina IV/a' ? 'selected' :null ?>>Pembina IV/a</option>
                        <option value="Penata Tingkat I III/d" <?= $data['jabatan'] == 'Penata Tingkat I III/d' ? 'selected' :null ?>>Penata Tingkat I III/d</option>
                        <option value="Penata III/c" <?= $data['jabatan'] == 'Penata III/c' ? 'selected' :null ?>>Penata III/c</option>
                        <option value="Penata Muda Tingkat I III/b" <?= $data['jabatan'] == 'Penata Muda Tingkat I III/b' ? 'selected' :null ?>>Penata Muda Tingkat I III/b</option>
                        <option value="Penata Muda III/a" <?= $data['jabatan'] == 'Penata Muda III/a' ? 'selected' :null ?>>Penata Muda III/a</option>
                        <option value="Pengatur Tingkat I II/d" <?= $data['jabatan'] == 'Pengatur Tingkat III/d' ? 'selected' :null ?>>Pengatur Tingkat I II/d</option>
                        <option value="Pengatur II/c" <?= $data['jabatan'] == 'Pengatur II/c' ? 'selected' :null ?>>Pengatur II/c</option>
                        <option value="Pengatur Muda Tingkat I II/b" <?= $data['jabatan'] == 'Pengatur Muda Tingkat I II/b' ? 'selected' :null ?>>Pengatur Muda Tingkat I II/b</option>
                        <option value="Pegatur Muda II/a" <?= $data['jabatan'] == 'Pegatur Muda II/a' ? 'selected' :null ?>>Pegatur Muda II/a</option>
                        <option value="Juru Tingkat I I/d" <?= $data['jabatan'] == 'Juru Tingkat I I/d' ? 'selected' :null ?>>Juru Tingkat I I/d</option>
                        <option value="Juru I/c" <?= $data['jabatan'] == 'Juru I/c' ? 'selected' :null ?>>Juru I/c</option>
                        <option value="Juru Muda Tingkat I  I/b" <?= $data['jabatan'] == 'Juru Muda Tingkat I  I/b' ? 'selected' :null ?>>Juru Muda Tingkat I I/b</option>
                        <option value="Juru Muda I/a" <?= $data['jabatan'] == 'Juru Muda I/a' ? 'selected' :null ?>>Juru Muda I/a</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmt_sk" class="col-sm-3 col-form-label">TMT</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tmt_sk" placeholder="TMT" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">Pas Photo</label>
                <div class="col-sm-9">
                    <a href="<?= asset('assets/img/').$data['foto_pegawai'] ?>" target="_blank" class="text-decoration-none">
                        <img src="<?= asset('assets/img/').$data['foto_pegawai'] ?>" alt="Foto Pegawai" class="img-fluid mb-3" width="60px" height="70px">
                    </a>
                    <input type="hidden" name="foto_lama" value="<?= $data['foto_pegawai'] ?>">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto">
                        <label class="custom-file-label" for="customFile">Tentukan file</label>
                    </div>
                    <span class="text-info">* Maksimal Ukuran File 1 MB</span>
                </div>
            </div>

        <!-- disini tanda tempat form -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
        <a href="<?= base_url('pegawai') ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
    </div>
    </form>
</div>


<?php

    $addscript = '
        <script src="'.asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>
        <script>
            $(".datepicker").datepicker()

            
        $(document).on("change", ".custom-file-input", function (event) {
            $(this).next(".custom-file-label").html(event.target.files[0].name);
            })    
        </script>
    ';

    // menghubungkan file footer dengan file edit_pegawai
    require_once "template/footer.php";
?>