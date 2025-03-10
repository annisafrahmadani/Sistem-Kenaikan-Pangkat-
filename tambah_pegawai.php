<?php
    //variabel yang berfungsi menyimpan detail dari sub judul website
    $nama = 'Tambah Pegawai'; 
    //variabel yang berfungsi mengatifkan sidebar
    $pegawai = 'pegawai';
    // menambahkan style khusus untuk halaman ini saja
    $addstyles = 'assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css';
    // menghubungkan file header dengan file tambah Pegawai
    require_once "template/header.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('pegawai') ?>">Data Pegawai</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
  </ol>
</nav>

<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="<?= base_url('config/proses_pegawai') ?>?add" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" required autocomplete="off" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                <div class="col">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required autocomplete="off">
                </div>
                <div class="col">
                    <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-9">
                    <div class="form-check d-inline mr-3">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="laki-laki" checked>
                        <label class="form-check-label" for="jk1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="perempuan">
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
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone" required autocomplete="off">
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
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="3" placeholder="Alamat Lengkap" required autocomplete="off"></textarea>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Golongan Darah</legend>
                    <div class="col-sm-9">
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah1" value="a" checked>
                            <label class="form-check-label" for="goldarah1">
                                A
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="b">
                            <label class="form-check-label" for="goldarah2">
                                B
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah2" value="ab">
                            <label class="form-check-label" for="goldarah2">
                                AB
                            </label>
                        </div>
                        <div class="form-check d-inline mr-3">
                            <input class="form-check-input" type="radio" name="goldarah" id="goldarah3" value="o">
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
                        <option value="lajang">Lajang</option>
                        <option value="menikah">Menikah</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="b_bidang" class="col-sm-3 col-form-label">Bidang Kepegawaian</label>
                <div class="col-sm-9">
                    <select class="form-control" name="b_bidang" id="b_bidang" required autocomplete="off">
                        <option value="Kepala Dinas">Kepala Dinas</option>
                        <option value="Sub Umum">Sub Umum</option>
                        <option value="Sub Keuangan">Sub Keuangan</option>
                        <option value="Sub Program">Sub Program</option>
                        <option value="Penataan Lingkungan">Penataan Lingkungan</option>
                        <option value="PPL & PLB3">PPL & PLB3</option>
                        <option value="Pengelolaan Sampah">Pengelolaan Sampah</option>
                        <option value="Pertamanan">Pertamanan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="j_jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <select class="form-control" name="j_jabatan" id="j_jabatan" required autocomplete="off">
                        <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                        <option value="Pembina Utama Madya IV/d">Pembina Utama Madya IV/d</option>
                        <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                        <option value="Pembina Tingkat I IV/b">Pembina Tingkat I IV/b</option>
                        <option value="Pembina IV/a">Pembina IV/a</option>
                        <option value="Penata Tingkat I III/d">Penata Tingkat I III/d</option>
                        <option value="Penata III/c">Penata III/c</option>
                        <option value="Penata Muda Tingkat I III/b">Penata Muda Tingkat I III/b</option>
                        <option value="Penata Muda III/a">Penata Muda III/a</option>
                        <option value="Pengatur Tingkat I II/d">Pengatur Tingkat I II/d</option>
                        <option value="Pengatur II/c">Pengatur II/c</option>
                        <option value="Pengatur Muda Tingkat I II/b">Pengatur Muda Tingkat I II/b</option>
                        <option value="Pegatur Muda II/a">Pegatur Muda II/a</option>
                        <option value="Juru Tingkat I I/d">Juru Tingkat I I/d</option>
                        <option value="Juru I/c">Juru I/c</option>
                        <option value="Juru Muda Tingkat I I/b">Juru Muda Tingkat I I/b</option>
                        <option value="Juru Muda I/a">Juru Muda I/a</option>

                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="tmt_sk" class="col-sm-3 col-form-label">TMT</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tmt_sk" placeholder="TMT" required>
                </div>
            </div>


            <? echo date("Y-m-d, H:i:s",strtotime("+1 year")); ?><br />
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">Pas Photo</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="foto" required>
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

    // menambahkan script khusus untuk halaman ini saja
    $addscript = '
        <script src="'.asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>
        <script>
            $(".datepicker").datepicker()

            
        $(document).on("change", ".custom-file-input", function (event) {
            $(this).next(".custom-file-label").html(event.target.files[0].name);
            })    
        </script>
    ';
    // menghubungkan file footer dengan file tambah Pegawai
    require_once "template/footer.php";
?>