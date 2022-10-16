<?php
include 'koneksi.php';
session_start();

$connected = new query();

$limit = 10 * 1024 * 1024;
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$jumlahFile = count($_FILES['foto']['name']);
for ($x = 0; $x < $jumlahFile; $x++) {
    $namafile = $_FILES['foto']['name'][$x];
    $tmp = $_FILES['foto']['tmp_name'][$x];
    $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['foto']['size'][$x];
    if ($ukuran > $limit) {
        $_SESSION['flashError']='Ukuran terlalu besar';
        header("location:index.php?alert=gagal_ukuran");
    } else {
        if (!in_array($tipe_file, $ekstensi)) {
            $_SESSION['flashError']='Format File Tidak Sesuai';
            header("location:index.php?alert=gagal_ektensi");
        } else {
            move_uploaded_file($tmp, '../file/' . date('d-m-Y') . '-' . $namafile);
            $xl = date('d-m-Y') . '-' . $namafile;
            mysqli_query($connected->connect(), "INSERT INTO gambar VALUES(NULL, '$xl')");
            $_SESSION['flashBerhasil']='Uplode Berhasil';
            header("location: Multipleuplode.php");
        }
    }
}
