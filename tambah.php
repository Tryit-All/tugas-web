<?php
require('koneksi.php');

$connected = new query();
if (isset($_POST['tambah'])) {
    $userName = $_POST['txt_fullname'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_password'];

    $query = "INSERT INTO user_detail VALUES ('','$userMail','$userPass','$userName',2)";
    $result = mysqli_query($connected->connect(), $query);
    header('Location: dasboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="form-validation">
                <form class="form-valide" action="tambah.php" method="POST" novalidate="novalidate">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-username" name="txt_fullname" placeholder="Enter a username..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-email" name="txt_email" placeholder="Your valid email..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="val-password" name="txt_password" placeholder="Choose a safe one..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <a href="dasboard.php"><input type="submit" class="btn btn-primary" name="tambah"></input></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>