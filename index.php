<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: pages-login.php");
    exit();
}else {
    if (($_SESSION['level'] == '2')) {
        header("Location: Web_User/index.php");
        exit();
    }else {
        header("Location: Web_Admin/index.php");
        exit();
    }
}
?>