<?php
require('koneksi.php');

$connected = new query();
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $email = $_POST['email'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $query = "UPDATE diri SET nama='$nama', lahir='$tgl', email='$email', telpon='$tlpn', alamat='$alamat', kelamin='$kelamin' WHERE id='$id'";
    mysqli_query($connected->connect(), $query);
    header("Location: dts_vsga.php");
}elseif (isset($_POST['update2'])) {
    $userMail = $_POST['txt_email'];
    $userName = $_POST['txt_nama'];
    $userLevel = $_POST['txt_level'];
    $query = "UPDATE user_detail SET user_email='$userMail' , user_fullname='$userName', level= '$userLevel' WHERE id='$id';";
    mysqli_query($connected->connect(), $query);
    header("Location: index.php");
}elseif (isset($_POST['delete'])) {

    mysqli_query($connected->connect(), "DELETE FROM diri WHERE id='$id'");
    header("Location: dts_vsga.php");
}elseif (isset($_POST['delete2'])) {
    
    mysqli_query($connected->connect(), "DELETE FROM user_detail WHERE id='$id'");
    header("Location: index.php");
}
elseif (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $email = $_POST['email'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];

    $query = "INSERT INTO diri (id, nama, lahir, email, telpon, alamat, kelamin) VALUES ('','$nama','$tgl','$email','$tlpn','$alamat','$kelamin')";

    $result = mysqli_query($connected->connect(), $query);
    header('Location: dasboard.php');
}
?>