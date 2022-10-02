<?php
require('koneksi.php');

$connected = new query();
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $userMail = $_POST['txt_email'];
    $userName = $_POST['txt_nama'];
    $userLevel = $_POST['txt_level'];
    $query = "UPDATE user_detail SET user_email='$userMail' , user_fullname='$userName', level= '$userLevel' WHERE id='$id';";
    mysqli_query($connected->connect(), $query);
    header("Location: dasboard.php");
} elseif (isset($_POST['delete'])) {

    mysqli_query($connected->connect(), "DELETE FROM user_detail WHERE id='$id'");
    header("Location: dasboard.php");
}
?>