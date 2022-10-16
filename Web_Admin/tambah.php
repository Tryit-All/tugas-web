<?php
include 'koneksi.php';

$connected = new query();
if (isset($_POST['tambah'])) {
    $userName = $_POST['txt_fullname'];
    $userMail = $_POST['txt_email'];
    $userPass = md5($_POST['txt_password']);
    $userRole = $_POST['txt_level'];

    $query = "INSERT INTO `user_detail` (`id`, `user_email`, `user_password`, `user_fullname`, `level`) VALUES ('','$userMail','$userPass','$userName','$userRole')";
    $result = mysqli_query($connected->connect(), $query);
    header('Location: index.php');
} elseif (isset($_POST['tambah2'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $email = $_POST['email'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $sql = "INSERT INTO diri (id, nama, lahir, email, telpon, alamat, kelamin)
    VALUES ('','$nama','$tgl','$email','$tlpn','$alamat','$kelamin')";
    if (mysqli_query($connected->connect(), $sql)) {
        header("Location: dts_vsga.php");
        echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
    location.replace('tampil.php');
    </script>";
    } else {
        header("Location: index.php");
        echo "<script type='text/javascript'>
    alert('Data Gagal Dimasukan!');
    location.replace('tampil.php');
    </script>";
    }
    mysqli_close($connected->connect());
    //header("Location:input.php");
}
?>