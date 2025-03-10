<?php

require_once "config.php";

if (isset($_GET['add'])) {
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $nama_pegawai = strip_tags($_POST['nama_pegawai']);
    $tempat_lahir = strip_tags($_POST['tempat_lahir']);
    $tgl_lahir = strip_tags($_POST['tgl_lahir']);
    $jk = strip_tags($_POST['jk']);
    $no_hp = strip_tags($_POST['no_hp']);
    $agama = strip_tags($_POST['agama']);
    $email = strip_tags($_POST['email']);
    $alamat = strip_tags($_POST['alamat']);
    $goldarah = strip_tags($_POST['goldarah']);
    $stat_nikah = strip_tags($_POST['stat_nikah']);
    $j_jabatan = strip_tags($_POST['j_jabatan']);
    $b_bidang = strip_tags($_POST['b_bidang']);
    $tmt_sk = strip_tags($_POST['tmt_sk']);

    $ekstensi  = ['png', 'jpeg', 'jpg'];
    $namaFile    = strtolower($_FILES['foto']['name']);
    $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuranFile    = $_FILES['foto']['size'];
    $sumber   = $_FILES['foto']['tmp_name'];
    $foto = uniqid();
    $foto .= '.';
    $foto .= $tipe;

    $tmtyad = date('Y-m-d', strtotime('+4 year', strtotime($tmt_sk)));

    

    if (in_array($tipe, $ekstensi) === true) {
        if ($ukuranFile < 1048576) { //1 mb
            $lokasi = "../assets/img/" . $foto;
            create("INSERT INTO pegawai VALUES ('$nip','$nama_pegawai','$foto','$tempat_lahir','$tgl_lahir','$jk','$no_hp','$agama','$email','$alamat','$goldarah','$stat_nikah','$j_jabatan','$b_bidang','$tmt_sk','$tmtyad','aktif')");
            $upload = move_uploaded_file($sumber, $lokasi);
            if ($upload) {
                echo '<script>
                        alert("Data Berhasil Ditambah")
                        window.location = "' . base_url('pegawai') . '";
                        </script>';
            } else {
                echo '<script>
                        alert("Data Gagal Diupload")
                        window.location = "' . base_url('tambah_pegawai') . '";
                        </script>';
            }
        } else {
            echo '<script>alert("Maaf Ukuran File Terlalu Besar")
                        window.location = "' . base_url('tambah_pegawai') . '";
                        </script>';
        }
    } else {
        echo '<script>alert("Maaf Jenis File Tidak Diizinkan")
                window.location = "' . base_url('tambah_pegawai') . '";
                </script>';
    }
} elseif (isset($_GET['edit'])) {
    $nipAsli = mysqli_real_escape_string($conn, $_POST['nipAsli']);
    $foto_lama = strip_tags($_POST['foto_lama']);
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);
    $nama_pegawai = strip_tags($_POST['nama_pegawai']);
    $tempat_lahir = strip_tags($_POST['tempat_lahir']);
    $tgl_lahir = strip_tags($_POST['tgl_lahir']);
    $jk = strip_tags($_POST['jk']);
    $no_hp = strip_tags($_POST['no_hp']);
    $agama = strip_tags($_POST['agama']);
    $email = strip_tags($_POST['email']);
    $alamat = strip_tags($_POST['alamat']);
    $goldarah = strip_tags($_POST['goldarah']);
    $stat_nikah = strip_tags($_POST['stat_nikah']);
    $b_bidang = strip_tags($_POST['b_bidang']);
    $j_jabatan = strip_tags($_POST['j_jabatan']);
    $tmt_sk = strip_tags($_POST['tmt_sk']);
    $tmtyad = strip_tags($_POST['tmtyad']);
    $stat_user = strip_tags($_POST['stat_user']);
    

    // cek form, apakah user hanya mengubah data tanpa mengganti foto
    // jika foto tidak diubah, simpan data formnya saja
    if ($_FILES['foto']['name'] == '') {
        $query = mysqli_query($conn, "UPDATE pegawai SET nip='$nip',nama_pegawai='$nama_pegawai', tempat_lahir='$tempat_lahir', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jk', no_hp='$no_hp', agama='$agama', email='$email',alamat='$alamat',gol_darah='$goldarah',status_pernikahan='$stat_nikah', jabatan='$j_jabatan', bidang='$b_bidang', tmt_sk_pangkat='$tmt_sk', tmt_yad='$tmtyad', status_user='$stat_user' WHERE nip='$nipAsli' ");
        if ($query) {
            echo '<script>
                alert("Data Berhasil Diperbarui")
                window.location = "' . base_url('pegawai') . '";
                </script>';
        } else {
            echo '<script>
                alert("Data Gagal Diperbarui")
                window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                </script>';
        }
    } elseif ($_FILES['foto']['name'] !== '') {
        $ekstensi  = ['png', 'jpeg', 'jpg'];
        $namaFile    = strtolower($_FILES['foto']['name']);
        $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
        $ukuranFile    = $_FILES['foto']['size'];
        $sumber   = $_FILES['foto']['tmp_name'];
        $foto = uniqid();
        $foto .= '.';
        $foto .= $tipe;

        if (in_array($tipe, $ekstensi) === true) {
            if ($ukuranFile < 1048576) { //1 mb
                // hapus foto lama sebelum upload foto baru
                unlink("../assets/img/" . $foto_lama);

                mysqli_query($conn, "UPDATE pegawai SET nip='$nip',nama_pegawai='$nama_pegawai', foto_pegawai='$foto' ,tempat_lahir='$tempat_lahir', tanggal_lahir='$tgl_lahir', jenis_kelamin='$jk', no_hp='$no_hp', agama='$agama', email='$email',alamat='$alamat',gol_darah='$goldarah',status_pernikahan='$stat_nikah', jabatan='$j_jabatan', bidang='$b_bidang',  tmt_sk_pangkat='$tmt_sk', tmt_yad='$tmtyad', status_user='$stat_user' WHERE nip='$nipAsli' ");
                $lokasi = "../assets/img/" . $foto;
                $upload = move_uploaded_file($sumber, $lokasi);
                if ($upload) {
                    echo '<script>
                            alert("Data Berhasil Ditambah")
                            window.location = "' . base_url('pegawai') . '";
                            </script>';
                } else {
                    echo '<script>
                            alert("Data Gagal Diupload")
                            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                            </script>';
                }
            } else {
                echo '<script>alert("Maaf Ukuran File Terlalu Besar")
                            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                            </script>';
            }
        } else {
            echo '<script>alert("Maaf Jenis File Tidak Diizinkan")
                    window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
                    </script>';
        }
    } else {
        echo '<script>
            alert("Data Gagal Diperbarui")
            window.location = "' . base_url('edit_pegawai') . '?id=' . $nipAsli . '";
            </script>';
    }
}
