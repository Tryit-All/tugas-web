<?php
require ('koneksi.php');

session_start();

$connected = new query();
if (isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass =$_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email = '$email' AND user_password = '$pass'";
        $result = mysqli_query($connected->connect(), $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['User_fullname'];
            $level = $row['level'];
        }
        if ($num !=0) {
            if ($userVal==$email && $passVal==$pass) {
                header('Location: dasboard.php');
            }else{
                $error = 'user atau password salah';
                header('Location: login.php');
            }
        }else {
            $error = 'user tidak ditampilkan!!';
            header('Location: login.php');
        }
    }else {
        $error ="Data tidak boleh kosong!!";
        echo $error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>
<body>
<form action="login.php" method="POST">
<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span> Login</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="email" name="txt_email"><br>
				<input type="password" placeholder="password" name="txt_pass"><br>
				<input class="buttoninput" type="submit" name="submit" value="Login">
                <a href="register.php"> <input type="button" value="Regiter"></a>
		</div>
</form>

</body>
</html>