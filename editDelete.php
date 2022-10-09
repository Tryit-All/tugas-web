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
    header("Location: index.php");
} elseif (isset($_POST['delete'])) {

    mysqli_query($connected->connect(), "DELETE FROM diri WHERE id='$id'");
    header("Location: index.php");
} elseif (isset($_POST['tambah'])) {
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