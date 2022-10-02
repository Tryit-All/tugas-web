<?php
require ('koneksi.php');

$connected = new query();
if (isset($_POST['daftar'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];

    $query = "INSERT INTO user_detail VALUES ('','$userMail','$userPass','',2)";
    $result = mysqli_query($connected->connect(), $query);
    header('Location: login.php');
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
<form action="register.php" method="POST">
<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span> Register</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="email" name="txt_email"><br>
				<input type="password" placeholder="password" name="txt_pass"><br>
				<input class="buttoninput" type="submit" name="daftar" value="Register">
		</div>
</form>

</body>
</html>